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

class PersewaanController extends Controller
{
    public function index(){
        $persewaan = Persewaan::all()->sortByDesc('created_at');

        return view('transaksi.persewaan.index', compact('persewaan'));
    }

    public function create(){

        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = Persewaan::max('no_urut');
        $no = 1;
        if($noUrutAkhir) {
            // $nomor =  sprintf("%04s", abs($noUrutAkhir + 1)). '/' . $AWAL .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
            // $nomor =  sprintf("%04s", abs($noUrutAkhir + 1)) .'/'. $bulanRomawi[date('n')] .'/' . date('Y');
            $nomor =  'SW-'.sprintf("%04s", $noUrutAkhir + 1).'/'. $bulanRomawi[date('n')] .'/' . date('y');
        }
        else {
            // $nomor =  sprintf("%04s", $no). '/' . $AWAL .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
            $nomor =  'SW-'.sprintf("%04s", $no).'/'. $bulanRomawi[date('n')] .'/' . date('y');
        }

        $pembeli = User::where('level',3)->get();
        $agen = User::where('level', 2)->get();
        $unit = Unit::where('status', 0)->get();
        
        return view('transaksi.persewaan.create', compact('pembeli','agen','unit','nomor'));
    }

    public function store(Request $request){

        $this->validate($request,[
            'no_pesanan' =>'required',
            'user_id' => 'required',
            'agen' =>'required',
            'tanggal' =>'required',
            // 'unit_id[]' =>'required',
            // 'harga[]' =>'required',
            'total' => 'required'
        ]);

        $noUrutAkhir = Persewaan::max('no_urut');
        $no_urut = abs($noUrutAkhir + 1);
        
        $request->request->add(['no_urut' => $no_urut]);
        $request->request->add(['status' => 0]);

        $persewaan = Persewaan::create($request->all());

        for($i = 0; $i < count($request->unit_id); $i++){
            if($request->unit_id[0] != ''){
                PersewaanDetil::create([
                    'persewaan_id' => $persewaan->_id,
                    'unit_id' => $request->unit_id[$i],
                    'harga' => $request->harga[$i]
                ]);

                Unit::where('_id', $request->unit_id[$i])
                -> update([
                    'status' => 1
                ]);
            }
        }

        alert()->success('Selamat','Data berhasil ditambah.');
        return redirect('transaksi/persewaan');
    }

    public function bayar(Persewaan $persewaan){
        
        if($persewaan->user->saldo->nominal < $persewaan->total){
            alert()->error('Gagal','Saldo Anda tidak mencukupi pembayaran sewa. Silahkan top up.');
            return redirect('transaksi/persewaan');
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
        return redirect('transaksi/persewaan');
    }

    public function selesai(Persewaan $persewaan){
        
        
        Persewaan::where('_id', $persewaan->_id)
        -> update([
            'status' => 2
        ]);

        $persewaan = Persewaan::find($persewaan->_id);
        
        for($i = 0; $i < count($persewaan->detil); $i++){
            if($persewaan->detil[0] != ''){
                Unit::where('_id', $persewaan->detil[$i]->unit_id)
                -> update([
                    'status' => 0
                ]);
            }
        }
        
        alert()->success('Selamat','Kontrak berhasil.');
        return redirect('transaksi/persewaan');
    }
}
