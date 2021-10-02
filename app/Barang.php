<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    //
    use SoftDeletes;
    protected $table = 'barang';

    protected $fillable = [
        'kode',
        'nama',
        'lokasi',
        'barang_masuk',
        // 'barang_keluar',
        'qty',
        'tipe',
        'kategori',
        'kondisi',
        'keterangan',
        'created_at'
    ];
    public function peminjams()
    {
        return $this->hasMany(Peminjam::class, 'barang_id');
    }
}
