<?php
/**
 * Created by PhpStorm.
 * User: adeli
 * Date: 18/04/2019
 * Time: 20:30
 */

function farming($egg)
{
    if ($egg == 0) {
        return 'Bio';
    }
    elseif ($egg == 1) {
        return 'Elevées en plein air';
    }

    elseif ($egg == 2) {
        return 'Elevées au sol';
    }

    else {
        return 'Elevées en cage';
    }
}