<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\ProductInterface;
use App\Http\Traits\Admin\Redis\ProductRedisTrait;
use App\Http\Traits\Admin\UploadImageTrait;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use function alert;
use function redirect;

/**
 * Class ProductRepository
 * @package App\Http\Repositories\Admin
 * @property Product $product
 * @property Category $category
 */
class ProductRepository implements ProductInterface
{
    use ProductRedisTrait;
    use UploadImageTrait;

    private $product;
    private $category;
    private $db;

    public function __construct(Product $product, Category $category, DB $db)
    {
        $this->product = $product;
        $this->category = $category;
        $this->db = $db;
    }

    public function index()
    {
        $products = $this->getAllProducts();
        return view('Admin.pages.products.index', compact('products'));
    }

    public function create()
    {
        $categories = $this->getAllCategory();
        return view('Admin.pages.products.create', compact('categories'));
    }

    public function store($request)
    {
        $this->db::transaction(function () use ($request) {
            $product = $this->product->create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'category_id' => $request->category_id,
            ]);
            $image = $this->uploadImage($request, $this->product::IMAGE_PATH);
            $this->saveImage($product, $image);
        });
//        $this->setProductsInRedis();
        alert()->success('Product Created Successfully', 'Success');
        return redirect()->route('product.index');

    }

    public function edit($id)
    {
        $product = $this->getPoductsById($id);
        $categories = $this->getAllCategory();
        return view('Admin.pages.products.edit', compact('product', 'categories'));
    }

    public function update($request, $id)
    {
        $product = $this->getPoductsById($id);
        $this->db::transaction(function () use ($request, $product) {
            $product->fill([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'category_id' => $request->category_id,
            ])->save();
            if ($request->hasFile('image')) {
                $image = $this->uploadImage($request, $this->product::IMAGE_PATH, $product->image);
                $this->saveImage($product, $image);
            }
        });
//        $this->setProductsInRedis();
        alert()->success('Product Updated Successfully', 'Success');
        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        $product = $this->getPoductsById($id);
//        $this->db::transaction(function () use ($product) {
//            $this->deleteImage($product->image);
//            $product->delete();
//        });
//        $this->setProductsInRedis();
//        alert()->success('Product Deleted Successfully', 'Success');
         return response()->json(['success' => 'Product Deleted Successfully']);
    }

    public function show($id)
    {
        $product = $this->getProductByIdWithCategory($id);
        return view('Admin.pages.products.show', compact('product'));
    }

}
