<?php

namespace Dnvcomp\Repositories;

use Dnvcomp\Permission;

class PermissionsRepository extends Repository
{
    public function __construct(Permission $permission)
    {
        $this->model = $permission;
    }
}