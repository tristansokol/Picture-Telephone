<?php include('header.php'); ?>
	<body> 
		<div data-add-back-btn="true" data-role="page">
			<div data-add-back-btn="true" data-role="header" >
				<a href="#" data-rel="back" data-icon="arrow-l">Back</a>
				<h1>CommuniDraw!</h1>
			</div><!-- /header -->

			<div data-role="content" data-theme="a">	
				<?php if(!isset($_GET['image'])&&!isset($_GET['phrase'])){
					?>
					<form action="" method="GET" >
						<fieldset data-role="controlgroup" data-type="horizontal" data-theme="a">
							<legend>Horizontal:</legend>
							<?php
							$rand1 = rand(0,count($images));
							$rand2 = rand(0,count($images));
							$rand3 = rand(0,count($images));
							?>
							<input type="radio" name="image" id="radio-choice-h-2a" value="<?php echo $rand1;?>" checked="checked">
							<label for="radio-choice-h-2a"><img src="<?php echo $images[$rand1];?>"/></label>
							<input type="radio" name="image" id="radio-choice-h-2b" value="<?php echo $rand2;?>">
							<label for="radio-choice-h-2b"><img src="<?php echo $images[$rand2];?>"/></label>
							<input type="radio" name="image" id="radio-choice-h-2c" value="<?php echo $rand3;?>">
							<label for="radio-choice-h-2c"><img src="<?php echo $images[$rand3];?>"/></label>
						</fieldset>
						<label for="name">Game name:</label>
						<input type="text" name="name" id="text-1" value="">
						<input type="submit" value="Start your game">
					</form>
					<?php
			}elseif(!isset($_GET['phrase'])){//newgame is set
				?>
				
				<img src="<?php echo $images[$_GET['image']];?>"/>
				<form action="" method="GET">
					<label for="phrase">Describe the image!</label>
					<input type="hidden" name="gameName" value="<?php echo $_GET['name'];?>"/>
					<input type="hidden" name="originalImage" value="<?php echo $images[$_GET['image']];?>">
					<textarea cols="40" rows="8" name="phrase" id="textarea-1"></textarea>
					<input type="submit" value="Submit">
				</form>


				<?
			}elseif(isset($_GET['phrase'])){
				$query = "INSERT INTO games 
				SET gameName='".$_GET['gameName']."',
				sequence=0,
				originalImageUrl='".$_GET['originalImage']."',
				phrase='".$_GET['phrase']."'
				";
				$result = mysqli_query($link, $query);
				printf("%s\n", mysqli_error($link)); 
				?>
				<meta http-equiv="refresh" content="0;URL='./games.php'" />
				<?php
				// while($row = mysqli_fetch_assoc($result)){
				// 	echo '<a href="./artist/'.str_replace(" ", "+",trim($row['group'])).'">';
				// //echo '<a class="albumlink" href="album.php?group='.$row['group']."&name=".$row['album'].'">';
				// 	echo $row['album'];
				// //echo '</a>';
				// 	echo '      ';

				// 	echo $row['group'];
				// 	echo '</a>';
				// 	echo "<br />";
				// }



			}
			?>

		</div><!-- /content -->


	</div><!-- /page -->

</body>
</html>