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

	<div data-role="page">


		<div data-role="header">
			<h1>TringTring</h1>
		</div><!-- /header -->

		<div data-role="content">	
			<p>This game helps the team to get connected to each other and the ideas. But it is fun to challenge your brains too!!
			</p>	


			<div data-role="collapsible" data-theme="b" data-content-theme="d">
				<h4>How To Play</h4>
				<p>
					<ul data-role="listview" data-inset="true" data-divider-theme="d">
						<li data-role="list-divider">Join an existing conversation</li>
						<li>You have the list of existing conversations going in the community</li>
						<li>You can select an image to describe or phrase to draw.</li>
						<li> You go to the screen and do your best to communicate what you see for the next person.</li>
						<li>And you have joined the crowd.</li>
						<li data-role="list-divider"> Start a New Game</li>
						<li>This starts a new conversation and provides 3 images to choose from.</li>
						<li>You can select an image you want to describe.</li>
						<li>Provide a name for the game.</li>
						<li>Click submit and you can describe it as detailed as possible for next person to draw what you see.</li>
						<li>And the conversation starts.</li>
						<li data-role="list-divider">Check the status of ongoing conversations</li>
						<li> Click on All games</li>
						<li>You can select an image you want to describe.</li>
						<li>Have fun!!This game is about drawing descriptions and describing what you see.</li>
						<li>Now you want to see where the conversation started and how it flowed</li>		
					</ul>
				</p>
			</div>

			<a href="games.php" data-role="button" data-transition="fade" data-ajax="false">Play Now</a>
		</div><!-- /content -->


	</div><!-- /page -->

</body>
</html>