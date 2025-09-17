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

    public function update()
    {
        $post = Post::find(6);
        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated.jpg',
            'likes' => 22,
            'is_published' => 1,
        ]);
        dd('updated');
    }


    public function delete()
    {

        $post = Post::withTrashed()->find(2);
        $post->restore();
        dd('delete page');
    }


    // firstOrCreate
    public function firstOrCreate()
    {
        $post = Post::find(1);
        $anotherPost = [
            'title' => 'some post',
            'content' => 'some content',
            'image' => 'some.jpg',
            'likes' => 2600,
            'is_published' => 1,
        ];

        $post = Post::firstOrCreate([
            'title' => ' some title of post from vscode',
        ], [
            'title' => 'some title of post from vscode',
            'content' => 'some content',
            'image' => 'some.jpg',
            'likes' => 2600,
            'is_published' => 1,
        ]);
        dump($post->content);
        dd(vars: 'finished');
    }
    // updateOrCreate
    public function updateOrCreate()
    {
        $anotherPost = [
            'title' => 'updateorcreate some post',
            'content' => 'updateorcreate some content',
            'image' => ' updateorcreate some.jpg',
            'likes' => 600,
            'is_published' => 1,
        ];

        $post = Post::updateOrCreate([
            'title' => 'some title of post not vscode',
        ], [
            'title' => 'some title of post not vscode',
            'content' => 'its not update some content',
            'image' => ' its not update some.jpg',
            'likes' => 600,
            'is_published' => 1,
        ]);

        dump($post->content);
    }
}
