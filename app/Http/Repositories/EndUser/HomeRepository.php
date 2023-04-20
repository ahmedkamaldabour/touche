<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\HomeInterface;

class HomeRepository implements HomeInterface
{

    public function index()
    {
        return view('EndUser.index');
    }

    public function contact()
    {
        return view('EndUser.pages.contact');
    }

    public function chefs()
    {
        return view('EndUser.pages.chefs');
    }

    public function menu()
    {
        return view('EndUser.pages.menu');
    }

    public function gallery()
    {
        return view('EndUser.pages.gallery');
    }
}
