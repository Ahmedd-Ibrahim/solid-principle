<?php


namespace App\Solids\InterfaceSegregation;


class Moderator implements AccessibleInterface, WorkableInterface, ManageableInterface
{
    public function HasAccess()
    {
        return [
            'edit',
            'update',
            'create'
        ];
    }

    public function work()
    {
        return [
            'write content'
        ];
    }

    public function Tasks()
    {
      return array_merge($this->work(), $this->HasAccess());
    }
}
