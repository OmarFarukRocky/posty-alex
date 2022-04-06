<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth'])->only('store');
    }
    public function index()
    {
        $posts = Post::with('user')->latest()->paginate(3);
        return view('post',compact('posts'));
    }

    public function store(Request $request)
    {

       
      $request->validate([
          'body'=>'required'
      ]);

      $request->user()->posts()->create([
          'body'=>$request->body,
      ]);
      return back();
    }


  
}
