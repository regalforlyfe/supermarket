<?php

use Illuminate\Database\Seeder;
use App\Kasir;
use App\Pasok;
use App\Barang;
use App\Penjualan;
use App\Distributor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //factory(Kasir::class,20)->create();
        //factory(Barang::class,20)->create();
        //factory(Pasok::class,20)->create();
        factory(Penjualan::class,20)->create();
        //factory(Distributor::class,20)->create();
    }
}
