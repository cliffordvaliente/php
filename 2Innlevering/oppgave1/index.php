<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <title>Oppgave 1</title>
</head>

<body>

      <!-- We create a script -------------------------!-->
      <?php

      // Global scope variable for the function 
      $surnameExample = "miCheLanGelo";

      // Create a function 
      
      // we create a function called surnamechecker and we pass an argument or info to the function 
// called $surnameExample
// Here we will take the variable "michelangelo" inside the function as an argument
// and it will run the function with the argument 
      
      function surnameChecker($surnameExample)
      {

            // We create a variable that we will use in the future 
// Also we using 2 functions ucfirst() & strtolower() that will fix the string to our desire by passing the argument
      
            $fixedSurname = ucfirst(strtolower($surnameExample));

            // We create a variable that we will print to show the size of the surname
            $sizeofSurname = strlen($fixedSurname);

            // Make all the surname small letters &
// We print aka echo the sentence
      
            echo "The fixed surname in a correct way is: $fixedSurname";

            // give some space between the sentences
      
            echo "<br><br>";

            // we echo / print the size of the surname
            echo "the size of the surname is $sizeofSurname";



      }

      // In order to run the function we need to call it
// We Call and run the function we created above including the Argument 
// by writing the fucntion and we need to pass the argument inside
      
      surnameChecker($surnameExample);
      // Other method more easier is as follows
      echo "<br><br>";
      echo ucfirst(strtolower($surnameExample));
      echo "<br><br>";
      echo "the size of the surname is " + strlen($surnameExample);
      ?>

</body>

</html>