<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $blogs = Gallery::query()->get();
        return view('blog', compact('blogs'));
    }

    public function show(Gallery $id)
    {
        $post = $id;
        return view('details', compact('post'));
    }
}
