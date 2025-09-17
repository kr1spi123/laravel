<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(){
        $posts = Post::where('is_published',1)->first();
        dump($posts->title);
        dd('end');
    }
}
