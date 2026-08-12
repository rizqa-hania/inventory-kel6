<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
