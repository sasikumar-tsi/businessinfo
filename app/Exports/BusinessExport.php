<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class BusinessExport implements FromView
{
    public function view(): View
    {
        return view('exports.business', [
            'invoices' => Invoice::all()
        ]);
    }
}
