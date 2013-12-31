<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maestro - {{$title}}</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="custom.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>


</head>

<body>
	@include('layout.header')

	@yield('content')

	@include('layout.footer')
</body>
<!-- javascript -->
	<script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script>
		function recalcularLogo(){
			var widthTotal = $(window).width();
			var left = widthTotal/2 - 500;
			if (widthTotal >992){
				$("#logo").css("left", left);
			}
		}
		$(function(){    	
			recalcularLogo();
			$(window).resize(recalcularLogo); 	
		});
    </script>
</html>
