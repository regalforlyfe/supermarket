<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasok extends Model
{
    protected $table = 'pasok';

    protected $primaryKey = "id_pasok";
    protected $fillable= ['id_barang','jumlah',];

    public $timestamps = false;
}
