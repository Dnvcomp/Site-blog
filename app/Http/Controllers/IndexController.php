<?php

namespace Dnvcomp\Http\Controllers;

use Dnvcomp\Repositories\ArticlesRepository;
use Dnvcomp\Repositories\PortfoliosRepository;
use Dnvcomp\Repositories\SlidersRepository;
use Illuminate\Http\Request;
use Dnvcomp\Http\Requests;
use Config;

class IndexController extends DnvcompController
{
    public function __construct(SlidersRepository $s_rep, PortfoliosRepository $p_rep, ArticlesRepository $a_rep)
    {
        parent::__construct(new \Dnvcomp\Repositories\MenusRepository(new \Dnvcomp\Menu));
        $this->s_rep = $s_rep;
        $this->p_rep = $p_rep;
        $this->a_rep = $a_rep;
        $this->bar = 'right';
        $this->template = env('DNVCOMP').'.index';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $portfolios = $this->getPortfolio();

        $content = view(env('DNVCOMP').'.content')->with('portfolios',$portfolios)->render();
        $this->vars = array_add($this->vars,'content',$content);

        $members = view(env('DNVCOMP').'.members')->with('portfolios',$portfolios)->render();
        $this->vars = array_add($this->vars,'members',$members);

        $sliderItem = $this->getSliders();

        $sliders = view(env('DNVCOMP').'.slider')->with('sliders',$sliderItem)->render();
        $this->vars = array_add($this->vars,'sliders',$sliders);

        $this->keywords = 'Home page';
        $this->meta_desc = 'Home page';
        $this->title = 'home page';

        $articles = $this->getArticles();
        $this->contentRightBar = view(env('DNVCOMP').'.indexBar')->with('articles',$articles)->render();


        return $this->renderOutput();
    }

    protected function getArticles()
    {
        $articles = $this->a_rep->get(['title','created_at','img','alias'],Config::get('settings.home_articles_count'));
        return $articles;
    }

    protected function getPortfolio()
    {
        $portfolio = $this->p_rep->get('*',Config::get('settings.home_port_count'));
        return $portfolio;
    }

    public function getSliders()
    {
        $sliders = $this->s_rep->get();

        if ($sliders->isEmpty()) {
            return false;
        }

        $sliders->transform(function ($item,$key) {
            $item->img = Config::get('settings.slider_image').'/'.$item->img;
            return $item;
        });
        return $sliders;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
