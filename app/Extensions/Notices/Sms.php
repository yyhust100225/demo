<?php


namespace App\Extensions\Notices;


class Sms implements Notify
{
    public function notify()
    {
        echo 'phone notify';
    }
}
