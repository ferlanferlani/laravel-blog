<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categories() {
        return view('categories', [
            'title' => 'Categories',
            'category' => Category::all()
        ]);
    }
}
