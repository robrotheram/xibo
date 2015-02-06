<?php
/**
 * Created by PhpStorm.
 * User: robert
 * Date: 06/02/15
 * Time: 10:30
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);

include 'DateChecker.php';
include 'DateCalculator.php';



$dateField = $_POST['dateField'];


echo "date feild was something: $dateField";
checkDateIsValidFormat($dateField);

$date = date_create("2013-02-12-90");
echo date_format($date, "Y/m/d");


echo "<br>";

$date1 = createNewDate($_POST['dateDay1'], $_POST['dateMonth1'], $_POST['dateYear1']);

echo date_format($date1, "Y/m/d");





