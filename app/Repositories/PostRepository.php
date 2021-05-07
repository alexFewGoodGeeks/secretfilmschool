<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Contracts\PostInterface;

class PostRepository extends MasterRepository implements PostInterface
{
    protected $model = Post::class;

    public function getLatest()
    {
        return Post::latest()->get();
    }
}
