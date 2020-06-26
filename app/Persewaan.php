<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Persewaan extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'persewaan';

    protected $fillable = [
        'no_pesanan','no_urut','user_id','agen','tanggal','total','status'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function detil(){
        return $this->hasMany(PersewaanDetil::class);
    }
}
