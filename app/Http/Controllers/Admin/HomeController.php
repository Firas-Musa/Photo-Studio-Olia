<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\models\post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts_count = Post::all()->count();

        return view('admin.home.index', [
            'posts_count' => $posts_count
        ]);
    }
    
}
