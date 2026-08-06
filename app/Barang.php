<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'barang_id';
    protected $fillable = [
        'nama_barang',
        'merk',
        'jumlah',
        'ruang_id',
        'status',
    ];

    public function ruang()
    {
        return $this->belongsTo(Ruang::class, 'ruang_id', 'ruang_id');
    }
}
