<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class EventImport implements WithStartRow, WithChunkReading
{
     /**
    * @param Collection $collection
    */
    use Importable;

    public function startRow(): int
    {
        return 2;
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
