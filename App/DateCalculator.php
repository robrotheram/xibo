<?php
/**
 * Created by PhpStorm.
 * User: robert
 * Date: 06/02/15
 * Time: 10:25
 */


/* nice simple date add functions*/
/*todo turn to class */

function createNewDate($d, $m, $y)
{
    return new DateTime("$d-$m-$y");
}

function addDay($date1, $t)
{
    $timeValD = $t;
    $date1->add(new DateInterval('P' . $timeValD . 'D'));
    return $date1;
}

function addMonth($date1, $t)
{
    $timeValD = $t;
    $date1->add(new DateInterval('P' . $timeValD . 'M'));
    return $date1;
}

function addYear($date1, $t)
{
    $timeValD = $t;
    $date1->add(new DateInterval('P' . $timeValD . 'Y'));
    return $date1;
}


function addAmount($date, $d, $m, $y)
{
    $date = addDay($date, $d);
    $date = addMonth($date, $m);
    $date = addYear($date, $y);
    return $date;
}

function diffDate($date1, $date2)
{
    $difference = $date1->diff($date2);
    return $difference->format('%R%a days');
}

function timeIsNow()
{
    return new DateTime();
}

function dayOfWeek($date1)
{
    return date_format($date1, "l");
}



?>