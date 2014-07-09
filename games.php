
<?php
require("header.php")
?>
<body>
	<style type="text/css">
		img{
			width: 100%;
			border:thin black solid;
			margin: 0px auto;
		}
		.game{
			display:inline-block;
			height:300px;
			width:300px;
			border:thick green dashed;

		}
		.ui-content{
			padding: 0px;
		}
		h1{
			text-align: left;
		}
		a{
			text-decoration: none;
			color:yellow;
		}
		p{
			font-style: italic;
			color:#222;
			font-size: 35px;

		}

	</style>
	<script>
		$(document).ready(function()
		{
			$(".alt:even").css("background-color", "#BBB");
		});
	</script>
	<div data-add-back-btn="true" data-role="page">


		<div data-add-back-btn="true" data-role="header" >
			<a href="#" data-rel="back" data-icon="arrow-l">Back</a>
			<h1>CommuniDraw!</h1>
			<a href="http://tristansokol.com/hackathon/allgames.php" data-icon="check"  data-ajax="false">All Games</a>
		</div><!-- /header -->

		<div data-role="content" style="text-align:center">	
			<?php
			$query = "SELECT * FROM games g1 JOIN (SELECT gameName, MAX(sequence) seq FROM games GROUP BY gameName ORDER BY sequence DESC) temp ON g1.gameName = temp.gameName WHERE g1.sequence = temp.seq
			";
			$result = mysqli_query($link, $query);
			printf("%s\n", mysqli_error($link)); 
			echo("<div id=content>");

			while($row = mysqli_fetch_assoc($result)){

				if($row['imageUrl']!==''){
					echo "<div class=alt><a href=describe.php?name=".$row['gameName']."&num=".$row['sequence'].' data-ajax="false">';
					echo "<h1>".$row['gameName']."</h1>";
					echo '<img src="'.$row['imageUrl'].'"/ style="width:80%;">';
				}
				if($row['phrase']!==''){
					echo "<div class=alt><a href=draw.php?name=".$row['gameName']."&num=".$row['sequence'].'&phrase='.str_replace(" ", "+", $row['phrase']).' data-ajax="false">';
					echo "<h1>".$row['gameName']."</h1>";
					echo '<p>'.$row['phrase'].'</p>';
				}
				echo "</a></div>";
			}
			echo('</div>');
			?>
			<a href="newgame.php" data-role="button" data-transition="fade"  data-ajax="false">New Game</a>

		</div><!-- /content -->


	</div><!-- /page -->

</body>
</html>