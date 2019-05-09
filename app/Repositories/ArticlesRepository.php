<?php

namespace Dnvcomp\Repositories;

use Dnvcomp\Articles;

class ArticlesRepository extends Repository
{
    public function __construct(Articles $articles)
    {
        $this->model = $articles;
    }
}