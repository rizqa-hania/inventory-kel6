<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Barang;

class Ekonomis extends Model
{
    protected $table = 'masa_ekonomis';
    protected $primaryKey = 'masa_id';
    protected $fillable = [
        'barang_id',
        'tanggal_pembelian',
        'harga_pembelian',
        'masa_pakai_pertahun',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }
}
