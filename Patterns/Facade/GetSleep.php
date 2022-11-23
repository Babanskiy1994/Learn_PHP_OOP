<?php

namespace Patterns\Facade;

class GetSleep{
    private $getSleepStatus;

    function bookGS(){
        $this->getSleepStatus = 'GetSleep забронирован' . PHP_EOL;
        echo $this->getSleepStatus;
    }

    function payGS(){
        $this->getSleepStatus = 'GetSleep выписан' . PHP_EOL;
        echo $this->getSleepStatus;
    }
}
