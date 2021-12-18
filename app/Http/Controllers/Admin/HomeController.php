<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\models\post;
use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $posts_count = Post::all()->count();
        $categories = Category::orderBy('created_at', 'desc')->get();


        return view('admin.home.index', [
            'posts_count' => $posts_count,
            'categories' => $categories
        ]);
    }
    
}
