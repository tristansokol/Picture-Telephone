
<?php
require("header.php")
?>
<body>
	<style type="text/css">
		img{
			width: 20%;
			border:thin black solid;
			vertical-align: middle;
		}
		.game{
			display:inline-block;
			height:300px;
			border:thick green dashed;

		}
		.arrow{
			border:none;
			margin: 0px -40px 0px -40px;
		}
		.phrase{
			font-style: italic;
			color:#222;
			font-size: 25px;
		}
	</style>

	<div data-add-back-btn="true" data-role="page">


		<div data-add-back-btn="true" data-role="header" >
			<a href="#" data-rel="back" data-icon="arrow-l">Back</a>
			<h1>CommuniDraw!</h1>
		</div><!-- /header -->

		<div data-role="content">
			<?php
			$query = "SELECT * FROM games ORDER BY gameName, sequence
			";
			$result = mysqli_query($link, $query);
			printf("%s\n", mysqli_error($link)); 
			$previousname = '';
			while($row = mysqli_fetch_assoc($result)){
				$name = $row['gameName'];
				if($name!==$previousname){
					echo "<h1>".$row['gameName']."</h1>";
					echo '<img src="'.$row['originalImageUrl'].'"/>';
					echo('<img class="arrow" src="http://upload.wikimedia.org/wikipedia/commons/1/12/Right_arrow.svg" height=40 />');

				}
				echo '';
				if($row['imageUrl']!==''){
					echo '<img src="'.$row['imageUrl'].'"/> ';
					echo('<img class="arrow" src="http://upload.wikimedia.org/wikipedia/commons/1/12/Right_arrow.svg" height=40 />');
				}
				if($row['phrase']!==''){
					echo '<span class="phrase">'.$row['phrase'].'</span>';
					echo('<img class="arrow" src="http://upload.wikimedia.org/wikipedia/commons/1/12/Right_arrow.svg" height=40 />');

				}
				$previousname=$name;
			}

			?>

		</div><!-- /content -->


	</div><!-- /page -->

</body>
</html>