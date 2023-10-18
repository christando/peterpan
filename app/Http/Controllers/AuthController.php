<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return redirect('/home');
        }
        else
        {
            redirect('/');
        }
    }

    public function Register_Admin()
    {
        return view("Admin.Register");
    }

    public function Save(Request $request)
    {
        User::create(['nama'=>$request->nama,
        'email'=>$request->email,
        'password'=>$request->password
    ]);
    }

    public function logout()
    {
        Auth::logout();
        return Redirect('/');
    }

}
