<?php

namespace App\Exports;

use App\newData;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class CsvExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents, WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return newData::all();
    }
    public function headings(): array
    {
        return [
            '#',
            'Name',
            'Mobile',
            'Email',
            'Post',
            'Street',
            'Adults',
            'Children',
            'Donations',
            'Amount',
            'Created at',
            'Updated at',
            'Deleted at',
            'Persons'
        ];

    }
    public function columnFormats(): array
    {
        return [
            'B' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'L' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'M' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }

    /**
     * @inheritDoc
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }
}
