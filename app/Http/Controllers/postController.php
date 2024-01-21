<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(){
        $allPosts=[
            ['id'=>1,'title'=>'PHP','posted_by'=>'Amani','created_at'=>'2023-10-10 09:00:00'],
            ['id'=>2,'title'=>'c++','posted_by'=>'Ali','created_at'=>'2023-05-07 10:00:00'],


        ];
        return view('posts.index',['posts'=>$allPosts]);
    }
    public function show($postId){
        $singlePost = ['id'=>1,'title'=>'PHP','discribtion'=>'hello everyone','posted_by'=>'Amani','email'=>'Amani@gmail','created_at'=>'2023-10-10 09:00:00'];

        return view('posts.show',['post'=>$singlePost]);
    }
    public function create(){
        return view('posts.create');
    }
}
