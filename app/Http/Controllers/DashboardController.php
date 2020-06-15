<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Exports\BusinessExport;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    public function index() 
    {
        return redirect()->route('admin.dashboard.basic');
    }

    public function basic() 
    {
         return view('admin.dashboard.basic');
    }

    public function ecommerce() 
    {
        return view('admin.dashboard.ecommerce');
    }

    public function finance() 
    {
        return view('admin.dashboard.finance');
    }
	
	public function getfile() 
    {
		$file = fopen(storage_path("app/20200601c.txt"), "r");

			//$contents = Storage::get('20200601.txt');
			
			$datas	= array();

			while(!feof($file)) {
				$line = fgets($file);
			
				 $COR_NUMBER			= Str::substr($line, 0,12);
				 $COR_NAME				= Str::substr($line, 12,150);
				 $COR_STATUS			= Str::substr($line, 204,1);
				 $COR_FILING_TYPE		= Str::substr($line, 205,15);
				 $COR_PRINC_ADD_1		= Str::substr($line, 220,42);
				 $COR_PRINC_ADD_2		= Str::substr($line, 262,42);
				 $COR_PRINC_CITY		= Str::substr($line, 304,28);
				 $COR_PRINC_STATE		= Str::substr($line, 332,2);
				 $COR_PRINC_ZIP			= Str::substr($line, 334,5);
				 $COR_PRINC_COUNTRY		= Str::substr($line, 343,02);
				 $COR_MAIL_ADD_1		= Str::substr($line, 346,42);
				 $COR_MAIL_ADD_2		= Str::substr($line, 388,42);
				 $COR_MAIL_CITY			= Str::substr($line, 430,28);
				 $COR_MAIL_STATE		= Str::substr($line, 458,02);
				 $COR_MAIL_ZIP			= Str::substr($line, 460,10);
				 $COR_MAIL_COUNTRY		= Str::substr($line, 470,02);
				 $COR_FILE_DATE			= Str::substr($line, 472,8);

				$datas[]= array(
				
						'COR_NUMBER'				=> $COR_NUMBER,
						'COR_NAME'     				=> $COR_NAME,
						'COR_STATUS'     			=> $COR_STATUS,
						'COR_FILING_TYPE'     		=> $COR_FILING_TYPE,
						'COR_PRINC_ADD_1'     		=> $COR_PRINC_ADD_1,
						'COR_PRINC_ADD_2'     		=> $COR_PRINC_ADD_2,
						'COR_PRINC_CITY'     		=> $COR_PRINC_CITY,
						'COR_PRINC_STATE'     		=> $COR_PRINC_STATE,
						'COR_PRINC_ZIP'     		=> $COR_PRINC_ZIP,
						'COR_PRINC_COUNTRY'     	=> $COR_PRINC_COUNTRY,
						'COR_MAIL_ADD_1'     		=> $COR_MAIL_ADD_1,
						'COR_MAIL_ADD_2'     		=> $COR_MAIL_ADD_2,
						'COR_MAIL_CITY'     		=> $COR_MAIL_CITY,
						'COR_MAIL_STATE'     		=> $COR_MAIL_STATE,
						'COR_MAIL_ZIP'     		    => $COR_MAIL_ZIP,
						'COR_MAIL_COUNTRY'     		=> $COR_MAIL_COUNTRY,
						'COR_FILE_DATE'     		=> $COR_FILE_DATE,
				
				);
				
			}

			fclose($file);
			
			
			echo '<pre>';
			print_r($datas);
			echo '</pre>';
	}
	
	
	public function export() 
    {
        return Excel::download(new BusinessExport, 'business.xlsx');
    }
}
