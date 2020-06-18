<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
class SingleExportTxtFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SingleExportTxtFile {--date}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
				$month_year 		= $this->option('date');
      
			  // $url='ftp://ftp.dos.state.fl.us/public/doc/cor/20200417c.txt';
				$url='ftp://ftp.dos.state.fl.us/public/doc/cor/';
				 
		        $current_date=date('Ymd');		
				$full_path=$url.$current_date."c.txt";	
				
				$this->getFileContent($full_path,$date_formate);	
				
			

	
    }
	
	
	public function getFileContent($full_path,$date_formate){
		
					try {
					
						$result = @file_get_contents($full_path);
						if ($result) { // error condition
						   Storage::disk('local')->put($date_formate.'c.txt', $result);
						} 
				
					} catch (ErrorException $e) {
						return 'The file was not found';
					}
		
	}
	
}
