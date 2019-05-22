<?php

namespace Dnvcomp\Http\Controllers;

use Illuminate\Http\Request;
use Dnvcomp\Http\Requests;
use Mail;

class ContactsController extends DnvcompController
{
    public function __construct()
    {
        parent::__construct(new \Dnvcomp\Repositories\MenusRepository(new \Dnvcomp\Menu));
        $this->template = env('DNVCOMP').'.contacts';
    }

    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению',
                'email' => 'Поле :attribute должно содержать правильный е-майл адрес'
            ];

            $this->validate($request, [
                'name' => 'required|max:255',
                'email' => 'required|email',
                'text' => 'required'
            ],$messages);

            $data = $request->all();

            $result = Mail::send(env('DNVCOMP').'.email',['data'=> $data], function ($m) use ($data) {
                $mail_admin = env('MAIL_ADMIN');
                $m->from($data['email'], $data['name']);
                $m->to($mail_admin, 'Mr.Admin')->subject('Question');
            });
            if ($result) {
                return redirect()->route('contacts')->with('status','Сообщение отправлено');
            }

        }

        $this->title = 'Контакты';
        $this->meta_desc = 'Наши контакты';
        $this->keywords = 'Контактная информация';

        $content = view(env('DNVCOMP').'.contact_content')->render();
        $this->vars = array_add($this->vars,'content',$content);

        return $this->renderOutput();
    }
}
