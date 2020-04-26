<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class IndexController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('index', compact('blogs'));
    }
}
