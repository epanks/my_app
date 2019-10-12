<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Satker;

class Paket extends Model
{
    protected $table = 'paket';
    public function satker()
    {
        return $this->belongsTo(Satker::class);
    }
}
