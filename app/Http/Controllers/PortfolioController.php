<?php

namespace Dnvcomp\Http\Controllers;

use Dnvcomp\Repositories\PortfoliosRepository;
use Illuminate\Http\Request;

use Dnvcomp\Http\Requests;

class PortfolioController extends DnvcompController
{
    public function __construct(PortfoliosRepository $p_rep)
    {
        parent::__construct(new \Dnvcomp\Repositories\MenusRepository(new \Dnvcomp\Menu()));
        $this->p_rep = $p_rep;
        $this->template = env('DNVCOMP').'.portfolios';
    }

    public function index()
    {
        $this->title = 'Авторы статей';
        $this->keywords = 'Авторы статей';
        $this->meta_desc = 'Авторы статей';

        $portfolios = $this->getPortfolios();

        $content = view(env('DNVCOMP').'.portfolios_content')->with('portfolios',$portfolios)->render();
        $this->vars = array_add($this->vars,'content',$content);

        return $this->renderOutput();
    }

    public function getPortfolios()
    {
        $portfolios = $this->p_rep->get('*',false,true);
        if ($portfolios) {
            $portfolios->load('filter');
        }
        return $portfolios;
    }
}
