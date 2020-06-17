@extends('admin.layouts.layout-basic')

@section('content')



    <div class="main-content" >
        <div class="row">
		 <div class="col-md-12 col-lg-6">
           <form id="form2" action="/admin/dashboard/getfile" method="post">
 @csrf
         <label for="myDate">Month & Year :</label>
<input name="month_year" class="monthYearPicker" id="month_year" autocomplete="off" />
        
		
		<input type="submit" id="submit" name="submit" value="Submit"  />

        </div>
       
       </form>

    </div>
    </div>
	
	
@stop
