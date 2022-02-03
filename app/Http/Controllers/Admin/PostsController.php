<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function show($id){
        $post= Post::find($id);
        if($post){
            return view('admin.posts.show',compact('post'));
        }
        abort(404);
    }
}
