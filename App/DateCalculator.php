<?php
/**
 * Created by PhpStorm.
 * User: robert
 * Date: 06/02/15
 * Time: 10:25
 */

function addDate($date1, $timeValue)
{
    $date1->add(new DateInterval('P1Y1M4D'));
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