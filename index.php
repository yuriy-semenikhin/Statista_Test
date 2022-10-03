<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'Lib/Calculation.php';

$calculation = new Lib\Calculation();

$text = $calculation->do_the_did();

echo $text;

?>