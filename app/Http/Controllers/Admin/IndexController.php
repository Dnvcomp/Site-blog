<?php

namespace Dnvcomp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Dnvcomp\Http\Requests;
use Dnvcomp\Http\Controllers\Controller;

class IndexController extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->template = env('DNVCOMP').'.admin.index';
    }

    public function index()
    {
        $this->title = 'Административная часть';
        return $this->renderOutput();
    }
}
