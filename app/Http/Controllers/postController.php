<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class postController extends Controller
{
    public function index(){
        //select * posts
        $postFromDB =Post::all(); //colliction of object
        
        return view('posts.index',['posts'=>$postFromDB]);
    }
    public function show($postId){
        $singlePost = ['id'=>1,'title'=>'PHP','discribtion'=>'hello everyone','posted_by'=>'Amani','email'=>'Amani@gmail','created_at'=>'2023-10-10 09:00:00'];

        return view('posts.show',['post'=>$singlePost]);
    }
    public function create(){
        return view('posts.create');
    }
    public function store(){
       // $request =request;
       // dd($request);
        //get user data
        $data= request()->all();
        return  $data;
        $title = request()->title;
        $createdBy=request()->created_By;
        $description = request()->description;
        $post_creator = request()->post_creator;
        // store the user data in database

        //redirection to posts.index
       return to_route('posts.index');
    }
    public function edit(){
        return view('posts.edit');
    }
    public function update(){
      
        $title = request()->title;
        $description = request()->description;
        $post_creator = request()->post_creator;
        // update the user data in database

        //redirection to posts.index
       return to_route('posts.show',1);
    }
    public function destroy(){
        // delete the post from database
         //redirection to posts.index
         return to_route('posts.show',1);
        
    }
}
