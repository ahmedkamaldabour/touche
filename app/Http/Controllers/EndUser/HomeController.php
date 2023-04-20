<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\EndUser\HomeInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $homeInterface;

    public function __construct(HomeInterface $homeInterface)
    {
        $this->homeInterface = $homeInterface;
    }

    public function index()
    {
        return $this->homeInterface->index();
    }

    public function contact()
    {
        return $this->homeInterface->contact();
    }

    public function chefs()
    {
        return $this->homeInterface->chefs();
    }

    public function menu()
    {
        return $this->homeInterface->menu();
    }

    public function gallery()
    {
        return $this->homeInterface->gallery();
    }

}
