<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php

   // Create a script that removes potential HTML and PHP code from a last name. 
// The processed name should be displayed on the screen.
   

   // Here we will run echo with the strip tag function which will remove any potential HTML and PHP code
   
   $input = "<i><strong>Hello!</strong></i>";
   $a = strip_tags($input);
   $b = strip_tags($input, "<strong><i>");
   echo $input;
   echo "<br><br>";
   echo $a;
   echo "<br><br>";
   echo $b;
   ?>

</body>

</html>