<?php

namespace App\Solids\SinglePrinciple;

use App\Solids\SinglePrinciple\Repo\SaleRepo;

class Sale
{
    private $saleRepo;

    private $betweenData;

    public function __construct()
    {
        $this->saleRepo = new SaleRepo();
    }

    public function between($start, $end)
    {
        $this->betweenData = $this->saleRepo->between($start, $end);

        return $this;
    }

    public function outPut(SaleOutputInterface $saleOutputInterface)
    {
        return $saleOutputInterface->output($this->betweenData);
    }
}
