<?php

// Lag et script som teller fra 0 til 9 ved hjelp av en for-løkke. Hvert tall skal presenteres på skjermen med 
// ett sekunds pause mellom hvert tall. Du må også regne ut summen av tallene 0-9 og presentere dette 
// to sekunder etter at tellingen er ferdig. Det kan se noe slik ut: «Ferdig å telle! Summen av tallene ble 
// [sum]». Hint: Bruk <br> på slutten av HTML-strengen (da tvinger du frem linjeskift for hver iterasjon).

$sum = 0;
for ($i = 0; $i <= 9; $i++) {
   echo $i . "<br>";
   $sum += $i;
   sleep(1); // Pauser i ett sekund
}
sleep(2); // Pauser i to sekunder
echo "Ferdig å telle! Summen av tallene ble " . $sum . ".";
?>