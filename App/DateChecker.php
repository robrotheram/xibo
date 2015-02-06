<?php
/**
 * Created by PhpStorm.
 * User: robert
 * Date: 06/02/15
 * Time: 10:50
 */
function convertStringToDate($date)
{

}

function checkDate($date)
{
    if (strpos($date, '/') !== false) {
        echo "slashed being used";
    } else if (strpos($date, '.') !== false) {
        echo ". being used";
    } else {
        echo " Error";
    }
}
