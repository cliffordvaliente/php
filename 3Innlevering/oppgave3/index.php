<?php

// Skriv et program som ber om startsaldo S0 og rente. Programmet skal beregne ny saldo S1 etter ett år 
// inkludert renter og skrive S1 ut på skjermen. Utvid programmet med en løkke, slik at saldo Sn etter en 
// periode på n år kan beregnes. Skriv ut ny saldo for hvert år og Sn etter n år. 

$startSaldo = floatval($_GET['S0']); // Anta at startsaldo er sendt som en GET parameter
$rente = floatval($_GET['rente']); // Anta at rente er sendt som en GET parameter
$periode = intval($_GET['n']); // Anta at perioden er sendt som en GET parameter

for ($i = 1; $i <= $periode; $i++) {
   $startSaldo = $startSaldo + ($startSaldo * $rente / 100);
   echo "Saldo etter " . $i . " år: " . $startSaldo . "<br>";
}
?>