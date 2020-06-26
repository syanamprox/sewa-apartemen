<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipe;
use alert;

class TipeController extends Controller
{    
    public function index()
    {
        $tipe = Tipe::All();
        return view('master.tipe.index', compact('tipe'));
    }

    public function show(Tipe $tipe)
    {
        $tp = Tipe::find($tipe->_id);
        return view('master.tipe.show', compact('tp'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' =>'required',
            'description' => 'required'
        ]);

        Tipe::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        alert()->success('Selamat','Data berhasil ditambah.');
        return redirect('master/tipe');
    }

    public function update(Request $request, Tipe $tipe)
    {
        $this->validate($request,[
            'name' =>'required',
            'description' => 'required'
        ]);

        Tipe::where('_id', $tipe->_id)
        -> update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        alert()->success('Selamat','Data berhasil diupdate.');
        return redirect('master/tipe');
    }
    
    public function destroy(Tipe $tipe)
    {
        // $adaIdTipe = Apartemen::where('tipe_id',$tipe->_id);

        // if($adaIdTipe){
        //     alert()->error('Gagal','Ada Apartemen yang menggunakan Tipe ini');
        //     return redirect('master/tipe');
        // }

        Tipe::destroy($tipe->_id);

        alert()->success('Selamat','Data berhasil dihapus.');
        return redirect('master/tipe');
    }
}
