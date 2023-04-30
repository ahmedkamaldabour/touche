<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\CategoryInterface;
use App\Http\Requests\Admin\CategoryStoreRequest;
use App\Http\Requests\Admin\CategoryUpdateRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryInterface;
    public function __construct(CategoryInterface $categoryInterface)
    {
        $this->categoryInterface = $categoryInterface;
    }
    public function index()
    {
        return $this->categoryInterface->index();
    }
    public function create()
    {
        return $this->categoryInterface->create();
    }
    public function store(CategoryStoreRequest $request)
    {
        return $this->categoryInterface->store($request);
    }

    public function edit($id)
    {
        return $this->categoryInterface->edit($id);
    }

    public function update(CategoryUpdateRequest $request, $id)
    {
        return $this->categoryInterface->update($request, $id);
    }
    public function destroy($id)
    {
        return $this->categoryInterface->destroy($id);
    }


}
