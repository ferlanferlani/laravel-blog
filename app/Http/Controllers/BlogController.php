<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog() {
        return view('blog', [
            "title" => "Blog",
            "posts" => Post::all()
        ]);
    }
}
