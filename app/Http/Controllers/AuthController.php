<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Saldo;
use Auth;
use Alert;

class AuthController extends Controller
{
    public function index()
    {   
        // dd(auth::user());
        // $this->middleware('guest');

        if (Auth::check()) {
            if(Auth::user()->level === 1)
            {
                return redirect()->route('admindsb');
            } 
            
            elseif (Auth::user()->level === 2)
            {
                return redirect()->route('agendsb');
            }
    
            elseif (Auth::user()->level === 3)
            {
                return redirect()->route('penghunidsb');
            }
        }

        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            alert()->error('Email / Password Salah','Mohon diisi dengan benar.');
            return redirect()->route('login');
        }
        else
        {
            if(Auth::user()->level == 1)
            {
                Alert::success('Success Title', 'Succes Login, Selamat Datang Admin');
                return redirect()->route('admindsb');
            } 
            
            elseif (Auth::user()->level == 2)
            {
                Alert::success('Success Title', 'Succes Login, Selamat Datang Agen');
                return redirect()->route('agendsb');
            }
    
            elseif (Auth::user()->level == 3)
            {
                Alert::success('Success Title', 'Succes Login, Selamat Datang Penghuni');
                return redirect()->route('penghunidsb');
            }
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function postregister(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:App\User,email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => 3,
            'no_ktp' => null,
            'tanggal_lahir' => null,
            'alamat' => null,
            'telepon' => null,
            'gaji' => null,
            'image' => null,
            'active' => 0
        ]);

        Saldo::create([
            'user_id' => $user->_id,
            'nominal' => 0,
        ]);

        // Auth()->loginUsingId($user->_id);

        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
