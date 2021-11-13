-- Írjon egy olyan lekérdezést, ami kilistázza hogy az egyes patikákban milyen településekről érkezett vásárlók költöttek.
-- A kimenetben két oszlop legyen, 'patika neve' és 'telepules', a lista legyen patika neve szerint és település nevek szerint növekvő sorrendben rendezve.
-- Figyeljen rá, hogy a kimenetben minden adat csak egyszer szerepeljen.

SELECT patika.nev, GROUP_CONCAT(distinct v.telepules ORDER BY v.telepules SEPARATOR ', ') AS telepules
FROM patika
         LEFT JOIN blokk b on patika.id = b.patika_id
         LEFT JOIN vasarlo v on v.id = b.vasarlo_id
GROUP BY patika.id
ORDER BY patika.nev
