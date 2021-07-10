<?php


namespace App\Solids\InterfaceSegregation;


class User implements WorkableInterface, ManageableInterface
{
    public function work()
    {
       return [
           'register'
       ];
    }

    public function Tasks()
    {
       return $this->work();
    }
}
