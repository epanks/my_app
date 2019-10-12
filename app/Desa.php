<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Desa extends Model
{
    protected $table = 'desa';
    protected $with = ['kecamatan'];
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class,'kdkecamatan','kdkecamatan');
    }
}
