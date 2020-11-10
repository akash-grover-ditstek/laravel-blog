<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Page\UpdateRequest;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use App\Traits\ReturnTrait;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use ReturnTrait;

    public function index()
    {
        $posts = Post::paginate(config('admin.post.limit'));
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(StoreRequest $request)
    {
        $post = Post::create($request->validated());
        return redirect()->route('posts.show', $post->id)
            ->with('success', __('New post has been added'));
    }

    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('admin.post.edit', compact('post'));
    }

    public function update(UpdateRequest $request, Post $post)
    {
        $post->update($request->validated());
        return redirect()->route('posts.show', $post->id)
            ->with('success', __('Post has been updated'));
    }

    public function destroy(Request $request, Post $post)
    {
        $post->delete();
        if ($request->expectsJson()) {
            return $this->returnExpectJson(
                ['status' => 'ok'],
                ['success' => __('Post has been deleted')]
            );
        }
        return redirect()->route('post.index')
            ->with('success', __('Post has been deleted'));
    }
}
