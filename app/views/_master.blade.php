<!DOCTYPE html>
<html>
<head>

	<title> @yield('title', "Developer's Best Friend") </title>

	<meta charset = "utf-8">
	<!--<link rel = "stylesheet" href = "{{ URL::asset('styles/bootstrap.min.css') }}" type = "text/css">-->
	{{HTML::style('styles/bootstrap.min.css')}}

	@yield('head')

</head>

<body class = "container-fluid">

	<div class = "row">
		<h1 class = "text-center"> Developer's Best Friend </h1>
	</div>

	@yield("content")

	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type = "text/javascript"></script>
	<script src = "js/bootstrap.min.js"></script>
	@yield("footer")

</body>
</html>