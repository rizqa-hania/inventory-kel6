<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    protected $table = 'ruang';

    protected $primaryKey = 'ruang_id';

    protected $fillable = [
        'nama_ruang',
        'deskripsi'
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class, 'ruang_id', 'ruang_id');
    }
}
