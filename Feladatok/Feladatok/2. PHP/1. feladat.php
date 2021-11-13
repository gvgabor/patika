<?php
/**
 * Írjon az alábbi 'patika' osztályból örökölve egy olyan osztályt, ami a franchise patikákat reprezentálja.
 * Egy franchise patikáról a normál patika adatokon felül nyilván tartjuk, hogy melyik franchise-hoz tartozik
 * (pl. ALMA vagy Gyöngy).
 * Írjon egy olyan metódust a franchise patikák osztályához, ami visszaadja a patikák ún. teljes nevét a
 * következő formátumban: 'patika_neve (patika_települése) [franchise_hálózat_neve]'.
 * Adjon példát a franchise patika osztály használatára, ahol kiíratja a kimenetre egy franchise patika teljes
 * nevét.
 */

class patika
{
    public $nev;
    public $telepules;

    public function __construct(string $nev, string $telepules)
    {
        $this->nev = $nev;
        $this->telepules = $telepules;
    }
}

/***
 * $franchisePatika = new franchisePatika("alma", "Arany sas Patika", "Budapest");
 * echo  $franchisePatika->getName();
 *
 */
class franchisePatika extends patika
{
    public $franchise;

    public function __construct(string $franchise, string $nev, string $telepules)
    {
        $this->franchise = $franchise;
        parent::__construct($nev, $telepules);
    }

    public function getName()
    {
        return sprintf("%s(%s)[%s]", $this->nev, $this->telepules, $this->franchise);
    }
}

?>