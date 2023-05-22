<?php

namespace App\Http\Traits\Admin;

trait CategoryTrait
{
    private function getCategoryById($id)
    {
        return $this->category->findOrfail($id);
    }



}
