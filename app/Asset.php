<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    public $timestamps = false;
    protected $fillable = ['Nama_Asset','Kode_Asset','Tanggal_Asset','Jumlah'];
    protected $table = 'asset';
}
