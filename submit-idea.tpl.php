<html>
	<head>
	</head>
	<body>
		<h2> Propose a book idea </h2>
		<form name = "form1" method = "post" action = "">
			<div>
			<label for"in"> Proposed book title </label><br>
			<input type = "text" id = "in" name = "text1" size = "59" >
			</div> <br>
			<div>
				<label for "gen"> Genres </label> <br>
				<input type = "checkbox" id ="gen" name ="genre1" value= "mystery"> Mystery <br>
				<input type = "checkbox" id ="gen" name ="genre2" value= "mystery"> Romance <br>
				<input type = "checkbox" id ="gen" name ="genre3" value= "mystery"> Political <br>
				<input type = "checkbox" id ="gen" name ="genre2" value= "mystery"> Non-fiction <br>
			</div> <br>
			<div>
			<label for "description"> Description </label><br>
			<textarea name = "textarea1" id ="description" rows = "8" cols = "60"></textarea><br><br>
		    </div>
		    <div>
		    <label for "language"> Language </label> <br>
		    <select name = "mySelect" id = "language"> 
				<option value = "english">English</option>
				<option value = "romanian">Romanian</option>
				
			</select><br>
			</div> <br>
			<div>
		    <label for "length"> Length </label> <br>
		    <select name = "mySelect" id = "length"> 
				<option value = "10">10 paragraphs</option>
				<option value = "20">20 paragraphs</option>
				<option value = "30">30 paragraphs</option>
				<option value = "40">40 paragraphs</option>
				<option value = "50">50 paragraphs</option>
				<option value = "60">60 paragraphs</option>
				<option value = "70">70 paragraphs</option>
				<option value = "80">80 paragraphs</option>
				<option value = "90">90 paragraphs</option>
				<option value = "100">100 paragraphs</option>
				
			</select><br>
			</div> <br>
			<div>
			<input type = "submit" id= "submit_my_idea" name ="Submit1" value="Submit my idea">
			</div>

		</form>
	</body>	
</html>