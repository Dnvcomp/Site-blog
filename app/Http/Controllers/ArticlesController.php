<?php

namespace Dnvcomp\Http\Controllers;

use Dnvcomp\Repositories\ArticlesRepository;
use Dnvcomp\Repositories\CommentsRepository;
use Dnvcomp\Repositories\PortfoliosRepository;
use Illuminate\Http\Request;

use Dnvcomp\Http\Requests;

class ArticlesController extends DnvcompController
{
    public function __construct(PortfoliosRepository $p_rep,ArticlesRepository $a_rep, CommentsRepository $c_rep)
    {
        parent::__construct(new \Dnvcomp\Repositories\MenusRepository(new \Dnvcomp\Menu));
        $this->p_rep = $p_rep;
        $this->a_rep = $a_rep;
        $this->c_rep = $c_rep;
        $this->bar = 'right';
        $this->template = env('DNVCOMP').'.articles';
    }

    public function index()
    {
        $articles = $this->getArticles();

        $content = view(env('DNVCOMP').'.articles_content')->with('articles',$articles)->render();
        $this->vars = array_add($this->vars,'content',$content);

        $comments = $this->getComments(config('settings.recent_comments'));
        $portfolios = $this->getPortfolios(config('settings.recent_portfolios'));
        $this->contentRightBar = view(env('DNVCOMP').'.articlesBar')->with(['comments'=>$comments,'portfolios'=>$portfolios]);

        return $this->renderOutput();
    }

    public function getComments($take)
    {
        $comments = $this->c_rep->get(['text','name','email','site','article_id','user_id'],$take);

        if ($comments) {
            $comments->load('article','user');
        }
        return $comments;
    }

    public function getPortfolios($take)
    {
        $portfolios = $this->p_rep->get(['title','text','alias','customer','img','filter_alias'],$take);
        return $portfolios;
    }

    public function getArticles($alias = false)
    {
        $articles = $this->a_rep->get(['id','title','alias','created_at','img','desc','user_id','category_id'],false,true);

        if ($articles) {
            $articles->load('user','category','comments');
        }
        return $articles;
    }
}
