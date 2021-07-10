<?php


namespace App\Solids\LiskovSubstitution;

class User
{
    public function getData(UserDataInterFace $userDataInterFace)
    {
       return $userDataInterFace->getData();
    }
}
