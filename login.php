<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Banner</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styling -->
    <link href="css/Style.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </head>
<body>
<div class="container">
		<div class="col-md-4 col-md-offset-4 mainForm">
			<h1>Survey</h1>
			<form id="form" class="form-horizontal">
				<!-- question 1 using checkboxes -->
				<h3>Which cities have you visited?</h3>
				<div>
					<label class="checkbox-inline"><input type="checkbox" name="checkbox" value="paris">Paris</label>
				</div>
				<div>
					<label class="checkbox-inline"><input type="checkbox" name="checkbox" value="newYork">New York</label>
				</div>
				<div>
					<label class="checkbox-inline"><input type="checkbox" name="checkbox" value="LA">LA</label>
				</div>
				<div>
					<label class="checkbox-inline"><input type="checkbox" name="checkbox" value="cairo">Cairo</label>
				</div>
				<div>
					<label class="checkbox-inline"><input type="checkbox" name="checkbox" value="none">None of the above</label>
				</div>
				<br>
				<!-- question 2 using select and options -->
				<h3>What's your favorite color?</h3>
				<select class="form-control" id="select" name="select">
					<option value="blue" name="option">blue</option>
					<option value="red" name="option">red</option>
					<option value="green" name="option">green</option>
					<option value="black" name="option">black</option>
				</select>
				<br>
				<!-- question 3 using radio buttons -->
				<h3>What's your dream pet?</h3>
				<div class="radio">
					<label><input type="radio" value="dog" name="radio">dog</label>
				</div>
				<div class="radio">
					<label><input type="radio" value="cat" name="radio">cat</label>
				</div>
				<div class="radio">
					<label><input type="radio" value="bird" name="radio">bird</label>
				</div>
				<div class="radio">
					<label><input type="radio" value="snake" name="radio">snake</label>
				</div>
				<br>
				<br>
				<div class="form-actions">
					<a href="./php/backgroundinformation.php"><button type="button" id="submitButton" class="btn btn-default">Submit</button></a>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
