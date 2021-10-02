<?php

namespace App\Exports;

use App\Peminjam;
use App\User;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Contracts\Queue\ShouldQueue;

class PeminjamExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents, WithMapping
{
    use Exportable;

    /**
     * @return \Illuminate\Support\Collection
     */
    // varible form and to
    public function __construct(String $from = null, String $to = null)
    {
        $this->from = $from;
        $this->to   = $to;
    }

    //function select data from database
    public function collection()
    {
        return Peminjam::with('barangs', 'accounts')->select()->where('tanggal', '>=', $this->from)->where('tanggal', '<=', $this->to)->get();
    }
    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function (AfterSheet $event) {
                $cellRange = 'A1:G1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }

    public function map($peminjam): array
    {
        $now            = Carbon::now();
        $pengembalian   = Carbon::parse($peminjam->pengembalian);
        $late           = $now->diffInDays($pengembalian);

        return [
            $peminjam->accounts->username,
            $peminjam->barangs->nama,
            $peminjam->nama_peminjam,
            date('d-m-Y', strtotime($peminjam->tanggal)),
            date('d-m-Y', strtotime($peminjam->pengembalian)),
            ($now->diff($pengembalian)->days < 1) ? ' 0 Hari ' : $now->diffForHumans($pengembalian),
            $peminjam->created_at,
            $now,
        ];
    }

    //function header in excel
    public function headings(): array
    {
        return [
            'User',
            'Barang',
            'Nama Peminjam',
            'Tanggal Pinjam',
            'Tanggal Pengembalian',
            'Keterlambatan',
            'Created_at',
            'Tanggal hari ini'
        ];
    }
}
