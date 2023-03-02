<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostClientController extends Controller
{
    public function single(string $slug)
    {
        $post = Post::forSlug($slug)->firstOrFail();

        return view('site.posts.single', [
            'post' => $post
        ]);
    }
}
