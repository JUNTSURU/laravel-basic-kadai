<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Posts;

class PostController extends Controller
{
    public function index(){
        $posts =DB::table('posts')->get();
        return view('index',compact('posts'));
    }

    public function show($id){
        $posts=Posts::find($id);
        return view('posts.show',compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required|max:20',
            "content"=>'required|max:200'
        ]);

        $post = new Posts();
        $post->title=$request->input('title');
        $post->content=$request->input('content');
        $post->save();

        return redirect('/posts');
    }
}
