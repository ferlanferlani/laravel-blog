<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;
class PostController extends Controller
{
    public function post(Post $slug) {
        return view('post', [
            "title" => $slug->title,
            "post" => $slug,
            "category" => Category::all(),
            "recentPost" => Post::all()
        ]);
    }
}