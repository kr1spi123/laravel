<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', 1)->first();
        dump($posts->title);
        dd('end');
    }

    public function create()
    {
        $postsArr = [
            [
                'title' => 'title of post from vscode',
                'content' => 'balblsalbasl',
                'image' => 'asdasl.jpg',
                'likes' => 12,
                'is_published' => 1,
            ],
            [
                'title' => ' another title of post from vscode',
                'content' => 'another balblsalbasl',
                'image' => 'another asdasl.jpg',
                'likes' => 22,
                'is_published' => 1,
            ],
        ];

        foreach ($postsArr as $item) {
            Post::create($item);
        }

        dd('created');
    }
}
