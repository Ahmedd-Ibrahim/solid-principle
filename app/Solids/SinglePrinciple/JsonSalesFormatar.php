<?php

namespace App\Solids\SinglePrinciple;

class JsonSalesFormatar implements SaleOutputInterface
{
    public function output($data)
    {
        return json_encode($data);
    }
}
