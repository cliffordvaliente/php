<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Oppgave 3</title>
</head>

<body>
  <?php

  // Lag et script som validerer om en oppgitt e-postadresse har riktig format. Skriv ut resultatet av valideringen på skjermen.
  

  // Create a variable string email 
  $email = "myuniversity@gmail.com";

  // We are using if statement to check if the condition is true or false
  // filter_var() is a PHP function that performs validation and sanitization checks on variables 
  // To tell filter_var() that we want to validate an email address, we use the FILTER_VALIDATE_EMAIL filter validates an e-mail address.
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    //If the condition is true the code here will run
    echo "The epost: $email is valid.";
  }
  // If the condition is false the code inside "else {}" will run
  else {

    echo "The epost: $email is invalid.";
  }

  ?>

</body>

</html>