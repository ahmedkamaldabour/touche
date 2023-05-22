<?php

namespace App\Http\Traits\EndUser;

use App\Models\Category;


trait HomeTrait
{

    private function Categories()
    {
        return Category::with('products')->get()->map(callback: function ($category) {
            $category->products = $category->products->random(4);
            return $category;
        });
    }

    private function Products()
    {
        $categories = Category::with('products:id,name,category_id,image')->get(['id', 'name']);
        // get random 4 products from each category
        $products = $categories->map(callback: function ($category) {
            $category->products = $category->products->random(6);
            $category->products->map(callback: function ($product) use ($category) {
                $product->category_name = $category->name;
                return $product;
            });
            return $category->products;
        });
        return $products->flatten();
    }

}
