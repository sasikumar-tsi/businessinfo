<!DOCTYPE html>
<html>
<head>
    <title>Business Info</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <script src="{{asset('/assets/admin/js/core/pace.js')}}"></script>
    <link href="{{ mix('/assets/admin/css/laraspace.css') }}" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('admin.layouts.partials.favicons')
    @yield('styles')
</head>
<body class="layout-default skin-default">
    @include('admin.layouts.partials.laraspace-notifs')

    <div id="app" class="site-wrapper">
        @include('admin.layouts.partials.header')
        <div class="mobile-menu-overlay"></div>
        @include('admin.layouts.partials.sidebar',['type' => 'default'])

        @yield('content')

        @include('admin.layouts.partials.footer')
        @if(config('laraspace.skintools'))
            @include('admin.layouts.partials.skintools')
        @endif
    </div>
<link href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" />

<link href="https://kidsysco.github.io/jquery-ui-month-picker/MonthPicker.min.css" rel="stylesheet" type="text/css" />
    <script src="{{mix('/assets/admin/js/core/plugins.js')}}"></script>
    <script src="{{asset('/assets/admin/js/demo/skintools.js')}}"></script>
    <script src="{{mix('/assets/admin/js/core/app.js')}}"></script>
	    
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="https://kidsysco.github.io/jquery-ui-month-picker/MonthPicker.min.js"></script>
	 <script>
	 $(document).ready(function() { 
	$('.monthYearPicker').datepicker({
		changeMonth: true,
		changeYear: true,
		showButtonPanel: true,
		dateFormat: 'yy-mm'
	}).focus(function() {
		var thisCalendar = $(this);
		$('.ui-datepicker-calendar').detach();
		$('.ui-datepicker-close').click(function() {
	var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
	var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
	thisCalendar.datepicker('setDate', new Date(year, month, 1));
			});
	});
	
	
	

	$('#submit3').click(function() {
      
		
		 $("#form2").submit(); 
		 alert("fffff");
		/*$("#loading").show();
		var month_year = $("#month_year").val();
		
		
		$.post("/admin/dashboard/getfile", {
		month_year: month_year,
		"_token": "{{ csrf_token() }}",
		}, function(status) {
		$("#loading").hide(); // To Hide progress bar
		
		});*/
	});

});
 </script>
    @yield('scripts')
</body>
</html>
