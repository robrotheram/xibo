<?php
/**
 * Created by PhpStorm.
 * User: robert
 * Date: 06/02/15
 * Time: 10:30
 */

include 'DateChecker.php';
$dateField = $_POST['dateField'];


echo "date feild was something: $dateField";
checkDate($dateField);

