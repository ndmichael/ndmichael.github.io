<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My Gallery</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- bootstrap and other dependecies referenced here -->
	<?php include ("./includes/ref_header.php"); ?>
	<link rel="stylesheet" href="css/gallerycss.css" />
</head>

<body>
		<!-- shared navbar using php include -->
	<?php include ("./includes/navbar.php");  ?> 
	
	<section class="container" id="gallery">
		<div class="row margin_setting">
			<div class="col-sm-2 col-xs-4">
				<p><img src="images/gallery/img1.png" class="img-responsive img-thumbnail" /></p>
			</div>
			<div class="col-sm-2 col-xs-4">
				<p><img src="images/codebg4.jpg" class="img-responsive img-thumbnail" /></p>
			</div>
			<div class="col-sm-2 col-xs-4">
				<p><img src="images/codebg3.jpg" class="img-responsive img-thumbnail" /></p>
			</div>
			<div class="col-sm-2 col-xs-4">
				<p><img src="images/gallery/img6.png" class="img-responsive img-thumbnail" /></p>
			</div>
			<div class="col-sm-2 col-xs-4">
				<p><img src="images/gallery/img55.png" class="img-responsive img-thumbnail" /></p>
			</div>
			<div class="col-sm-2 col-xs-4">
				<p><img src="images/gallery/img3.png" class="img-responsive img-thumbnail" /></p>
			</div>
			<div class="col-sm-2 col-xs-4">
				<p><img src="images/gallery/Which-is-better-A-computer.jpg" class="img-responsive img-thumbnail" /></p>
			</div>
			<div class="col-sm-2 col-xs-4">
				<p><img src="images/gallery/Screen-Shot-2017-07-28-at-9.17.04-AM.png" class="img-responsive img-thumbnail" /></p>
			</div>
			<div class="col-sm-2 col-xs-4">
				<p><img src="images/gallery/mg5.png" class="img-responsive img-thumbnail" /></p>
			</div>
			<div class="col-sm-2 col-xs-4">
				<p><img src="images/codebg5.jpg" class="img-responsive img-thumbnail" /></p>
			</div>
			<div class="col-sm-2 col-xs-4">
				<p><img src="images/codebg1.jpg" class="img-responsive img-thumbnail" /></p>
			</div>
			<div class="col-sm-2 col-xs-4">
				<p><img src="images/codebg4.jpg" class="img-responsive img-thumbnail" /></p>
			</div>
		</div>
	</section>
	
	
	<!-- referencing the codeja-vu footer -->
	<?php include("./includes/footer.php") ?>
	
	<!-- referencing bootstrap scripts dependencies -->	
	<?php include("./includes/ref_footer.php") ?>
</body>
</html>
