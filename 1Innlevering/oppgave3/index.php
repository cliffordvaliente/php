<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Oppgave 3</title>
</head>
<body>

<!-- PHP SCRIPT ------------------------------------------->
<?php

// This is a variable ($) with the value of a number to 22

$age = 22;

// this is a variable ($) with the value of a string ""
$name ="Mr. Massimo";

// create a TABLE

echo "<table>";

// ---------------------------
      echo "<tr>";

      // This is a table header called AGE and NAME
         echo "<th>AGE</th>";
         echo "<th>NAME</th>";

      echo "</tr>";

      // ---------------------------
      echo "<tr>";

      // This is a table data where as we getting the variables $age & $name;
      echo "<td>$age</td>";
      echo "<td>$name</td>";

      echo "</tr>";

echo "</table>";
// ---------------------------


// Ordered list

echo "<h4>Here is the version for an ordered list </h4>";

// Here we will create a ordered list "ol" for the age and name 
// type one so we begin to number 1 a ordered number list
echo "<ol type='1'>";

      echo "  <li> The Name embeded in the variable is: $name </li>";
      echo "  <li> The Age embeded in the variable is: $age </li>";

 // End of ordered list
echo "</ol>";

// Bullet list

echo "<h4>Here is the version for an bullet list </h4>";

// Here we will create a unordered list "ul" for the age and name in a circle bullet list 
// here we write the style attributes thus will show us a dark circle style.
echo "<ul style='list-style-type:disc;'>";

      echo "  <li> The Name embeded in the variable is: $name </li>";
      echo "  <li> The Age embeded in the variable is: $age </li>";

 // End of bullet list
echo "</ul>";


// Inside a paragraph 

echo "<h4>This is a paragraph with the information</h4>";
// here we print or echo in the way of a paragraph and use a 
echo "<p> The value of the name is: $name <br> and the value of the age is: $age</p>";

// end of the assignment for oppgave 3
?>
<!-- PHP SCRIPT ------------------------------------------->
   
</body>
</html>