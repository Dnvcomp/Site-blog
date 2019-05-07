<?php

namespace Dnvcomp\Repositories;

use Dnvcomp\Menu;

class MenusRepository extends Repository
{
    public function __construct(Menu $menu)
    {
        $this->model = $menu;
    }
}