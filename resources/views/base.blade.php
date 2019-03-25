<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel projet</title>
	<!-- Morris Charts CSS -->
    <link href="{{ asset('vendors/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />
	
    <!-- Toggles CSS -->
    <link href="{{ asset('vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">
	
	<!-- Toastr CSS -->
    <link href="{{ asset('vendors/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body class="loading_table">
	<div class="container">
	@yield('main')
</div>
<!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('dist/js/jquery.slimscroll.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{ asset('dist/js/feather.min.js')}}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{ asset('vendors/jquery-toggles/toggles.min.js')}}"></script>
    <script src="{{ asset('dist/js/toggle-data.js')}}"></script>
  
  <!-- Toastr JS -->
    <script src="{{ asset('vendors/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>
    
  <!-- Counter Animation JavaScript -->
  <script src="{{ asset('vendors/waypoints/lib/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('vendors/jquery.counterup/jquery.counterup.min.js')}}"></script>
  
  <!-- Morris Charts JavaScript -->
    <script src="{{ asset('vendors/raphael/raphael.min.js')}}"></script>
    <script src="{{ asset('vendors/morris.js/morris.min.js')}}"></script>
  
  <!-- Easy pie chart JS -->
    <script src="{{ asset('vendors/easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
  
  <!-- Flot Charts JavaScript -->
    <script src="{{ asset('vendors/flot/excanvas.min.js')}}"></script>
    <script src="{{ asset('vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('vendors/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('vendors/flot/jquery.flot.time.js')}}"></script>
    <script src="{{ asset('vendors/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset('vendors/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{ asset('vendors/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
  
  <!-- EChartJS JavaScript -->
    <script src="{{ asset('vendors/echarts/dist/echarts-en.min.js')}}"></script>
    
    <!-- Init JavaScript -->
    <script src="{{ asset('dist/js/init.js')}}"></script>
  <script src="{{ asset('dist/js/dashboard2-data.js')}}"></script>
</body>
</html>

