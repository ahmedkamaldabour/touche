<?php

namespace App\Http\Traits\Admin\Redis;

use App\Http\Traits\Admin\ProductTrait;
use Illuminate\Support\Facades\Redis;
use function serialize;

trait ProductRedisTrait
{
    use ProductTrait;

    // 2 functions below are used to set and get all products from redis cache using laravel pagination
    private function setProductsInRedis()
    {
        $redis = Redis::connection();
        $products = $this->getAllProducts();
        $redis->set('products', serialize($products));
        return true;
    }

    private function getProductsFromRedis()
    {
        $redis = Redis::connection();
        if (isset($_GET['page'])) {
            $this->setProductsInRedis();
        }
        $data = unserialize($redis->get('products'));
        return empty($data) ? $this->setProductsInRedis() : $data;
    }


}
