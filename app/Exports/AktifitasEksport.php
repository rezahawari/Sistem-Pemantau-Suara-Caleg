<?php

namespace App\Exports;

use App\Models\Aktifitas;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AktifitasEksport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Aktifitas::select('tgl','aktifitas','potensi','nama','kecamatan','kelurahan','rt','rw','pj')->get();
    }

    public function headings(): array
    {
        return ['Tanggal', 'Aktifitas', 'Potensi', 'Nama Penggerak', 'Kecamatan', 'Kelurahan', 'RT', 'RW', 'Penanggung Jawab'];
    }
}
