-- Írjon egy olyan lekérdezést, ami kilistázza patika típusonként azokat a gyógyszertárakat, amiknél a vásárlók legalább 1 000 000 forintot hagytak ott.
-- A kimenetben három oszlop legyen, 'tipus', 'gyogyszertar' és 'vasarlasok osszege', a lista legyen típus szerint és gyogyszertar név szerint növekvő sorrendbe rendezve.

SELECT patika_tipus.nev, GROUP_CONCAT(distinct patika.nev) AS gyogyszertar, SUM(blokk.osszeg) AS vasarlasok_osszege
FROM patika_tipus
         LEFT JOIN patika ON patika.patika_tipus_id = patika_tipus.id
         LEFT JOIN blokk ON blokk.patika_id = patika.id
GROUP BY patika_tipus.id, patika.id
HAVING vasarlasok_osszege > 1000000
ORDER BY patika_tipus.nev, patika.nev