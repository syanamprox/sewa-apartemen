<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Saldo extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'saldo';

    protected $fillable = [
        'user_id', 'nominal'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
