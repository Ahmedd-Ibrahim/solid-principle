<?php


namespace App\Solids\InterfaceSegregation;


class MemberTasks
{
    public function Tasks(ManageableInterface $manageable)
    {
        return $manageable->Tasks();
    }
}
