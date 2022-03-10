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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login Information</h1>
    <p>Your username is <?php echo $name; ?></p>
</body>

</html>

// Display
echo "Original Username: $name <br>
Original Password: $pass <br>";
echo trim("Modified username: $name2 <br>
Modified password: $pass2");

echo md5($pass);

// RETURN THE LENGTH OF THE STRING

echo ("<br> Length password: $passLen");