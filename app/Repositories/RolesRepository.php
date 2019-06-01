<?php

namespace Dnvcomp\Repositories;

use Dnvcomp\Role;

class RolesRepository extends Repository
{
    public function __construct(Role $role)
    {
        $this->model = $role;
    }
}