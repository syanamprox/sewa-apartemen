<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class PersewaanDetil extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'persewaan_detil';

    protected $fillable = [
        'persewaan_id','unit_id','harga'
    ];

    public function persewaan(){
        return $this->belongsTo('App\Persewaan','persewaan_id');
    }

    public function unit(){
        return $this->belongsTo('App\Unit');
    }
}
