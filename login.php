<?php
/*
    Shanick Francisco
    Afifa Tasnova
    Ismael Bah
*/

// Retrieve forn values
$name = $_POST["Username"];
$pass = $_POST["Password"];

// Variable with PHP STRING FUNCTIONs
$modName = addslashes($name);
$modPass = addslashes($pass);
$trimUsername = trim($name);
$passLen = strlen($pass);
$md5Password = md5($pass);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: antiquewhite;
            align-items: center;
            font-family: monospace;
            margin: 100px;
            font-size: 18px;
            padding: 15px 0 15px 5px;
        }

        form {
            display: inline;
        }

        .content {
            margin: auto;
            max-width: 375px;
            border-radius: 18px;
        }

        input {
            border: none;
        }

        .submit {
            background-color: blueviolet;
            text-align: center;
            padding: 5px;
            margin-top: 10px;

        }

        p {
            padding-top: 5px;
        }

        fieldset {
            padding: 20px;
            background-color: aquamarine;
            box-shadow: 2px;
            border: none;

        }
    </style>
</head>

<body>
    <h1>Login Information</h1>
    <pre> Your username is <?php echo $name ?> </pre>
    <pre> Modified username is <?php echo $modName ?> </pre>
    <pre> Trimmed username is <?php echo $trimUsername ?> </pre>
    <pre> Your password is <?php echo $pass ?> </pre>
    <pre> Modified password is <?php echo $modPass ?> </pre>
    <pre> Length Of Password is <?php echo $passLen ?> </pre>
    <pre> md5Password is <?php echo $md5Password ?> </pre>
</body>

</html>