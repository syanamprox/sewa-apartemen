<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
use App\Tower;
use App\Tipe;
use alert;

class UnitController extends Controller
{
    public function index()
    {
        $unit = Unit::All();
        $tipe = Tipe::All();
        $tower = Tower::All();
        return view('master.unit.index', compact('unit','tipe','tower'));
    }

    public function show(Unit $unit)
    {
        $unt = Unit::find($unit->_id);
        return view('master.unit.show', compact('unt'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'tower_id' =>'required',
            'tipe_id' =>'required',
            'lantai' =>'required',
            'harga' =>'required',
            'no_unit' =>'required',
            'status' =>'required'
        ]);

        Unit::create([
            'tower_id' => $request->tower_id,
            'tipe_id' => $request->tipe_id,
            'lantai' => $request->lantai,
            'harga' => $request->harga,
            'no_unit' => $request->no_unit,
            'status' => $request->status
        ]);

        alert()->success('Selamat','Data berhasil ditambah.');
        return redirect('master/unit');
    }

    public function update(Request $request, Unit $unit)
    {
        $this->validate($request,[
            'tower_id' =>'required',
            'tipe_id' =>'required',
            'lantai' =>'required',
            'harga' =>'required',
            'no_unit' =>'required',
            'status' =>'required'
        ]);

        Unit::where('_id', $unit->_id)
        -> update([
            'tower_id' => $request->tower_id,
            'tipe_id' => $request->tipe_id,
            'lantai' => $request->lantai,
            'harga' => $request->harga,
            'no_unit' => $request->no_unit,
            'status' => $request->status
        ]);

        alert()->success('Selamat','Data berhasil diupdate.');
        return redirect('master/unit');
    }
    
    public function destroy(Unit $unit)
    {
        // $adaIdTipe = Apartemen::where('tipe_id',$tipe->_id);

        // if($adaIdTipe){
        //     alert()->error('Gagal','Ada Apartemen yang menggunakan Tipe ini');
        //     return redirect('master/tipe');
        // }

        Unit::destroy($unit->_id);

        alert()->success('Selamat','Data berhasil dihapus.');
        return redirect('master/unit');
    }
}
