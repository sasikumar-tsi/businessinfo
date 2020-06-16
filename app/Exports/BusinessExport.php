<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class BusinessExport implements FromView
{
	
	public function __construct($data = "")
{
    
    $this->data = $data;
}
    public function view(): View
    {
		
        return view('exports.business', [
            'datas' => $this->data
        ]);
    }
}
