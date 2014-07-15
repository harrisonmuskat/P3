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
		<div class = "col-md-10">
			<h3> Developer's Best Friend <br><small>Use these tools to generate filler text, fake users, and passwords for all manner of applications in web design and development</small></h3>
		</div>
	</div>

	<div class = "row">
		<div class = "col-md-4">
			<h4> Lorem Ipsum Generator </h4>
			<form class = "form-horizontal" role = "form" method = "POST" action = "lipsum">
				<div class = "form-group">
					<label for = "paragraphs" class = "col-md-5"> Enter a number of paragraphs: </label>
						<div class = "col-md-3">
							<input class = "form-control" type = "text" id = "paragraphs" name = "paragraphs" maxlength = 1 value = ''>
						</div>
				</div>
				<button type = "submit" class = "btn btn-default"> Get some text! </button>
			</form>

			<h4> Random User Generator </h4>
			<form class = "form-horizontal" role = "form" method = "POST" action = "ruser">
				<div class = "form-group">
					<label for = "users" class = "col-md-5"> Enter a number of users: </label>
						<div class = "col-md-3">
							<input class = "form-control" type = "text" id = "users" name = "users" maxlength = 1 value = ''>
						</div>
					<label for = "birth"> Include birthdays: 
						<input type = "checkbox"  id = "birth" name = "birth">
					</label>
					<label for = "address"> Include address: 
						<input type = "checkbox" id = "address" name = "address">
					</label>
				</div>
				<button type = "submit" class = "btn btn-default"> Get some users! </button>
			</form>
		</div>

		@yield("content")
	</div>

	<div class = "row">
		@yield("user")
	</div>
	

	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type = "text/javascript"></script>
	<script src = "js/bootstrap.min.js"></script>
	@yield("footer")

</body>
</html>