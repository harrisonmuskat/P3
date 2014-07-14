@extends("_master")

@section("title")
	
@stop

@section("content")
	<div class = "col-md-4">
	    <h3> Lorem Ipsum Generator </h3>
			<form method = "POST" action = "lipsum">
				<div class = "form-group">
					<label for = "paragraphs"> Enter a number of paragraphs: </label>
					<input class ="form-control" type = "text" id = "paragraphs" name = "paragraphs" maxlength = 1 value = ''>
				</div>
				<button type = "submit" class = "btn btn-default"> Get some text! </button>
			</form>
		<h3> Random User Generator </h3>
		    <form method = "POST" action = "ruser">
				<div class = "form-group">
					<label form "users"> Enter a number of users: </label>
					<input class = "form-control" type = "text" id = "users" name = "users" maxlength = 1 value = ''>
				</div>
				<button type = "submit" class = "btn btn-default"> Get some users! </button>
			</form>
	</div>


	<div class = "col-md-8">
		<div class = "well">
			<?php 
				$generator = new Badcow\LoremIpsum\Generator();

				if(empty($_POST["paragraphs"])){
					$paragraphs = $generator->getParagraphs(5);
			    	for ($i = 0; $i < count($paragraphs); $i++) {
			    		echo '<p class = "small">'.$paragraphs[$i].'</p>';
			    	}
				}
				else {
					$paragraphs = $generator->getParagraphs($_POST["paragraphs"]);
					for ($i = 0; $i < count($paragraphs); $i++) {
			    		echo '<p class = "small">'.$paragraphs[$i].'</p>';
			    	}
				}
		    ?>
		</div>
    </div>

@stop