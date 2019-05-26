<?php

namespace Dnvcomp;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function roles()
    {
        return $this->belongsToMany('Dnvcomp\Role','permission_role');
    }
}
