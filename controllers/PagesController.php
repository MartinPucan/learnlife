<?php

class PagesController
{
    public function home()
    {
        $users = App::get('database')->selectAll('users');

        return view('index', ['users' => $users]);
    }

    public function blog()
    {
        $name = 'Blog';

        return view('blog');  
    }

    public function problems()
    {
        return view('problems');
    }

    public function os()
    {
        return view('os');
    }
}
