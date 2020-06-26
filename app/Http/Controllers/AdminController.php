<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use alert;
use App\User;
use Auth;

class AdminController extends Controller
{
    public function index()
    {
        $admin = User::where('level',1)->get();
        
        return view('master.admin.index', compact('admin'));
    }

    public function show(User $admin)
    {
        $adm = User::find($tower->_id);
        return view('master.admin.show', compact('adm'));
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
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'level' => 1,
                'no_ktp' => $request->no_ktp,
                'tanggal_lahir' => $request->tanggal_lahir_add,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'gaji' => $request->gaji,
                'active' => 1,
                'image' => null
            ]);
        } else {
            $admin = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'level' => 1,
                'no_ktp' => $request->no_ktp,
                'tanggal_lahir' => $request->tanggal_lahir_add,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'gaji' => $request->gaji,
                'active' => 1
            ]);

            if($request->hasFile('image')){
                $request->file('image')->move('Admin/', $request->file('image')->getClientOriginalName());
                $admin->image = $request->file('image')->getClientOriginalName();
                $admin->save();
            }
        }


        alert()->success('Selamat','Data berhasil ditambah.');
        return redirect('master/admin');
    }

    public function update(Request $request, User $admin)
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
            User::where('_id', $admin->_id)
            -> update([
                'name' => $request->name,
                'email' => $request->email,
                'level' => 1,
                'no_ktp' => $request->no_ktp,
                'tanggal_lahir' => $request->tanggal_lahir_edit,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'gaji' => $request->gaji
            ]);
        } else {
            User::where('_id', $admin->_id)
            -> update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'level' => 1,
                'no_ktp' => $request->no_ktp,
                'tanggal_lahir' => $request->tanggal_lahir_edit,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'gaji' => $request->gaji
            ]);
        }

        if($request->hasFile('image')){
            $request->file('image')->move('Admin/', $request->file('image')->getClientOriginalName());
            $admin->image = $request->file('image')->getClientOriginalName();
            $admin->save();
        }

        alert()->success('Selamat','Data berhasil diupdate.');
        return redirect('master/admin');
    }
    
    public function destroy(User $admin)
    {
        if(Auth::user()->id == $admin->id){
            alert()->error('Gagal','Tidak bisa menghapus diri sendiri');
            return redirect('master/admin');
        }

        User::destroy($admin->_id);

        alert()->success('Selamat','Data berhasil dihapus.');
        return redirect('master/admin');
    }
}
