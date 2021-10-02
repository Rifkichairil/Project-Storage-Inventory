<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Barang;
use App\Model;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Barang::class, function (Faker $faker) {
    return [
        //
        'kode'              =>  'KDB-' . Str::random(5),
        'nama'              =>  $faker->firstname,
        'lokasi'            =>  $faker->secondaryAddress,
        'barang_masuk'      =>  now(),
        'barang_keluar'     =>  now(),
        'kondisi'           =>  'Baru',
        'tipe'              =>  'Buku',
        'kategori'          =>  'Novel',
        'keterangan'        =>  $faker->text(),
    ];
});
