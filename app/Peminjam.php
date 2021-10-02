<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peminjam extends Model
{
    //
    use SoftDeletes;

    protected $table = 'peminjaman';

    protected $fillable = [
        'account_id',
        'barang_id',
        'nama_peminjam',
        'tanggal',
        'pengembalian',
        'created_at'
    ];

    public function accounts()
    {
        return $this->belongsTo(Account::class, 'account_id', 'id');
    }

    public function barangs()
    {
        return $this->belongsTo(Barang::class, 'barang_id', 'id');
    }
}
