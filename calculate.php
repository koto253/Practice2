<?php
/*
    Shanick Francisco
    Afifa Tasnova
    Ismael Bah
*/
// Retrieve form $_GET autoglobal array
$totalSecond = $_GET["Seconds"];

// calculate the amount of hours, minutes, and seconds
$hours = floor($totalSecond / 3600);
$remainSec = $totalSecond % 3600;
$minutes = floor($remainSec / 60);
$seconds = $remainSec % 60;

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
    <h1></h1>
    <p> <?php echo "{$hours}hr(s), {$minutes}min(s) and {$seconds}sec(s)" ?> </p>

</body>

</html>