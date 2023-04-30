<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\DashboardInterface;

class DashboardRepository implements DashboardInterface
{

    public function index()
    {
        return view('Admin.index');
    }
}
