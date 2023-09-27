<?php
$hvetekorn = 1;
$totalHvetekorn = 0;

for ($i = 1; $i <= 64; $i++) {
   echo "Rute " . $i . " har " . $hvetekorn . " hvetekorn.<br>";
   $totalHvetekorn += $hvetekorn;
   $hvetekorn *= 2;
}

$tonn = ($totalHvetekorn * 0.035) / 1000000; // 0.035 gram per hvetekorn og 1 million gram i ett tonn
echo "Totalt antall hvetekorn: " . $totalHvetekorn . "<br>";
echo "Totalt vekt i tonn: " . $tonn;
?>