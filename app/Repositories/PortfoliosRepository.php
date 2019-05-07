<?php

namespace Dnvcomp\Repositories;

use Dnvcomp\Portfolio;

class PortfoliosRepository extends Repository
{
    public function __construct(Portfolio $portfolio)
    {
        $this->model = $portfolio;
    }
}