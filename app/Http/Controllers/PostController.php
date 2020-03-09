<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
class PostController extends Controller
{
  
    public function index()
    {
        $posts=Post::all();//all out select * nae same    
        return view('home',compact('posts'));//togeter post function laravel function  
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $post=new Post;//app ka class ko pyan call thar
        $post->name=$request->name;//from ka name and author
        $post->author=$request->author;//home blade ka author and name
        $post->save();//database ko yout
        return redirect('/');//form paw bo lan choice

    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $post=Post::find($id);
        return view('edit',compact('post'));

    }
    public function update(Request $request, $id)
    {
        $post=Post::find($id);
        $post->name=$request->name;
        $post->author=$request->author;
        $post->save();
        return redirect('/'); 
    }
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect('/');

    }
}
