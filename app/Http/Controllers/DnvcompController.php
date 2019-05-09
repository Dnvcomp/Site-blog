<?php

namespace Dnvcomp\Http\Controllers;

use Dnvcomp\Repositories\MenusRepository;
use Illuminate\Http\Request;
use Dnvcomp\Http\Requests;
use Menu;

class DnvcompController extends Controller
{
    protected $p_rep;
    protected $s_rep;
    protected $a_rep;
    protected $m_rep;
    protected $template;
    protected $vars = array();
    protected $contentRightBar = false;
    protected $contentLeftBar = false;
    protected $bar = false;

    public function __construct(MenusRepository $m_rep)
    {
        $this->m_rep = $m_rep;
    }

    protected function renderOutput()
    {
        $menu = $this->getMenu();

        $topBar = view(env('DNVCOMP').'.topBar')->render();
        $this->vars = array_add($this->vars,'topBar',$topBar);

        $navigation = view(env('DNVCOMP').'.navigation')->with('menu',$menu)->render();
        $this->vars = array_add($this->vars,'navigation',$navigation);

        if ($this->contentRightBar) {
            $rightBar =view(env('DNVCOMP').'.rightBar')->with('content_rightBar',$this->contentRightBar)->render();
            $this->vars = array_add($this->vars,'rightBar',$rightBar);
        }

        $footer = view(env('DNVCOMP').'.footer')->render();
        $this->vars = array_add($this->vars,'footer',$footer);

        return view($this->template)->with($this->vars);
    }

    protected function getMenu()
    {
        $menu = $this->m_rep->get();

        $mBuilder = Menu::make('MyNav', function ($m) use ($menu) {
            foreach ($menu as $item) {
                if ($item->parent == 0) {
                    $m->add($item->title,$item->path)->id($item->id);
                } else {
                    if ($m->find($item->parent)) {
                        $m->find($item->parent)->add($item->title,$item->path)->id();
                    }
                }
            }
        });
        return $mBuilder;
    }
}
