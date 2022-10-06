<?php

namespace App\Exports;
use App\Sheet;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SheetExport implements FromView
{
    public function view(): View
    {
        {
            return view('print_forms.c1formexcel', [
                'information' => Sheet::all()
            ]);
        }
    }
}
