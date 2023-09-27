<?php


// Oppgave 1: datosjekk
// Lag et lite script som sjekker hvorvidt en jobbannonse har utløpt eller hvorvidt et event allerede er 
// gjennomført. Skriv ut resultatet på skjermen.

$annonseDato = '2023-09-15'; // Datoen jobbannonsen går ut eller eventet skjer.
$dagensDato = date('Y-m-d');

if ($dagensDato > $annonseDato) {
   echo "Jobbannonsen har utløpt eller eventet er allerede gjennomført.";
} else {
   echo "Jobbannonsen er fortsatt gyldig eller eventet har ikke skjedd ennå.";
}

?>