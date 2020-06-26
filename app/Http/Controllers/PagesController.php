<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{
    public function admin()
    {
        return view('dashboard.admin_dashboard');
    }

    public function agen(){
        return view('dashboard.agen_dashboard');
    }

    public function penghuni()
    {
        return view('dashboard.penghuni_dashboard');
    }
}