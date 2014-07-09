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

		<div data-role="collapsible-set" data-theme="c" data-content-theme="d" data-inset="false">
				<div data-role="collapsible">
					<h3>Section 1</h3>
					<p>I'm the collapsible content for section 1</p>
				</div>
				<div data-role="collapsible">
					<h3>Section 2</h3>
					<p>I'm the collapsible content for section 2</p>
				</div>
				<div data-role="collapsible">
					<h3>Section 3</h3>
					<p>I'm the collapsible content for section 3</p>
				</div>
			</div>
		</div><!-- /content -->


	</div><!-- /page -->

</body>
</html>