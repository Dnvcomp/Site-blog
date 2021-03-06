<?php

namespace Dnvcomp\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Dnvcomp\User;

class PermissionPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function change(User $user) {
        return $user->canDo('EDIT_USERS');
    }
}