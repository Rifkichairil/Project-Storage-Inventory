<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Peminjam;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        $now            = Carbon::now();
        // dd($now);
        $barangs        = Barang::get();
        $inventaris     = Barang::get()->count();
        $totalbookings  = Peminjam::get()->count();
        $nowbookings    = Peminjam::where('tanggal', '=', $now->format('Y-m-d'))->get()->count();
        $pengembalians  = Peminjam::where('pengembalian', '<=', $now->format('Y-m-d'))->get()->count();

        return view('pages.dashboard', compact('barangs', 'totalbookings', 'nowbookings', 'inventaris', 'pengembalians'));
    }

    public function detail($id)
    {
        $barangs = Barang::where('id', $id)->firstOrFail();
        return view('pages.detail', compact('barangs'));
    }
}
