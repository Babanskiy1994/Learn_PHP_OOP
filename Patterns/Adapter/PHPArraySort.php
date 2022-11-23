<?php

namespace Patterns\Adapter;

class PHPArraySort implements PHPArraySortInterfaceAdapter
{
    public function getData():array
    {
        return [
            'property' => 'order_id',
            'direction' => 'DESC'
        ];
    }
}