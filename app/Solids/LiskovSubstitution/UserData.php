<?php


namespace App\Solids\LiskovSubstitution;


class UserData implements UserDataInterFace
{

    public function getData()
    {
        $userData = 'single user';
        return [$userData];
    }
}
