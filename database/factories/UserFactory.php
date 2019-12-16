<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Kasir;
use App\Pasok;
use App\Barang;
use App\Penjualan;
use App\Distributor;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Kasir::class, function (Faker $faker) {
    return [
        'nama_kasir' => $faker->name,
        'alamat' => $faker->address,
        'telepon' => $faker->phoneNumber,
    ];
});

$factory->define(Pasok::class, function (Faker $faker) {
    return [
        'id_barang' => $faker->numberBetween(1,20),
        'id_distributor' => $faker->numberBetween(1,20),
        'jumlah' => $faker->numberBetween(10,100),
    ];
});

$factory->define(Barang::class, function (Faker $faker) {
    return [
        'nama_barang' => $faker->name,
        'stok' => $faker->numberBetween(1,50),
        'hargaPokok' => $faker->numberBetween(10000,50000),
        'hargaJual' => $faker->numberBetween(10000,50000),
        'ppn' => $faker->numberBetween(1,10),
        'diskon' => $faker->numberBetween(1,5),
    ];
});

$factory->define(Penjualan::class, function (Faker $faker) {
    return [
        'id_barang' => $faker->numberBetween(1,20),
        'id_kasir' => $faker->numberBetween(1,20),
        'jumlah' => $faker->numberBetween(1,20),
        'total' => $faker->numberBetween(1000000,50000000),
        'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});

$factory->define(Distributor::class, function (Faker $faker) {
    return [
        'nama_distributor' => $faker->name,
        'alamat' => $faker->address,
        'telepon' => $faker->phoneNumber,
    ];
});
