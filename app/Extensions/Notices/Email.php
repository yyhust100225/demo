<?php

namespace App\Extensions\Notices;

class Email implements Notify
{
    public function notify()
    {
        echo 'email notify';
    }
}
