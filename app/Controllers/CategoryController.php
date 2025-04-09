<?php

namespace App\Controllers;

use App\Models\Category;

class CategoryController extends BaseController
{
    protected $categoryModel;
    public function __construct()
    {
        $this->categoryModel = new Category();
    }
    
    public function index()
    {
        $keyword = $this->request->getGet('keyword');
        if($keyword) {
            $categories = $this->categoryModel->like('name', $keyword)->paginate(5);
        } else {
            $categories = $this->categoryModel->paginate(5);
        }

        $data = [
            'title' => 'Category',
            'categories' => $categories,
            'pager' => $this->categoryModel->pager,
        ];
        return view('admin/category/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Category',
        ];
        return view('admin/category/create', $data);
    }

    public function save()
    {
        // Validate input
        helper(['form']);

        $rules = [
            'name'  => 'required|min_length[2]',
        ];

        if (!$this->validate($rules)) {
            return view('admin/category/create', [
                'validation' => $this->validator,
                'title' => 'Add Category'
            ]);
        }

        $this->categoryModel->insert([
                'name' => $this->request->getPost('name')
        ]);

        session()->setFlashdata('pesan', 'Succesfully added category!');

        return redirect()->to('/admin/category');
    }

    public function edit($id)
    {
        $category = $this->categoryModel->find($id);

        $data = [
            'title' => 'Edit Category',
            'category' => $category
        ];
        return view('admin/category/edit', $data);
    }

    public function update($id)
    {
        $this->categoryModel->update($id, [
            'name'  => $this->request->getPost('name'),
        ]); 

        session()->setFlashdata('pesan', 'Succesfully edit category!');

        return redirect()->to('/admin/category');
    }

    public function delete($id)
    {
        $this->categoryModel->delete($id);

        session()->setFlashdata('pesan', 'Succesfully delete category!');

        return redirect()->to('/admin/category');
    }
}
