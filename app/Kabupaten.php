<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table = 'kabupaten';
    protected $with = ['provinsi'];
    public function provinsi()
    {
        return $this->belongsTo(Kabupaten::class,'kdprovinsi');
    }

    public function kecamatan()
    {
        return $this->hasMany(Kecamatan::class);
    }
}
