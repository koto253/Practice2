<?php
/*
    Shanick Francisco
    Afifa Tasnova
    Ismael Bah
*/

//Variables 
$name = $_POST["Username"];
$name2 = addslashes($_POST["Username"]);

$pass = $_POST["Password"];
$pass2 = addslashes($_POST["Password"]);
$passLen = strlen($_POST["Password"]);

// Display
echo "Original Username: $name <br>
      Original Password: $pass <br>";
echo trim("Modified username: $name2 <br>
           Modified password: $pass2");

echo md5($pass);

// RETURN THE LENGTH OF THE STRING 

echo ("<br> Length password: $passLen");
