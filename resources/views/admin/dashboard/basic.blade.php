@extends('admin.layouts.layout-basic')

@section('content')



    <div class="main-content" id="dashboardPage">
        <div class="row">
           <form id="form" action="" method="post">

         <label for="myDate">Date :</label>
<input name="myDate" class="monthYearPicker" id="month_year" />
        
		
		<input type="button" id="submit" name="submit" value="Submit" />

        </div>
       
       </form>

    </div>
	
	
@stop
