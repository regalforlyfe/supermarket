<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';

    protected $primaryKey = "id_penjualan";
    protected $fillable= ['id_barang','id_kasir','jumlah','total'];
    public $timestamps = false;
}
