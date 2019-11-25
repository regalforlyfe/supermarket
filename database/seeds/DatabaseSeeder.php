<?php

use Illuminate\Database\Seeder;
use App\Kasir;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Kasir::class,20)->create();
    }
}
