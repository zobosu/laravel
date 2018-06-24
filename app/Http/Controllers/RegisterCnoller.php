<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use http\Env\Request;
use App\User;
use App\Mail\Sendmail;

class RegisterCnoller extends Controller
{
    //

    Public function register(){

        return view('posts/register');
    }

    /**
     *
     */
    public function user_info(){

        echo "user info require!";
//        form request validate
        $this->validate(request(),[
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required'
        ]);

//        user save and create
        $user=User::create(request(['name','email','password']));
        auth()->login($user);
        \Mail::to($user)->send(new Sendmail);
        return redirect('/');
    }
}
