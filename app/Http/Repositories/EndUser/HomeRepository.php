<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\HomeInterface;
use App\Http\Traits\EndUser\HomeTrait;
use App\Models\Category;
use App\Models\Product;
use function compact;

class HomeRepository implements HomeInterface
{
    use HomeTrait;

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
