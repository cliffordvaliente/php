<?php


// Lag et script som skriver ut en beskjed til brukeren basert på hvilket fylke en kommune tilhører. 
// Kommunene som skal sjekkes er: Kristiansand, Lillesand, Birkenes, Harstad, Kvæfjord, Tromsø, Bergen, 
// Trondheim, Bodø og Alta. Beskjeden skal se noe slik ut: «[kommune] ligger i [fylke] fylke». Teksten i 
// klammeparentes må erstattes med det respektive kommunenavnet som sjekkes.


$kommunerOgFylker = array(
   "Kristiansand" => "Agder",
   "Lillesand" => "Agder",
   "Birkenes" => "Agder",
   "Harstad" => "Troms",
   "Kvæfjord" => "Troms",
   "Tromsø" => "Troms",
   "Bergen" => "Vestland",
   "Trondheim" => "Trøndelag",
   "Bodø" => "Nordland",
   "Alta" => "Troms og Finnmark"
);

$kommune = $_GET['kommune']; // Anta at kommunenavnet er sendt som en GET parameter
echo $kommune . " ligger i " . $kommunerOgFylker[$kommune] . " fylke.";
?>