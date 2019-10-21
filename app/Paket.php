<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Satker;

class Paket extends Model
{
    protected $table = 'paket';
    protected $fillable = [
        'kdsatker', 'urutpkt','nmpaket', 'pagurmp', 'trgoutput', 'procapaiOutput', 'satoutput', 'kdoutput','pagurmp','TahunFisik'
    ];
    public function satker()
    {
        return $this->belongsTo(Satker::class);
    }

    public function paket7()
    {
        return $this->hasOne(Paket7::class);
    }
}
