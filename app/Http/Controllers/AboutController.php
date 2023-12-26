<?php

namespace App\Http\Controllers;
use App\Models\Post;

use App\Models\Tag;
use Illuminate\Http\Request;

class AboutController extends Controller
{


    public function index() {
    $tags = Tag::all();
    $posts = Post::all();
        return view('about', compact('posts', 'tags'));
  }

}
