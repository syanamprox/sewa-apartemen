<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use alert;
use App\User;
use App\Saldo;
use Auth;

class PenghuniController extends Controller
{
    public function index()
    {
        $penghuni = User::where('level',3)->where('active',1)->get();
        return view('master.penghuni.index', compact('penghuni'));
    }

    public function show(User $penghuni)
    {
        $pgn = User::find($penghuni->_id);
        return view('master.penghuni.show', compact('pgn'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' =>'required',
            'email' =>'required',
            'password' => 'required|size:6',
            'no_ktp' => 'required|size:16',
            'tanggal_lahir_add' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'gaji' => 'required',
            'image' => 'mimes:jpeg,png|max:1000'
        ]);

        if( !$request->image){
            $penghuni = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'level' => 3,
                'no_ktp' => $request->no_ktp,
                'tanggal_lahir' => $request->tanggal_lahir_add,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'gaji' => $request->gaji,
                'active' => 1,
                'image' => null
            ]);

            Saldo::create([
                'user_id' => $penghuni->_id,
                'nominal' => 0
            ]);

        } else {
            $penghuni = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'level' => 3,
                'no_ktp' => $request->no_ktp,
                'tanggal_lahir' => $request->tanggal_lahir_add,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'gaji' => $request->gaji,
                'active' => 1
            ]);

            if($request->hasFile('image')){
                $request->file('image')->move('Penghuni/', $request->file('image')->getClientOriginalName());
                $penghuni->image = $request->file('image')->getClientOriginalName();
                $penghuni->save();
            }

            Saldo::create([
                'user_id' => $penghuni->_id,
                'nominal' => 0
            ]);
        }


        alert()->success('Selamat','Data berhasil ditambah.');
        return redirect('master/penghuni');
    }

    public function update(Request $request, User $penghuni)
    {
        $this->validate($request,[
            'name' =>'required',
            'email' =>'required',
            'no_ktp' => 'required|size:16',
            'tanggal_lahir_edit' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'gaji' => 'required',
            'image' => 'mimes:jpeg,png|max:1000'
        ]);

        if($request->password == null){
            User::where('_id', $penghuni->_id)
            -> update([
                'name' => $request->name,
                'email' => $request->email,
                'level' => 3,
                'no_ktp' => $request->no_ktp,
                'tanggal_lahir' => $request->tanggal_lahir_edit,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'gaji' => $request->gaji
            ]);
        } else {
            User::where('_id', $penghuni->_id)
            -> update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'level' => 3,
                'no_ktp' => $request->no_ktp,
                'tanggal_lahir' => $request->tanggal_lahir_edit,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'gaji' => $request->gaji
            ]);
        }

        if($request->hasFile('image')){
            $request->file('image')->move('Penghuni/', $request->file('image')->getClientOriginalName());
            $penghuni->image = $request->file('image')->getClientOriginalName();
            $penghuni->save();
        }

        alert()->success('Selamat','Data berhasil diupdate.');
        return redirect('master/penghuni');
    }
    
    public function destroy(User $penghuni)
    {
        if(Auth::user()->id == $penghuni->id){
            alert()->error('Gagal','Tidak bisa menghapus diri sendiri');
            return redirect('master/penghuni');
        }

        User::destroy($penghuni->_id);

        alert()->success('Selamat','Data berhasil dihapus.');
        return redirect('master/penghuni');
    }
}
