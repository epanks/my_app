<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket7 extends Model
{
    protected $table = 'paket7';
    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}
