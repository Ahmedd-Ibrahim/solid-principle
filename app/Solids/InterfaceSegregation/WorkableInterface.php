<?php


namespace App\Solids\InterfaceSegregation;


interface WorkableInterface
{
    /**
     * fetch jobs
     *
     * @return array
     */
    public function work();
}
