<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;

class PostController extends Controller
{
    public function index()
    {

        $post = Post::find(1);
        $tag = Tag::find(1);
        dd($tag->posts);


        // return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }
    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }


    public function delete()
    {

        $post = Post::withTrashed()->find(2);
        $post->restore();
        dd('deleted');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    // firstOrCreate
    public function firstOrCreate()
    {
        $post = Post::find(1);
        $anotherPost = [
            'title' => 'some post',
            'post_content' => 'some content',
            'image' => 'some.jpg',
            'likes' => 2600,
            'is_published' => 1,
        ];

        $post = Post::firstOrCreate([
            'title' => ' some title of post from vscode',
        ], [
            'title' => 'some title of post from vscode',
            'post_content' => 'some content',
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
            'post_content' => 'updateorcreate some content',
            'image' => ' updateorcreate some.jpg',
            'likes' => 600,
            'is_published' => 1,
        ];

        $post = Post::updateOrCreate([
            'title' => 'some title of post not vscode',
        ], [
            'title' => 'some title of post not vscode',
            'post_content' => 'its not update some content',
            'image' => ' its not update some.jpg',
            'likes' => 600,
            'is_published' => 1,
        ]);

        dump($post->content);
    }
}
