<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
// use illuminate\Auth\Authenticatable as AuthenticableTrait;
// use illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

// class User extends Eloquent implements AuthenticatableContract
class User extends Authenticatable
{
    // use AuthenticableTrait;
    use Notifiable;

    protected $connection = 'mongodb';
    protected $collection = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','no_ktp','tanggal_lahir','alamat','telepon','gaji','image','active','level'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getImageAdmin(){
        if(!$this->image){
            return 'belum upload gambar';
        }
        return '<img src="'.asset('Admin/'.$this->image).'" height="100px" width="100px">';
    }

    public function saldo(){
        return $this->hasOne(Saldo::class,'user_id');
    }

    public function persewaan(){
        return $this->hasMany(Persewaan::class,'user_id');
    }

    public function log(){
        return $this->hasMany(LogTransaksi::class,'user_id');
    }
}
