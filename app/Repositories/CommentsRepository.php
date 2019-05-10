<?php

namespace Dnvcomp\Repositories;

use Dnvcomp\Comment;

class CommentsRepository extends Repository
{
    public function __construct(Comment $comment)
    {
        $this->model = $comment;
    }
}