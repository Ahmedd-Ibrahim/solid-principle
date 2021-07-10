<?php


namespace App\Solids\OpenClose;

class User
{
    public function getData(UserDataInterFace $userDataInterFace)
    {
       return $userDataInterFace->getData();
    }
}
