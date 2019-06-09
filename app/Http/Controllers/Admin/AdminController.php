<?php

namespace Dnvcomp\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Dnvcomp\Http\Requests;
use Dnvcomp\Http\Controllers\Controller;
use Auth;
use Menu;

class AdminController extends \Dnvcomp\Http\Controllers\Controller
{
    protected $p_rep;
    protected $a_rep;
    protected $user;
    protected $template;
    protected $content = false;
    protected $title;
    protected $vars;

    public function __construct()
    {
        $this->user = Auth::user();
        if (!$this->user) {
            abort(403);
        }
    }

    public function renderOutput()
    {
        $this->vars = array_add($this->vars,'title',$this->title);
        $menu = $this->getMenu();

        $navigation = view(env('DNVCOMP').'.admin.navigation')->with('menu',$menu)->render();
        $this->vars = array_add($this->vars,'navigation',$navigation);

        $topBar = view(env('DNVCOMP').'.admin.topBar')->render();
        $this->vars = array_add($this->vars,'topBar',$topBar);

        if ($this->content) {
            $this->vars = array_add($this->vars,'content',$this->content);
        }
        $footer = view(env('DNVCOMP').'.admin.footer')->render();
        $this->vars = array_add($this->vars,'footer',$footer);
        return view($this->template)->with($this->vars);
    }

    public function getMenu()
    {
        return Menu::make('adminMenu', function ($menu) {
            $menu->add('Статьи',array('route'=>'admin.articles.index'));
            $menu->add('Меню',array('route'=>'admin.menus.index'));
            $menu->add('Пользователи',array('route'=>'admin.users.index'));
            $menu->add('Привилегии',array('route'=>'admin.permissions.index'));
        });
    }
}
