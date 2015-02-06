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





echo "date feild was something: $dateField";
checkDateIsValidFormat($dateField);

$date = date_create("2013-02-12-90");
echo date_format($date, "Y/m/d");


echo "<br>";

$date1 = createNewDate($_POST['dateDay1'], $_POST['dateMonth1'], $_POST['dateYear1']);
$date2 = createNewDate($_POST['dateDay2'], $_POST['dateMonth2'], $_POST['dateYear2']);
echo date_format($date1, "Y/m/d");
echo "<br>";
echo date_format($date2, "d/m/Y");
echo "<br>";
echo diffDate($date1, $date2);
echo "<br>";



