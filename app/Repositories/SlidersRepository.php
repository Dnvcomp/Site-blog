<?php

namespace Dnvcomp\Repositories;

use Dnvcomp\Slider;

class SlidersRepository extends Repository
{
    public function __construct(Slider $slider)
    {
        $this->model = $slider;
    }
}