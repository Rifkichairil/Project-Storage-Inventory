<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class InventarisController extends Controller
{
    //
    public function index()
    {
        $rndm_string = Str::random(5);
        return view('pages.inventaris', compact('rndm_string'));
    }

    public function store(Request $req)
    {
        $validator = $req->validate([
            'kategori'      => 'required',
            'nama'          => 'required',
            'tipe'          => 'required',
            'lokasi'        => 'required',
            'kondisi'       => 'required',
            'barang_masuk'  => 'required',
            'qty'           => 'required',
            'keterangan'    => 'required',
        ]);
        $data = $req->all();
        Barang::create($data);
        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        $barangs = Barang::findOrFail($id);

        return redirect()->route('dashboard', compact('barangs'));
    }
}
