<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use App\Models\PostTag;
use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('post.create', compact('categories', 'tags'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);
        $post->tags()->attach($tags);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('post.edit', compact('post', 'categories'));
    }
    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
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
