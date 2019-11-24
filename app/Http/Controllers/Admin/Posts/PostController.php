<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Log;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        info("incoming request for create post");

        $this->validate($request, [
            "title" => "required|min:3",
            "body" => "required|min:5",
            "secondary_title" => "min:3|nullable",
            "image" => "required|image"
        ]);

        $uploadedFilePath = $request->file('image')->store('posts', 's3');

        $post = $request->all();

        $post['url'] = $uploadedFilePath;

        Log::debug("Pre-Save " . json_encode($post));

        $post = Post::create($post);

        flash()->success("Post successfully created with post id: " . $post['id']);

        return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post = Post::findOrFail($post->id);

        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $post = Post::findOrFail($post->id);

        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            "title" => "required|min:3",
            "secondary_title" => "min:3|nullable",
            "body" => "required:min:5"
        ]);

        Log::info("Post update posts: " . json_encode($post->toArray()));

        $post->update($request->all());

        flash()->success("Post with id : " . $post->id . " has been updated successfully");

        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Post $post)
    {
        $post->delete();

        flash()->success("Post with id : " . $post->id . " has been deleted successfully");

        return view('admin.posts.index');
    }
}
