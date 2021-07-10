<?php


namespace App\Solids\OpenClose;


class UsersData implements UserDataInterFace
{

    public function getData()
    {
        return ['user1', 'user2'];
    }
}
