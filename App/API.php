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

include 'DateCalculator.php';

switch ($_POST['funtion']) {
    case "ADD":
        $date1 = createNewDate($_POST['dateDay1'], $_POST['dateMonth1'], $_POST['dateYear1']);
        $date2 = createNewDate($_POST['dateDay2'], $_POST['dateMonth2'], $_POST['dateYear2']);
        echo "add";
        echo date_format(addAmount($date2, 0, 1, 0), "d/m/Y");
        break;
    case "DIFF":
        $date1 = createNewDate($_POST['dateDay1'], $_POST['dateMonth1'], $_POST['dateYear1']);
        $date2 = createNewDate($_POST['dateDay2'], $_POST['dateMonth2'], $_POST['dateYear2']);
        echo "<br> Diff Check:";
        echo "<br>";
        echo diffDate($date1, $date2);
        break;
    case "TIMETILLNOW":
        $date1 = createNewDate($_POST['dateDay1'], $_POST['dateMonth1'], $_POST['dateYear1']);
        $date2 = createNewDate($_POST['dateDay2'], $_POST['dateMonth2'], $_POST['dateYear2']);
        echo "TimeIsNowCheck";
        echo diffDate(timeIsNow(), $date2);
        break;
    case "DAYDATTE":
        $date1 = createNewDate($_POST['dateDay1'], $_POST['dateMonth1'], $_POST['dateYear1']);
        $date2 = createNewDate($_POST['dateDay2'], $_POST['dateMonth2'], $_POST['dateYear2']);
        echo dayOfWeek($date1);
        echo "<br/>";
        echo dayOfWeek($date2);
        break;
}







