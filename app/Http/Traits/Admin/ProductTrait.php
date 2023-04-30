<?php

namespace App\Http\Traits\Admin;

trait ProductTrait
{

    private function getAllProducts()
    {
        return $this->product::with(relations: 'category:id,name')->orderBy(column: 'id', direction: 'desc')->paginate();
//        return $this->product::with(relations: 'category:id,name')->orderBy(column: 'id', direction: 'desc')->get();
    }

    private function getPoductsById($id)
    {
        return $this->product->findOrfail($id);
    }

    private function getProductByIdWithCategory($id)
    {
        return $this->product->with('category:id,name')->findOrfail($id);
    }

    // get category all
    private function getAllCategory()
    {
        return $this->category->get(['id', 'name']);
    }

}
