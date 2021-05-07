<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Blog extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id')
            ->paginate(10);

        return view('blog.index')
            ->with(['posts' => $posts]);
    }

    public function article($slug)
    {
        $post = Post::whereSlug($slug)->get()->first();

        if (!$post) return redirect('/blog');

        return view('blog.article')
            ->with(['post' => $post]);
    }
}
