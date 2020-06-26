<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use alert;
use App\User;
use App\Saldo;
use Auth;

class PelamarController extends Controller
{
    public function index()
    {
        $pelamar = User::where('level',3)->where('active',0)->get();
        return view('master.pelamar.index', compact('pelamar'));
    }

    public function show(User $pelamar)
    {
        $plm = User::find($pelamar->_id);
        return view('master.pelamar.show', compact('plm'));
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
            $pelamar = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'level' => 3,
                'no_ktp' => $request->no_ktp,
                'tanggal_lahir' => $request->tanggal_lahir_add,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'gaji' => $request->gaji,
                'active' => 0,
                'image' => null
            ]);

            Saldo::create([
                'user_id' => $pelamar->_id,
                'nominal' => 0
            ]);

        } else {
            $pelamar = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'level' => 3,
                'no_ktp' => $request->no_ktp,
                'tanggal_lahir' => $request->tanggal_lahir_add,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'gaji' => $request->gaji,
                'active' => 0
            ]);

            if($request->hasFile('image')){
                $request->file('image')->move('Pelamar/', $request->file('image')->getClientOriginalName());
                $pelamar->image = $request->file('image')->getClientOriginalName();
                $pelamar->save();
            }

            Saldo::create([
                'user_id' => $pelamar->_id,
                'nominal' => 0
            ]);
        }


        alert()->success('Selamat','Data berhasil ditambah.');
        return redirect('master/pelamar');
    }

    public function update(Request $request, User $pelamar)
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
            User::where('_id', $pelamar->_id)
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
            User::where('_id', $pelamar->_id)
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
            $request->file('image')->move('Pelamar/', $request->file('image')->getClientOriginalName());
            $pelamar->image = $request->file('image')->getClientOriginalName();
            $pelamar->save();
        }

        alert()->success('Selamat','Data berhasil diupdate.');
        return redirect('master/pelamar');
    }
    
    public function destroy(User $pelamar)
    {
        if(Auth::user()->id == $pelamar->id){
            alert()->error('Gagal','Tidak bisa menghapus diri sendiri');
            return redirect('master/pelamar');
        }

        User::destroy($pelamar->_id);

        alert()->success('Selamat','Data berhasil dihapus.');
        return redirect('master/pelamar');
    }
}
