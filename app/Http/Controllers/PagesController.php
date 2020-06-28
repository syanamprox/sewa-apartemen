<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persewaan;
use App\Unit;
use App\User;
use App\Tower;
use App\LogTransaksi;
use App\Saldo;
use Auth;

class PagesController extends Controller
{
    public function admin()
    {
        $persewaan = Persewaan::where('status', 1)->orWhere('status', 0)->get();
        $persewaan_selesai = Persewaan::where('status', 2)->get();
        $total_order = Persewaan::count();

        $admin = User::where('level', 1)->count();
        $agen = User::where('level', 2)->count();
        $penghuni = User::where('level', 3)->where('active', 1)->count();
        $pelamar = User::where('level', 3)->where('active', 0)->count();

        $tower = Tower::all()->count();
        $apartemen = Unit::all()->count();
        $apartemen_tersedia = Unit::where('status', 0)->count();
        $apartemen_tersewa = Unit::where('status', 1)->count();

        return view('dashboard.admin_dashboard', compact('persewaan','persewaan_selesai','total_order','admin','agen','penghuni','pelamar','tower','apartemen','apartemen_tersedia','apartemen_tersewa'));
    }

    public function agen(){

        $persewaan = Persewaan::where('status', 1)->orWhere('status', 0)->get();
        $persewaan_selesai = Persewaan::where('status', 2)->get();
        $total_order = Persewaan::count();

        $admin = User::where('level', 1)->count();
        $agen = User::where('level', 2)->count();
        $penghuni = User::where('level', 3)->where('active', 1)->count();
        $pelamar = User::where('level', 3)->where('active', 0)->count();

        $tower = Tower::all()->count();
        $apartemen = Unit::all()->count();
        $apartemen_tersedia = Unit::where('status', 0)->count();
        $apartemen_tersewa = Unit::where('status', 1)->count();

        return view('dashboard.agen_dashboard', compact('persewaan','persewaan_selesai','total_order','admin','agen','penghuni','pelamar','tower','apartemen','apartemen_tersedia','apartemen_tersewa'));
    }

    public function penghuni()
    {
        $logg = LogTransaksi::where('user_id', Auth::user()->_id)->get();
        $log = $logg->sortByDesc('created_at');
        $saldo = Saldo::where('user_id', Auth::user()->_id)->get();

        $persewaan = Persewaan::where('status', 1)->orWhere('status', 0)->where('user_id', Auth::user()->_id)->get();
        $persewaan_selesai = Persewaan::where('status', 2)->where('user_id', Auth::user()->_id)->get();
        $total_order = Persewaan::count();

        return view('dashboard.penghuni_dashboard', compact('log','persewaan','persewaan_selesai','total_order','saldo'));
    
    }

    public function welcome()
    {
        // $unit = Unit::where('status', 0)->get();
        $unit = Unit::where('status', 0)->get();

        return view('welcome', compact('unit'));
    }

    public function penghunisewa(){
        
        $persewaa = Persewaan::where('user_id', Auth::user()->_id)->get();
        $persewaan = $persewaa->sortByDesc('created_at');

        return view('transaksi.persewaan.penghuni', compact('persewaan'));
    }

    public function bayar(Persewaan $persewaan){
        
        if($persewaan->user->saldo->nominal < $persewaan->total){
            alert()->error('Gagal','Saldo Anda tidak mencukupi pembayaran sewa. Silahkan top up.');
            return redirect('penghuni/persewaan');
        }

        $old_saldo = $persewaan->user->saldo->nominal;

        Saldo::where('_id', $persewaan->user->saldo->_id)
        -> update([
            'nominal' => $old_saldo - $persewaan->total
        ]);

        LogTransaksi::create([
            'user_id' => $persewaan->user->_id,
            'nominal' => $persewaan->total,
            'jenis' => 1,
            'tanggal' => date('d F Y H:i:s'),
            'untuk' => 'Pembayaran '. $persewaan->no_pesanan 
        ]);

        Persewaan::where('_id', $persewaan->_id)
        -> update([
            'status' => 1
        ]);

        alert()->success('Selamat','Pembayaran berhasil.');
        return redirect('penghuni/persewaan');
    }
}