@extends("_master")

@section("title")
	
@stop

@section("content")
	<?php 

	$generator = new Badcow\LoremIpsum\Generator();

	if(empty($_POST["paragraphs"])){
		$paragraphs = $generator->getParagraphs(5);
    	echo implode('<p>', $paragraphs);
	}
	else {
		$paragraphs = $generator->getParagraphs($_POST["paragraphs"]);
		echo implode('<p>', $paragraphs);
	}
    

    ?>
@stop