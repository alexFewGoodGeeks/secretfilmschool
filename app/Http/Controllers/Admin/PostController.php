<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\CreatePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Models\Post;
use App\Repositories\Contracts\PostInterface;
use App\Repositories\Contracts\UserInterface;
use App\Repositories\PostRepository;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use UploadTrait;

    protected $postRepository;
    protected $userRepository;

    public function __construct(PostInterface $postRepository, UserInterface $userRepository)
    {
        $this->postRepository = $postRepository;
        $this->userRepository = $userRepository;
    }


    public function index()
    {
        $posts = $this->postRepository->getLatest();

        return view('admin.post.index')->with([
            'posts' => $posts
        ]);

    }

    public function create()
    {
        $post = new Post();

        return view('admin.post.create')->with([
            'post' => $post
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {

        $post = $this->postRepository->create(array_merge($request->validated(),
            [
                'user_id' => $this->userRepository->currentUser()->id,
                'post_category_id' => 1,
                'featured_image' => $this->upload($request->file('featured_image'))
            ]));

        return redirect()
            ->route('admin.posts.index')
            ->with(['success' => 'Post was created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $post = $this->postRepository->findById($request->id);

        return view('admin.post.edit')->with([
            'post' => $post
        ]);
    }

    public function update(UpdatePostRequest $request)
    {
        $post = $this->postRepository->update($request->id, $request->validated());

        return redirect()
            ->route('admin.posts.index')
            ->with(['success' => 'Post was updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
