<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexadmin()
    {
        return view('Admin.Layouts.homeadmin');
    }

    public function datamobil()
    {
        return view('Admin.datamobil');
    }

    
}
