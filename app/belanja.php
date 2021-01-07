<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class belanja extends Model
{
    public $timestamps = false;
    protected $fillable = ['Nama_Barang','Tanggal_Pemesanan','Tanggal_Terima','Harga_Barang','Jumlah_Barang'];
    protected $table = 'belanja';
}
