<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    public $timestamps = false;
    protected $fillable = ['Nama_Asset','Tanggal_Pemesanan','Tanggal_Terima','Harga','Jumlah_Asset'];
    protected $table = 'pemesanan';
}
