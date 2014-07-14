@extends("_master")

@section("title")
	
@stop

@section("content")
	<div class = "row">
		<div class = "col-md-4">
			<h2> Lorem Ipsum Generator </h2>
			<form method = "POST" action = "lipsum">
				<div class = "form-group">
					<label for = "paragraphs"> Enter a number of paragraphs: </label>
					<input class ="form-control" type = "text" id = "paragraphs" name = "paragraphs" maxlength = 1 value = ''>
				</div>
				<button type = "submit" class = "btn btn-default"> Get some text! </button>
			</form>
		</div>

		<div class = "col-md-8">
			<div class = "well">
				<p>In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Replacing meaningful content that could be distracting with placeholder text may allow viewers to focus on graphic aspects such as font, typography, and page layout.</p>

				<p>The lorem ipsum text is typically a scrambled section of De finibus bonorum et malorum, a 1st-century BC Latin text by Cicero, with words altered, added, and removed such that it is nonsensical, improper Latin.</p>

				<p>A variation of the ordinary lorem ipsum text has been used in typesetting since the 1960s or earlier, when it was popularized by advertisements for Letraset transfer sheets. It was introduced to the Information Age in the mid-1980s by Aldus Corporation, which employed it in graphics and word processing templates for its desktop publishing program, PageMaker, for the Apple Macintosh.</p>

				<p><small> Taken from <a href="https://en.wikipedia.org/w/index.php?title=Lorem_ipsum&oldid=615803343"> Wikipedia </a></small></p>
			</div>
		</div>
	</div>

	<div class = "row">
		<div class = "col-md-4">
			<h2> Random User Generator </h2>
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
				<p>The random user generator will create a specified number of random users. Optional information including birth dates, addresses, and other relevant data can also be generated for each 'user'</p>
			</div>
		</div>
	</div>
@stop