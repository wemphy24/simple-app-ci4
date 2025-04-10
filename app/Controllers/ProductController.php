<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController extends BaseController
{
    public function index()
    {
        $productModel = new Product();
        $products = $productModel->select('products.id, products.name, products.price, categories.name')
            ->join('categories', 'categories.id = products.category_id')
            ->findAll();

        $data = [
            'title' => 'Product',
            'products' => $products,
        ];

        return view('admin/product/index', $data);
    }
}
