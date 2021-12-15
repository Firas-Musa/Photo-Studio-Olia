<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;



class HomeControllerWelcome extends Controller
{
    public function index()
    {
        $posts_count = Post::all()->count();
        $categories = Category::orderBy('created_at', 'desc')->get();

        return view('welcome', [
            'posts_count' => $posts_count,
            'categories' => $categories
        ]);
    }
}
