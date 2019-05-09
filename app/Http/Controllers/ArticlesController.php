<?php

namespace Dnvcomp\Http\Controllers;

use Dnvcomp\Repositories\ArticlesRepository;
use Dnvcomp\Repositories\PortfoliosRepository;
use Illuminate\Http\Request;

use Dnvcomp\Http\Requests;

class ArticlesController extends DnvcompController
{
    public function __construct(PortfoliosRepository $p_rep,ArticlesRepository $a_rep)
    {
        parent::__construct(new \Dnvcomp\Repositories\MenusRepository(new \Dnvcomp\Menu));
        $this->p_rep = $p_rep;
        $this->a_rep = $a_rep;
        $this->bar = 'right';
        $this->template = env('DNVCOMP').'.articles';
    }

    public function index()
    {
        $articles = $this->getArticles();

        $content = view(env('DNVCOMP').'.articles_content')->with('articles',$articles)->render();
        $this->vars = array_add($this->vars,'content',$content);

        return $this->renderOutput();
    }

    public function getArticles($alias = false)
    {
        $articles = $this->a_rep->get(['id','title','alias','created_at','img','desc','user_id','category_id'],false,true);

        if ($articles) {
            //$articles->load('user','category','commenys');
        }
        return $articles;
    }
}
