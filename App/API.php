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

$dateField = $_POST['dateField'];


echo "date feild was something: $dateField";
checkDateIsValidFormat($dateField);

$date = date_create("2013-02-12");
echo date_format($date, "Y/m/d");


