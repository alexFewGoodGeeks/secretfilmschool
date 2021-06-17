<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Repositories\SettingsRepository;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $settingsRepository;

    public function __construct(SettingsRepository $settingsRepository)
    {
        $this->settingsRepository = $settingsRepository;
    }

    public function index()
    {
        $posts = Post::orderByDesc('id')
            ->whereStatus('active')
            ->paginate(4);

        return view('blog.index')
            ->with([
                'posts'    => $posts,
                'settings' => $this->settingsRepository
            ]);
    }

    public function article($slug)
    {
        $post = Post::whereSlug($slug)->get()->first();

        if (!$post) return redirect('/blog');

        return view('blog.article')
            ->with([
                'post' => $post,
                'settings' => $this->settingsRepository
            ]);
    }
}
