<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostView;
use App\Models\PageView;

class PageController extends Controller
{
    public function homepage()
    {
        $posts = Post::with('author')->simplePaginate(config('post.limit'));
        return view('front.homepage', compact('posts'));
    }

    public function blog()
    {
        $posts = Post::with('author')->simplePaginate(config('post.limit'));
        return view('front.page.blog', compact('posts'));
    }

    public function post(PostView $post)
    {
        return view('front.page.post', compact('post'));
    }

    public function single(PageView $page)
    {
        return view('front.page.single', compact('page'));
    }
}
