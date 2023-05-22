<?php

namespace App\Http\views\composers;

use App\Http\Traits\EndUser\HomeTrait;
use Illuminate\View\View;

class CategoryAndProductsComposer
{
    use HomeTrait;

    public function compose(View $view)
    {
        $categories = $this->Categories();
        $products = $this->Products();
        $view->with(compact('categories', 'products'));
    }
}
