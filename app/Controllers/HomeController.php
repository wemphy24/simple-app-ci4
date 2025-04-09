<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];

        return view('pages/home', $data);
    }
}
