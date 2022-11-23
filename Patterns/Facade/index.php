<?php

namespace Patterns\Facade;

spl_autoload_register(function($class) {
    $filename = str_replace('\\', '/', $class) . '.php';
    require($filename);
});

class AdditionalProduct
{
    protected $aex;
    protected $getSleep;

    public function __construct()
    {
        $this->aex = new Aex();
        $this->getSleep = new GetSleep();
    }

    public function bookProduct()
    {
        $aex = $this->aex;
        $getSleep = $this->getSleep;

        $aex->bookAex();
        $getSleep->bookGS();
    }

    public function payProduct()
    {
        $aex = $this->aex;
        $getSleep = $this->getSleep;

        $aex->payAex();
        $getSleep->payGS();
    }
}

$additionalProduct = new AdditionalProduct();
$additionalProduct->bookProduct();
$additionalProduct->payProduct();