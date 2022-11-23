<?php

namespace Patterns\Adapter;

spl_autoload_register(function($class) {
    $filename = str_replace('\\', '/', $class) . '.php';
    require($filename);
});

$sorts = [
    new PHPArraySort(),
    new JsonSort(),
];

function sorting(array $sorts): void
{
    foreach ($sorts as $sort)
    {
        if ($sort instanceof PHPArraySort){
            $sortData = $sort;
        } elseif ($sort instanceof JsonSort) {
            $sortData = (new JsonToPHPArraySortAdapter($sort));
        }

        renderView($sortData);
    }
}

function renderView(PHPArraySortInterfaceAdapter $adapter): void
{
    print_r($adapter->getData());
}

sorting($sorts);