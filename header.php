
<?php
//connect to the MYSQL database
$link = mysqli_connect("%%Your Server%%", "%%Your Table%%", "%%Password%%", "%%Username%%");

/* check connection */
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}
$images = array("http://api.pearson.com/dk/v1/images/3z1eatzhFCXBtZ?size=iphone",
	"http://api.pearson.com/dk/v1/images/JqhjxGasg2kRdk?size=iphone",
	"http://api.pearson.com/dk/v1/images/8qrm5c3A6Frht7?size=iphone",
	"http://api.pearson.com/dk/v1/images/KnBhg7wHa9K1JW?size=iphone",
	"http://api.pearson.com/dk/v1/images/ZGA52zcv98dytB?size=iphone",
	"http://api.pearson.com/dk/v1/images/W7S9Xvh2YXqA3J?size=iphone",
	"http://api.pearson.com/dk/v1/images/5nk9YtK0NCDF3D?size=iphone",
	"http://api.pearson.com/dk/v1/images/DyjbPgApQ75Ers?size=iphone",
	"http://api.pearson.com/dk/v1/images/PJWNfVQScBKDDS?size=iphone",
	"http://api.pearson.com/dk/v1/images/EqK6Vht2sCT7DS?size=iphone",
	"http://api.pearson.com/dk/v1/images/GG9hY52jncgWKb?size=iphone",
	"http://api.pearson.com/dk/v1/images/GkYcwf3SBhyDjs?size=iphone",
	"http://api.pearson.com/dk/v1/images/Xe6ryFnXaeN2yn?size=iphone",
	"http://api.pearson.com/dk/v1/images/1nZZjRj0xa223k?size=iphone",
	"http://api.pearson.com/dk/v1/images/MX8jZGN0a1Q55k?size=iphone",
	"http://api.pearson.com/dk/v1/images/HpV2ZKr385CkCh?size=iphone",
	"http://api.pearson.com/dk/v1/images/NJhEStF14ByBrK?size=iphone",
	"http://api.pearson.com/dk/v1/images/67eRbyRwfRNMtV?size=iphone",
	"http://api.pearson.com/dk/v1/images/R6ytndGTcf1aws?size=iphone",
	"http://api.pearson.com/dk/v1/images/WgzHS6Rz8QKK9S?size=iphone",
	"http://api.pearson.com/dk/v1/images/12DMmNMYT5TW4V?size=iphone",
	"http://api.pearson.com/dk/v1/images/9qgrK12RQRx2gs?size=iphone",
	"http://api.pearson.com/dk/v1/images/NzbbKkhStsNsVq?size=iphone",
	"http://api.pearson.com/dk/v1/images/EkCF7aznZyTezP?size=iphone",
	"http://api.pearson.com/dk/v1/images/BATmQK4SmhrEHP?size=iphone",
	"http://api.pearson.com/dk/v1/images/FWPBnfE6sNbGEh?size=iphone",
	"http://api.pearson.com/dk/v1/images/FhJsramZxzWAKk?size=iphone",
	"http://api.pearson.com/dk/v1/images/17FdkmWs6p8y9q?size=iphone",
	"http://api.pearson.com/dk/v1/images/KrP1svBGnMhpgh?size=iphone",
	"http://api.pearson.com/dk/v1/images/bHepFhCqrwccPj?size=iphone",
	"http://api.pearson.com/dk/v1/images/c0kgjwA4MWakjt?size=iphone",
	"http://api.pearson.com/dk/v1/images/aYgsswGWkns8Xr?size=iphone",
	"http://api.pearson.com/dk/v1/images/CsxeBKgqET45YV?size=iphone");
	?>

	<!DOCTYPE html> 
	<html> 
	<head> 
		<title>TringTring</title> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
	</head> 
