<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\HomeInterface;
use App\Http\Traits\EndUser\HomeTrait;

class HomeRepository implements HomeInterface
{
    use HomeTrait;

    public function index()
    {
        $categories = $this->allHomeCategories();
        $products = $this->allHomeProducts();
        return view('EndUser.index', compact('categories', 'products'));
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
