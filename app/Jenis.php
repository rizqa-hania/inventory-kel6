<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = 'jenis';
    protected $primaryKey = 'jenis_id';
    protected $fillable = ['jenis_barang'];

    public function jenis()
    {
        return $this->hasMany(Jenis::class, 'jenis_id', 'jenis_id');
    }
}