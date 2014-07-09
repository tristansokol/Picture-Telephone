<?php
$images = array("http://api.pearson.com/dk/v1/images/3z1eatzhFCXBtZ?size=iphone",
	"http://api.pearson.com/dk/v1/images/JqhjxGasg2kRdk?size=iphone",
	"http://api.pearson.com/dk/v1/images/8qrm5c3A6Frht7?size=iphone",
	"http://api.pearson.com/dk/v1/images/KnBhg7wHa9K1JW?size=iphone",
	"http://api.pearson.com/dk/v1/images/ZGA52zcv98dytB?size=iphone")
	?>

	<!DOCTYPE html> 
	<html> 
	<head> 
		<title>My Page</title> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
	</head> 
	<body> 

		<div data-add-back-btn="true" data-role="page">


			<div data-add-back-btn="true" data-role="header" >
				<a href="#" data-rel="back" data-icon="arrow-l">Back</a>
				<h1>CommuniDraw!</h1>
			</div><!-- /header -->

			<div data-role="content">	

				<div data-role="fieldcontain">
					<fieldset data-role="controlgroup">
						<legend>Pick a game you want to play! <br> <br> If you select an image, you will be describing that image, a sentance, and you will draw that sentance!</legend>
						<form action="./page1.php">
							<label>
								<input type="radio" name="radio-choice-0" id="radio-choice-0a" onClick="this.form.submit()">
								<img src="http://api.pearson.com/dk/v1/images/AkEmFCDHqqD8Eh?size=thumb"/>
							</label>
							<label>
								<input type="radio" name="radio-choice-0" id="radio-choice-0b" class="custom" onClick="this.form.submit()">
								<img src="http://api.pearson.com/dk/v1/images/XMc3T6ks09SJZk?size=thumb"/>
							</label>

							<label>
								<input type="radio" name="radio-choice-0" id="radio-choice-0b" class="custom" onClick="this.form.submit()">
								The fox played in the snow. 
							</label>
						</form>
					</fieldset>
				</div>
				<a href="newgame.php" data-role="button" data-transition="fade">New Game</a>

			</div><!-- /content -->


		</div><!-- /page -->

	</body>
	</html>