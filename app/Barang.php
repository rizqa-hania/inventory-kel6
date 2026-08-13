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
        'jenis_id',
        'status',
    ];

    public function ruang()
        {
            return $this->belongsTo(Ruang::class, 'ruang_id', 'ruang_id');
        }

    public function jenis()
        {
            return $this->belongsTo(Jenis::class, 'jenis_id', 'jenis_id');
        }

    public function masaEkonomis()
        {
            return $this->hasOne(Ekonomis::class, 'id_barang');
        }
}
