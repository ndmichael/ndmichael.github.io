<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Code-Folio</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- bootstrap and other dependecies referenced here -->
	<?php include ("./includes/ref_header.php"); ?>
	<link rel="stylesheet" href="css/portfoliocss.css" />
	
</head>

<body>
	<!-- shared navbar using php include -->
	<?php include ("./includes/navbar.php");  ?> 

	<section id="port-images">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-xs-6">

					<figure  class="parent" >
							<div class="hanimated">
								<h1>LOTTO GAME</h1>
								<p>html5/css/JS <br />
									Practicing DOM manipulation with native JavaScript 
								</p>
							</div>
						<img src="images/portfolio/lotto_img.jpg" alt="Lotto Game image" class="img-responsive" />
					</figure>

				</div>
				<div class="col-sm-3 col-xs-6 adjust-img">
					
					<figure class="parent">
							<div class="hanimated">
								<h1>my portfolio</h1>
								<p>Portfolio webapp built from the scratch using<br /><strong>HTML5/CSS3/JS/PHP</strong></p>
							</div>	
						<img src="images/Screenshot_for_portfolio.jpg" alt="Lotto Game image" class="img-responsive" />
					</figure>
				</div>
				<div class="col-sm-3 col-xs-6">

					<figure class="parent">
							<div class="hanimated parent">
								<h1>Complex Pattern</h1>
								<p>A complex pattern written on <br /><strong>PYTHON</strong></p>
							
							</div>
						<p><img src="images/portfolio/complex_img.png" alt="Lotto Game image" class="img-responsive" /></p>
					</figure>
				</div>
				<div class="col-sm-3 col-xs-6">

					<figure class="parent">
							<div class="hanimated">
								<h1>Heart Pattern</h1>
								<p><strong>PYTHON</strong><br />A section practice in the book <q>Automating boring stuff in python</q> turns out this way<br /></p>
							</div>
						<img src="images/portfolio/heartpattern.png" alt="Heart Pattern image" class="img-responsive" />
					</figure>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 col-xs-6">

					<figure class="parent">
							<div class="hanimated">
								<h1>A Recipe App</h1>
								A reverse blogging, user profiling and Recipe app built on
								<p><strong>PYTHON and DJANGO</strong></p>
							</div>
						<img src="images/Screenshot_for_Cookella.jpg" alt="Gauss formula image" class="img-responsive" />
					</figure>
				</div>
				<div class="col-sm-3 col-xs-6">

					<figure class="parent">
							<div class="hanimated">
								<h1>DATA ANALysis</h1>
								<p><strong>PYTHON</strong> <br />
									Data Analysis without any library.
								</p>
							</div>
						<img src="images/portfolio/data_analysis.png" alt="data_analysis image" class="img-responsive" />
					</figure>
				</div>
				<div class="col-sm-3 col-xs-6">

					<figure class="parent">
							<div class="hanimated">
								<h1>word to binary</h1>
								<p><b>PYTHON </b><br />
								First moderate code i wrote while starting on sololearn community.</p>
							</div>
						<img src="images/portfolio/binary-img.png" alt="Lotto Game image" class="img-responsive" />
					</figure>
				</div>
				<div class="col-sm-3 col-xs-6">

					<figure class="parent">
							<div class="hanimated">
								<h1>CSS animation Play</h1>
								<p><strong>HTML5/CSS</strong> <br />
									Showing appreciation to sololearn.
								</p>
							</div>
						<img src="images/portfolio/thankyousl.png" alt="thank you" class="img-responsive" />
					</figure>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4"></div>
				<div class="col-sm-4"></div>
			</div>
		</div>
	</section>
	
	<!-- referencing the codeja-vu footer -->
	<?php include("./includes/footer.php") ?>
	
	<!-- referencing bootstrap scripts dependencies -->	
	<?php include("./includes/ref_footer.php") ?>
</body>
</html>
