<?php
/*
    Shanick Francisco
    Afifa Tasnova
    Ismael Bah
*/

$secs = $_GET["Seconds"];
$hour = $secs / 3600;
$hours = round($secs / 3600);
$min = ($hour * 60 % 60);
$remainSec = ($secs % 60);

echo "<p>
$hours hour, $min min and $remainSec seconds
</p>";
