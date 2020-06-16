@extends('admin.layouts.layout-basic')

@section('content')



    <div class="main-content" >
        <div class="row">
           <form id="form2" action="/admin/dashboard/getfile" method="post">
 @csrf
         <label for="myDate">Date :</label>
<input name="myDate" class="monthYearPicker" id="month_year" />
        
		
		<input type="submit" id="submit" name="submit" value="Submit"  />

        </div>
       
       </form>

    </div>
	
	
@stop
