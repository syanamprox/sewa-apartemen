<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Unit extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'unit';

    protected $fillable = [
        'tower_id','tipe_id','lantai','harga','no_unit','status','judul','kota'
    ];

    public function tower(){
        return $this->belongsTo(Tower::class);
    }

    public function tipe(){
        return $this->belongsTo(Tipe::class);
    }

    public function persewaandetil(){
        return $this->hasMany(PersewaanDetil::class, 'unit_id');
    }
}
