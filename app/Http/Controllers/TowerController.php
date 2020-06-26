<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tower;
use alert;

class TowerController extends Controller
{    
    public function index()
    {
        $tower = Tower::All();
        return view('master.tower.index', compact('tower'));
    }

    public function show(Tower $tower)
    {
        $twr = Tower::find($tower->_id);
        return view('master.tower.show', compact('twr'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' =>'required',
            'description' => 'required'
        ]);

        if( !$request->image){
            Tower::create([
                'name' => $request->name,
                'description' => $request->description,
                'image' => null
            ]);
        } else {
            $tower = Tower::create($request->all());

            if($request->hasFile('image')){
                $request->file('image')->move('Tower/', $request->file('image')->getClientOriginalName());
                $tower->image = $request->file('image')->getClientOriginalName();
                $tower->save();
            }
        }


        alert()->success('Selamat','Data berhasil ditambah.');
        return redirect('master/tower');
    }

    public function update(Request $request, Tower $tower)
    {
        $this->validate($request,[
            'name' =>'required',
            'description' => 'required'
        ]);

        Tower::where('_id', $tower->_id)
        -> update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        if($request->hasFile('image')){
            $request->file('image')->move('Tower/', $request->file('image')->getClientOriginalName());
            $tower->image = $request->file('image')->getClientOriginalName();
            $tower->save();
        }

        alert()->success('Selamat','Data berhasil diupdate.');
        return redirect('master/tower');
    }
    
    public function destroy(Tower $tower)
    {
        // $adaIdTipe = Apartemen::where('tipe_id',$tipe->_id);

        // if($adaIdTipe){
        //     alert()->error('Gagal','Ada Apartemen yang menggunakan Tipe ini');
        //     return redirect('master/tipe');
        // }
        
        Tower::destroy($tower->_id);

        alert()->success('Selamat','Data berhasil dihapus.');
        return redirect('master/tower');
    }
}
