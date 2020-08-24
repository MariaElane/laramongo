<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
   public function index(){
    $posts = Post::all();
    return view('post.index',compact('posts'));
   }

   public function form(){
    return view('post.form');
   }

   public function savePost(Request $request){
       //dd($request->name);
        $data = new Post($request->all());
        $data->save();

        if ($data) {
            return redirect()->route('post.index');           
        } else {
           return back();
        }
        
   }

   public function edit(Request $request, $_id){
     $data = Post::findOrFail($_id);
     $data->name = $request->name;
     $data->type = $request->type;
     $data->name = $request->qtd;
    
     if ($data) {
         return redirect()->route('post.index');           
     } else {
        return back();
     }
     
}
}
