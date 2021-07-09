<?php namespace App\Solids\SinglePrinciple;

class HtmlFormatar implements SaleOutputInterface
{
    public function output($data)
    {
        return "<h2>" . $data . "</h2>";
    }
}
