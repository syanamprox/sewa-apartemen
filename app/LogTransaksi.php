<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class LogTransaksi extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'log_transaksi';

    protected $fillable = [
        'user_id', 'nominal', 'jenis', 'tanggal', 'untuk'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    // 1 untuk pembayaran sewa
    // 2 untuk top up saldo
    // 3 untuk penyesuaian saldo
}
