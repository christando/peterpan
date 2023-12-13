<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexuser()
    {
        return view('User.homeuser');
    }

    public function datapesanan()
    {
        return view('User.datapesanan');
    }

    
}
