<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use DB;
class PostsController extends Controller
{
    //
    public function index()
    {

//        $article=DB::select("select * from posts");
        $article=DB::table("posts")->get();
        return view('posts.index',['first_articles'=>$article]);
    }

    public function show()
    {

        return view('posts.create');
    }

    // public function show(){

    //     return view('posts.show');
    // }
}
