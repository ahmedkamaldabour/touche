<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\CategoryInterface;
use App\Http\Traits\Admin\CategoryTrait;
use App\Models\Category;
use function alert;
use function dd;
use function toast;

class CategoryRepository implements CategoryInterface
{
    use CategoryTrait;
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->withCount('products')->get();
        return view('Admin.pages.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('Admin.pages.categories.create');
    }

    public function store($request)
    {
        $this->category::create([
            'name' => $request->name,
        ]);
        alert()->success('Success', 'Category created successfully');
        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        $category = $this->getCategoryById($id);
        return view('Admin.pages.categories.edit', compact('category'));
    }

    public function update($request, $id)
    {
        $category = $this->getCategoryById($id);
        $category->update([
            'name' => $request->name,
        ]);
        alert()->success('Success', 'Category updated successfully');
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $category = $this->getCategoryById($id);
        $category->delete();
        alert()->success('Success', 'Category deleted successfully');
        return redirect()->route('category.index');
    }
}
