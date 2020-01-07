<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\get;

class PagesController
{
    public function home(): int
    {
        $users = App::get('database')->selectAll('users');

        return viewData('index', ['users' => $users]);
    }

    public function blog(): int
    {
        $name = 'Blog';

        return view('blog');  
    }

    public function problems(): int
    {
        return view('problems');
    }

    public function os(): int
    {
        return view('os');
    }

    public function php(): int 
    {
        return view('phpPage');
    }

    public function english(): int
    {
        return view('en');
    }
}
