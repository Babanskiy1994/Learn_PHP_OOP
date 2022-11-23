<?php

namespace Patterns\Adapter;

class JsonSort
{
    public function buildJson():string
    {
        return '{"property":"billing_number","direction":"ASC"}';
    }
}