<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class PostClientController extends Controller
{
    public function single(string $slug): View
    {
        $post = Post::forSlug($slug)->firstOrFail();

        abort_if(! $post->published, 404);

        return view('site.posts.single', [
            'post' => $post
        ]);
    }
}
