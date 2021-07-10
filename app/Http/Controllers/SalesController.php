<?php

namespace App\Http\Controllers;

use App\Solids\OpenClose\User;
use App\Solids\OpenClose\UserData;
use App\Solids\OpenClose\UsersData;
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

    public function getUserData()
    {
        return (new User())->getData(new UsersData());
    }

    public function getUserDataLiskov()
    {
        return (new \App\Solids\LiskovSubstitution\User())->getData(new \App\Solids\LiskovSubstitution\UserData());
    }

}
