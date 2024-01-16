<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function testAction(){
        $allPosts=[
            ['id'=>1,'title'=>'PHP','posted_by'=>'Amani','created_at'=>'2023-10-10 09:00:00'],
            ['id'=>2,'title'=>'c++','posted_by'=>'Ali','created_at'=>'2023-05-07 10:00:00'],


        ];
        return view('test',['posts'=>$allPosts]);
    }
}
