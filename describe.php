<?php
require("header.php");
?>

<script>
	$( document ).ready(function() {
		$( "#save" ).click(function() {
			$.post("process.php", {
				phrase : $("#phrase").val(),
				gameName : '<?php echo $_GET['name'];?>',
				num : <?php echo $_GET['num'];?>,
			}, function(data) {
				window.location = data;
			});
		});
	});
</script>
<style>
	img{
		width: 90%;
	}
</style>
<body> 

	<div data-add-back-btn="true" data-role="page">

		<div data-add-back-btn="true" data-role="header" >
			<a href="#" data-rel="back" data-icon="arrow-l">Back</a>
			<h1>CommuniDraw!</h1>
		</div><!-- /header -->

		<div data-role="content" style="text-align:center">	
			<?php
			$query = "SELECT * FROM games WHERE gameName = '".mysqli_escape_string($link,$_GET['name'])."' AND sequence = ".mysqli_escape_string($link,$_GET['num'])."
			";
			$result = mysqli_query($link, $query);
			printf("%s\n", mysqli_error($link)); 
			$row = mysqli_fetch_assoc($result)
			?>
			<img src="<?php echo $row['imageUrl'];?>"/>
			<label for="phrase">Describe the image!</label>
			<textarea cols="40" rows="8" id="phrase"></textarea>
			<input type="submit" id="save" value="submit">
		</div><!-- /content -->


	</div><!-- /page -->

</body>
</html>