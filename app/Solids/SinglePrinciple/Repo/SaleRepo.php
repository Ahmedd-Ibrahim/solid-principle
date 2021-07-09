<?php namespace App\Solids\SinglePrinciple\Repo;

use Illuminate\Support\Facades\DB;

class SaleRepo
{
    public function between($start, $end)
    {
        return DB::table('sales')->whereBetween('created_at', [$start, $end])->sum('charge') / 10;
    }
}
