<?php
/**
 * Írja meg az alábbi függvényt, ami az 'adatok' mappában lévő blokkok.php fájlban található blokklista
 * alapján előállítja, hogy melyik franchise melyik patikájában mennyit költöttek a vásárlók összesen,
 * pl.
 * Array
 * (
 *     [Gyöngy] => Array
 *         (
 *             [patikak] => Array
 *                 (
 *                     [Sas Gyógyszertár] => 1139060
 *                     [Mérleg Gyógyszertár] => 1159166
 *                     [Aranykereszt Patika] => 1049913
 *                     [Diófa Gyógyszertár] => 1111097
 *                     [Virág Patika] => 1042351
 *                     [Virág Gyógyszertár] => 959716
 *                 )
 * 
 *         )
 * 
 *     [ALMA] => Array
 *         (
 *             [patikak] => Array
 *                 (
 *                     [Kereszt Patika] => 1089078
 *                     [Sas Patika] => 1110367
 *                     [Arany sas Patika] => 1027534
 *                     [Mérleg Gyógyszertár] => 1120241
 *                 )
 * 
 *         )
 * 
 * )
 */

require 'adatok' . DIRECTORY_SEPARATOR . 'blokkok.php';

function koltesek($blokkok)
{
	$data = [];
    foreach ($blokkok as $item){
        $summa = array_filter($blokkok,function ($mapItem) use ($item){
            return ($mapItem["franchise"] == $item["franchise"]) && ($mapItem["patika"] == $item["patika"]);
        });
        $summa = array_column($summa, "vegosszeg");
        $summa = array_sum($summa);
        $data[$item["franchise"]][$item["patika"]] = $summa;
    }


    return $data;
}

echo "<pre>";
print_r(koltesek($blokkok));
echo "</pre>";
?>