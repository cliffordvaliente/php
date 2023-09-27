<!DOCTYPE html>
<html lang="no">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Document</title>
</head>

<body>
   <?php

   function generer_tilfeldig_passord()
   {
      $passord_lengde = 8; // Lengden på passordet
      $store_bokstaver = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $små_bokstaver = 'abcdefghijklmnopqrstuvwxyz';
      $tall = '0123456789';

      // Velg minst ett tilfeldig stort tegn & og ett tilfeldig tall
      $passord = $store_bokstaver[rand(0, strlen($store_bokstaver) - 1)];
      // Concatination .= 
      $passord .= $tall[rand(0, strlen($tall) - 1)];




      //? Check this part if this is better than the code below
      // Legg til tilfeldige tegn (inkludert små bokstaver og tall) til passordet
      //for ($i = 1; $i < $passord_lengde; $i++) {
      // $tilfeldig_tegn = $store_bokstaver . $små_bokstaver . $tall;
      // $passord .= $tilfeldig_tegn[rand(0, strlen($tilfeldig_tegn) - 1)];
   

      while (strlen($passord) < $passord_lengde)
      //                                     while() er en funksjon som lar meg bestemme hvor mange loops en funksjon skal gå gjennom, altså hvor mange ganger den skal gjentas.
      {
         $tilfeldige = $store_bokstaver . $små_bokstaver . $tall;
         $passord .= $tilfeldige[rand(0, strlen($tilfeldige) - 1)];
      }

      return $passord;
   }

   $passord = generer_tilfeldig_passord();
   echo "Tilfeldig passord: " . $passord;











   ?>

</body>

</html>