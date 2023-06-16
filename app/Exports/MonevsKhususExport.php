<?php

namespace App\Exports;

use App\Models\Ptb;
use Maatwebsite\Excel\Concerns\FromCollection;

class MonevsKhususExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return Ptb::all();
    }
}
