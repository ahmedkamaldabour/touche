<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\DashboardInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $dashboardInterface;
    public function __construct(DashboardInterface $dashboardInterface)
    {
        $this->dashboardInterface = $dashboardInterface;
    }
    public function index(){
        return $this->dashboardInterface->index();
    }
}
