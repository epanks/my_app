<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balai extends Model
{
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    protected $table = 'balai';
    public function satker()
    {
        return $this->hasMany(Satker::class);
    }
    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class);
    }
    public function paket()
    {
        return $this->hasManyThrough(Paket::class, Satker::class,'balai_id','kdsatker','id','kdsatker');
    }
    public function paket7()
    {
        return $this->hasManyDeep(Paket7::class,
        [Satker::class,Paket::class],
        [
            'balai_id',
            'kdsatker',
            'id'
        ],
        [
         'id',
         'kdsatker',
         'id'   
        ]); 
    }
    public function joinwilayahkabeh()
    {
        return $this->belongsTo(Wilayah::class);
    }
}
