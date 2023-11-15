<?php

namespace App\Services\DB;
use App\Models\Product;

class ProductService
{
    /**
     * @return Product
     */
    public static function query(): Product
    {
        return new Product();
    }

    /**
     * @return ProductService
     */
    public static function build(): ProductService
    {
        return new self();
    }

    public function getAllProducts(){
        return $this->query()->all();
    }

    public function getTopProducts(){
        return $this->query()->take(8)->get();
    }


}
