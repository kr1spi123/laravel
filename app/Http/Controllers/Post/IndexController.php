<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\FilterRequest;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $query = Post::query();
        
        // $posts = Post::paginate(10);
        // return view('post.index', compact('posts'));
    }
}