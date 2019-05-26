<?php

namespace Dnvcomp;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany('Dnvcomp\User','role_user');
    }

    public function perms()
    {
        return $this->belongsToMany('Dnvcomp\Permission','permission_role');
    }
}
