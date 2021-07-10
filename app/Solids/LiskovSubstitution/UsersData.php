<?php


namespace App\Solids\LiskovSubstitution;


class UsersData implements UserDataInterFace
{

    public function getData()
    {
        return ['user1', 'user2'];
    }
}
