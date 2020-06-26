<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
// use Jenssegers\Mongodb\Auth\User as Authenticatable;

class Tower extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'tower';

    protected $fillable = [
        'name', 'description', 'image'
    ];

    public function getImage(){
        if(!$this->image){
            return 'belum upload gambar';
        }
        return '<img src="'.asset('Tower/'.$this->image).'" height="100px" width="100px">';
    }

    public function unit(){
        return $this->hasMany(Unit::class, 'tower_id');
    }
}
