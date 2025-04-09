<?php

namespace App\Controllers;

class ProductController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Product',
            'products' => [
                [
                    'name' => 'Apple Macbook',
                    'category_name' => 'Macbook',
                    'price' => 15000000,
                ],
                [
                    'name' => 'Ipad Pro',
                    'category_name' => 'Ipad',
                    'price' => 10000000,
                ],
            ]
        ];

        return view('admin/product/index', $data);
    }
}
