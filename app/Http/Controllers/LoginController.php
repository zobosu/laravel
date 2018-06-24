<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destory']);
    }

    public function login()
    {

        return view('posts.login');
    }

    public function store()
    {

        if (!auth()->attempt(request(['email', 'password']))) {

            return back();
        }
        return redirect('/');

    }
}
