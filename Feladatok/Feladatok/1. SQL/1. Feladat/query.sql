-- Írjon egy olyan lekérdezést, ami kilistázza a Szűcs vezetéknevű vásárlók adatait és hogy összesen melyikük mennyit költött a gyógyszertárakban.

SELECT SUM(b.osszeg) as SUMMA, vasarlo.*
FROM vasarlo
         LEFT JOIN blokk b on vasarlo.id = b.vasarlo_id
WHERE vasarlo.nev LIKE 'Szűcs%'
GROUP BY vasarlo.id