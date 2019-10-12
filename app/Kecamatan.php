<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';
    protected $with = ['kabupaten'];
    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class,'kdkabupaten');
    }

    public function desa()
    {
        return $this->hasMany(Desa::class);
    }
}
