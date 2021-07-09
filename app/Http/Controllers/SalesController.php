<?php

namespace App\Http\Controllers;

use App\Solids\SinglePrinciple\HtmlFormatar;
use App\Solids\SinglePrinciple\JsonSalesFormatar;
use Illuminate\Http\Request;
use App\Solids\SinglePrinciple\Sale;
use App\Solids\SinglePrinciple\Repo\SaleRepo;

class SalesController extends Controller
{
    public function index()
    {
        return (new Sale())->between(now()->yesterday() ,now())->outPut((new JsonSalesFormatar()));
    }
}