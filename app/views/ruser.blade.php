@extends("_master")

@section("title")
	
@stop

@section("content")

	<?php 
		$faker = Faker\Factory::create();
	    
	    if(empty($_POST["users"])){
			for ($i = 0; $i < 5; $i++) {
				echo $faker->name;
			}
		}
		else {
			for ($i = 0; $i < $_POST["users"]; $i++) { ?>
				<?php echo $faker->name; ?> <br>
			<?php }
		}
    ?>

    <div class = "col-md-6 col-md-offset-3">
    	<h3 class = "text-center"> Random User Generator </h3>
	    <form method = "POST" action = "ruser">
			<div class = "form-group">
				<label form "users"> Enter a number of users: </label>
				<input class = "form-control" type = "text" id = "users" name = "users" maxlength = 1 value = ''>
			</div>
			<button type = "submit" class = "btn btn-default"> Get some users! </button>
		</form>
	</div>

@stop