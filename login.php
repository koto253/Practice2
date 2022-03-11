<?php
/*
    Shanick Francisco
    Afifa Tasnova
    Ismael Bah
*/

//Variables 
$name = $_POST["Username"];
$pass = $_POST["Password"];

// Variable with addslashes
$modName = addslashes($_POST["Username"]);
$modPass = addslashes($_POST["Password"]);
$passLen = strlen($_POST["Password"]);

// Display
echo "Original Username: $name <br>
      Original Password: $pass <br>";

// Display with trim()
echo trim("Modified username: $modName <br>
           Modified password: $modPass");

echo md5($pass);

// RETURN THE LENGTH OF THE STRING

echo ("<br> Length_Of_Password: $passLen");
