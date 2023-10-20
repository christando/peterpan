<?php

namespace App\Http\Controllers;

// use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\admin;

class AuthController extends Controller
{
    public function Login_Admin()
    {
        return view("Admin.Login");
    }

    public function CekLogin(Request $request)
    {
        if(Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ]))
        {
            return redirect('/Home_A');
        }
        else
        {
            redirect('/Login_A');
        }
    }

    public function Register_Admin()
    {
        return view("Admin.Register");
    }

    public function Save(Request $request)
    {
        admin::create(['username'=>$request->username,
        'first_name'=>$request->fname,
        'last_name'=>$request->lname,
        'email'=>$request->email,
        'password'=>bcrypt($request->password)
    ]);

        return redirect('/Login_A');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect('/');
    }

}
