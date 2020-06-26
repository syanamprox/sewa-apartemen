<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Saldo;
use App\User;
use App\LogTransaksi;
use alert;

class SaldoController extends Controller
{
    public function index(){
        $saldo = Saldo::all();
        $user = User::where('level', 3)->get();
        
        return view('akun.saldo.index', compact('saldo','user'));
    }

    public function update(Request $request, Saldo $saldo)
    {
        $this->validate($request,[
            'user_id' =>'required',
            'nominal' => 'required'
        ]);
        
        Saldo::where('_id', $saldo->_id)
        -> update([
            'nominal' => $saldo->nominal + (int)$request->nominal
        ]);

        if((int)$request->nominal > 0){
            LogTransaksi::create([
                'user_id' => $request->user_id,
                'nominal' => (int)$request->nominal,
                'jenis' => 2, 
                'tanggal' => date('d F Y H:i:s'),
                'untuk' => 'Top Up'
            ]);
        } else {
            LogTransaksi::create([
                'user_id' => $request->user_id,
                'nominal' => (int)$request->nominal,
                'jenis' => 3, 
                'tanggal' => date('d F Y H:i:s'),
                'untuk' => 'Penyesuaian Saldo'
            ]);
        }

        alert()->success('Selamat','Data berhasil diupdate.');
        return redirect('akun/saldo');
    }
}
