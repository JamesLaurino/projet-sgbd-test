<?php

namespace App\Http\Controllers;


use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy("created_at", "ASC")->paginate(3);
        return view('categories.category', ['categories' => $categories]);
    }

    public function getById($id) {
        $category = Category::findOrFail($id);
        return view('categories.category-detail', ['category' => $category]);
    }
}
