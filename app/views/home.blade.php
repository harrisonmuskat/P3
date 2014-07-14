@extends("_master")

@section("title")
	
@stop

@section("content")
	<div class = "row">
		<div class = "col-md-6">
			<h2 class = "text-center"> Lorem Ipsum Generator </h2>
			<form method = "POST" action = "lipsum">
				<div class = "form-group">
					<label for = "paragraphs"> Enter a number of paragraphs: </label>
					<input class ="form-control" type = "text" id = "paragraphs" name = "paragraphs" maxlength = 1 value = ''>
				</div>
				<button type "submit" class = "btn btn-default"> Get some text! </button>
			</form>
		</div>

		<div class = "col-md-6">
			<h2 class = "text-center"> Random User Generator </h2>

		</div>
	</div>
@stop