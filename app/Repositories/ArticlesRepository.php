<?php

namespace Dnvcomp\Repositories;

use Dnvcomp\Article;

class ArticlesRepository extends Repository
{
    public function __construct(Article $articles)
    {
        $this->model = $articles;
    }
}