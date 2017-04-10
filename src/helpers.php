<?php

function alert($title = null, $message = null)
{
    $flash = app('BrocardJr\Sweet\Alerts\Flash');

    if( func_num_args() == 0)
    {
        return $flash;
    }

    return $flash->info($title, $message);
}