<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use alert;
use Auth;
use App\User;

class AgenController extends Controller
{
    public function index()
    {
        $agen = User::where('level',2)->get();
        return view('master.agen.index', compact('agen'));
    }

    public function show(User $agen)
    {
        $agn = User::find($agen->_id);
        return view('master.agen.show', compact('agn'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' =>'required',
            'email' =>'required',
            'password' => 'required',
            'no_ktp' => 'required|size:16',
            'tanggal_lahir_add' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'gaji' => 'required',
            'image' => 'mimes:jpeg,png|max:1000'
        ]);

        if( !$request->image){
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'level' => 2,
                'no_ktp' => $request->no_ktp,
                'tanggal_lahir' => $request->tanggal_lahir_add,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'gaji' => $request->gaji,
                'active' => 1,
                'image' => null
            ]);
        } else {
            $agen = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'level' => 2,
                'no_ktp' => $request->no_ktp,
                'tanggal_lahir' => $request->tanggal_lahir_add,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'gaji' => $request->gaji,
                'active' => 1
            ]);

            if($request->hasFile('image')){
                $request->file('image')->move('Agen/', $request->file('image')->getClientOriginalName());
                $agen->image = $request->file('image')->getClientOriginalName();
                $agen->save();
            }
        }


        alert()->success('Selamat','Data berhasil ditambah.');
        return redirect('master/agen');
    }

    public function update(Request $request, User $agen)
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
            User::where('_id', $agen->_id)
            -> update([
                'name' => $request->name,
                'email' => $request->email,
                'level' => 2,
                'no_ktp' => $request->no_ktp,
                'tanggal_lahir' => $request->tanggal_lahir_edit,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'gaji' => $request->gaji
            ]);
        } else {
            User::where('_id', $agen->_id)
            -> update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'level' => 2,
                'no_ktp' => $request->no_ktp,
                'tanggal_lahir' => $request->tanggal_lahir_edit,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'gaji' => $request->gaji
            ]);
        }

        if($request->hasFile('image')){
            $request->file('image')->move('Agen/', $request->file('image')->getClientOriginalName());
            $agen->image = $request->file('image')->getClientOriginalName();
            $agen->save();
        }

        alert()->success('Selamat','Data berhasil diupdate.');
        return redirect('master/agen');
    }
    
    public function destroy(User $agen)
    {
        if(Auth::user()->id == $agen->id){
            alert()->error('Gagal','Tidak bisa menghapus diri sendiri');
            return redirect('master/agen');
        }

        User::destroy($agen->_id);

        alert()->success('Selamat','Data berhasil dihapus.');
        return redirect('master/agen');
    }
}
