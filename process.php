<?php
//connect to the MYSQL database
$link = mysqli_connect("%%Your Server%%", "%%Your Table%%", "%%Password%%", "%%Username%%");

/* check connection */
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}
$num = $_POST['num']+1;

if($_POST['imageData']!==''&&$_POST['imageData']!==NULL){
	$data = substr($_POST['imageData'], strpos($_POST['imageData'], ",") + 1);
	$decodedData = base64_decode($data);
	$filename = "images/".$_POST['gameName'].$num.".png";
	$fp = fopen($filename, 'wb');
	fwrite($fp, $decodedData);
	fclose($fp);
}

$query = "INSERT INTO games 
SET gameName='".$_POST['gameName']."',
sequence=".$num.",
phrase='".$_POST['phrase']."',
imageUrl='".$filename."'
ON DUPLICATE KEY UPDATE
phrase='".$_POST['phrase']."',
imageUrl='".$filename."'
";
$result = mysqli_query($link, $query);
printf("%s\n", mysqli_error($link)); 

echo "/hackathon/games.php";
?>
