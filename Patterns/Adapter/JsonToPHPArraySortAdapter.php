<?php

namespace Patterns\Adapter;

class JsonToPHPArraySortAdapter implements PHPArraySortInterfaceAdapter
{
    private JsonSort $sort;

    public function __construct(JsonSort $sort)
    {
        $this->sort = $sort;
    }

    public function getData(): array
    {
        $data = $this->sort->buildJson();

        return json_decode($data, true);
    }
}