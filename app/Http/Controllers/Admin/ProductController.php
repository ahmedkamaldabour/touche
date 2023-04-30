<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\ProductInterface;
use App\Http\Requests\Admin\ProductStoreRequest;
use App\Http\Requests\Admin\ProductUpdataRequest;
class ProductController extends Controller
{
    private $productInterface;

    public function __construct(ProductInterface $productInterface)
    {
        $this->productInterface = $productInterface;
    }

    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        return $this->productInterface->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->productInterface->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request)
    {
        return $this->productInterface->store($request);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return $this->productInterface->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdataRequest $request, string $id)
    {
        return $this->productInterface->update($request, $id);
    }

    public function show(string $id)
    {
        return $this->productInterface->show($id);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->productInterface->destroy($id);
    }
}
