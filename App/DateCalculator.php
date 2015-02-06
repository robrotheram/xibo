<?php
/**
 * Created by PhpStorm.
 * User: robert
 * Date: 06/02/15
 * Time: 10:25
 */

function addDate($date1, $date2)
{

}

function diffDate($date1, $date2)
{
    $difference = $date1->diff($date2);
    return $difference->format('%R%a days');
}

function timeIsNow()
{

}

function dayOfWeek()
{

}



?>