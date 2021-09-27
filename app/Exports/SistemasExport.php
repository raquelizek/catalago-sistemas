<?php

namespace App\Exports;

use App\Models\CatalogoSistemas;
use Maatwebsite\Excel\Concerns\FromCollection;


class SistemasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CatalogoSistemas::all();
    } 
}
