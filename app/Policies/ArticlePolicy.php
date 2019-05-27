<?php

namespace Dnvcomp\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Dnvcomp\User;

class ArticlePolicy
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

    public function save(User $user)
    {
        return $user->canDo('ADD_ARTICLES');
    }
}
