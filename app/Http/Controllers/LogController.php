<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Unit;
use App\Persewaan;
use App\PersewaanDetil;
use App\Saldo;
use App\LogTransaksi;
use alert;

class LogController extends Controller
{
    public function index(){
        $log = LogTransaksi::all()->sortByDesc('created_at');

        return view('akun.log.index', compact('log'));
    }
}
