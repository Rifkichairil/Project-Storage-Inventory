<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Peminjam;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Exports\PeminjamExport;
use Maatwebsite\Excel\Facades\Excel;

class PinjamanController extends Controller
{
    //
    public function pinjaman()
    {
        $rndm_string = Str::random(5);
        $barangs     = Barang::get();

        return view('pages.pinjaman', compact('rndm_string', 'barangs'));
    }

    public function store(Request $req)
    {
        $validator = $req->validate([
            'nama_peminjam'      => 'required',
            'tanggal'            => 'required',
            'barang_id'          => 'required',
            'pengembalian'       => 'required',
        ]);

        $data = $req->all();
        // dd($data);

        if (count($req->barang_id) > 0) {
            # code...
            foreach ($data['barang_id'] as $item => $value) {
                # code...
                $data2 = array(
                    'account_id'    => $req->account_id,
                    'nama_peminjam' => $req->nama_peminjam,
                    'tanggal'       => $req->tanggal,
                    'pengembalian'  => $req->pengembalian,
                    'barang_id'     => $data['barang_id'][$item]
                );
                Peminjam::create($data2);
                Barang::where('id', $data['barang_id'][$item])->decrement('qty');
            }
        }
        // dd($barangs);
        return redirect()->back()->with('status', 'Data Berhasil ditambahkan');
    }

    public function booking()
    {
        $bookings = Peminjam::with('barangs')->get();
        // dd($bookings);
        return view('pages.booking', compact('bookings'));
    }

    public function restore($id)
    {
        $peminjamans = Peminjam::findOrFail($id);
        // dd($peminjamans->barang_id);
        $peminjamans->delete();

        Barang::where('id', $peminjamans->barang_id)->increment('qty');
        return redirect()->back()->with('status', 'Data Berhasil direstock');
    }

    public function filter(Request $req)
    {
        $from   = $req->from;
        $to     = $req->to;

        if ($req->has('filter')) {
            # code...
            if ($req->from && $req->to) {
                # code...
                $bookings = Peminjam::with('barangs')
                    ->where('tanggal', '>=', $from)
                    ->where('tanggal', '<=', $to)
                    ->get();
            } else {
                $bookings = Peminjam::with('barangs')
                    ->get();
            }
        } elseif ($req->has('export')) {
            // select Excel
            return Excel::download(new PeminjamExport($from, $to), 'Excel-reports.xlsx');
        } else {
            $bookings = Peminjam::with('barangs')
                ->get();
        }
        return view('pages.booking', compact('bookings'));
    }

    public function export()
    {
        return Excel::download(new PeminjamExport, 'users.xlsx');
    }
}
