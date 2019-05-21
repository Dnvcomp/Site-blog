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
        $this->title = 'Авторы';
        $this->keywords = 'Авторы статей';
        $this->meta_desc = 'Страницы добавленные автором';

        $portfolios = $this->getPortfolios();

        $content = view(env('DNVCOMP').'.portfolios_content')->with('portfolios',$portfolios)->render();
        $this->vars = array_add($this->vars,'content',$content);

        return $this->renderOutput();
    }

    public function getPortfolios($take = false, $paginate = true)
    {
        $portfolios = $this->p_rep->get('*',$take,$paginate);
        if($portfolios) {
            $portfolios->load('filter');
        }
        return $portfolios;
    }

    public function show($alias)
    {
        $portfolio = $this->p_rep->one($alias);
        $portfolios = $this->getPortfolios(config('settings.other_portfolios'),false);

        $this->title = $portfolio->title;
        $this->keywords = $portfolio->keywords;
        $this->meta_desc = $portfolio->meta_desc;

        $content = view(env('DNVCOMP').'.portfolio_content')->with(['portfolio' => $portfolio,'portfolios' => $portfolios])->render();
        $this->vars = array_add($this->vars,'content',$content);

        return $this->renderOutput();
    }
}