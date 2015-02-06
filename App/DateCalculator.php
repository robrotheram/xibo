<?php
/**
 * Created by PhpStorm.
 * User: robert
 * Date: 06/02/15
 * Time: 10:25
 */

function addDay($date1)
{
    $strDay = "P" + 32 + "D";
    $date1->add(new DateInterval($strDay));
    return $date1;
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