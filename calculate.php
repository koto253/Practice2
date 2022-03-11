<?php
/*
    Shanick Francisco
    Afifa Tasnova
    Ismael Bah
*/
// Retrieve form $_GET autoglobal array
$secs = $_GET["Seconds"];

// calculate the amount of hour and second
$hour = floor($secs / 3600);
$remainSec = $secs % 3600;
$min = floor($remainSec / 60);
$second = $remainSec % 60;



echo "<p>
$hour hour, $min min and $second seconds
</p>";
