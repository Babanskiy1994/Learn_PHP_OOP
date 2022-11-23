<?php

namespace Patterns\Facade;

class Aex{
    private $aexStatus;

    function bookAex(){
        $this->aexStatus = 'Билет AEX забронирован' . PHP_EOL;
        echo $this->aexStatus;
    }

    function payAex(){
        $this->aexStatus = 'Билет AEX выписан' . PHP_EOL;
        echo $this->aexStatus;
    }
}
