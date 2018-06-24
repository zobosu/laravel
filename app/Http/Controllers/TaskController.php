<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class TaskController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        DB::insert("insert into posts(title,body) values('$title','$content') ");


        return redirect('/');
//        return back();
    }



    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
