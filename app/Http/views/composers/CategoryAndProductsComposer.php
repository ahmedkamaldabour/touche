<?php

namespace App\Http\views\composers;

use App\Http\Traits\EndUser\HomeTrait;
use Illuminate\View\View;

class CategoryAndProductsComposer
{
    use HomeTrait;

    public function compose(View $view)
    {
        $categories = $this->allHomeCategories();
        $products = $this->allHomeProducts();
        $view->with(compact('categories', 'products'));
    }
}
