<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Tipe extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'tipe';

    protected $fillable = [
        'name', 'description'
    ];

    public function unit(){
        return $this->hasMany(Unit::class, 'tipe_id');
    }
}
