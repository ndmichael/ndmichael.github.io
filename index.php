<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no" >
<!-- bootstrap and other dependecies referenced here -->
<?php include ("./includes/ref_header.php"); ?>
	
<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.css" />
<link rel="stylesheet" href="bootstrap-4.4.1-dist/icofont/icofont.min.css" />
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="css/javubase.css" />
<link rel="stylesheet" href="css/navbar.css" />	
<link rel="stylesheet" href="css/footer.css" />
</head>

<body>
	
	<!-- the nav included via php -->
	 <?php include ("./includes/navbar.php");  ?> 
	
	
	
	<!-- section 1 , row 1 -->
	<section id="intro-header">
		<div class="container">
			<div class="row">
				<div id="headline" class="col-12 col-md-6" data-aos="zoom-out">
					<h1 class="h4">Hello, I am</h1>
					<h2 class="h1">Ukeje Ndubuisi</h2>	
					<p>A Software Engineer</p>
					
						<button class="btn btn-primary btn-lg">See Projects</button>
						<button class="btn btn-lg btn-outline-light">Hire Me</button>
					</p>
				</div>
			
								
				<div class="col-12 col-sm-12">
					<a href="#">
						<div class="mouse">
							<span></span>
						</div>
						<div class="arrow">
							<span></span>
						</div>
					</a>
				</div>
			
			</div>
				
		</div> <!-- end of the container -->
	</section>
	
<!-- section 3 row 3 and row 4 -->
	<section id="about">
		<div class="container">
			<div class="row">
				
				<div class="col-12 col-sm-12">
					<h1>ABOUT ME</h1>
				</div>
				
				<div class="col-12 col-sm-6" data-aos="fade-right">
					<img src="images/imgaboutme3.jpg" alt="about image placeholder" class="img-fluid" />
				</div>
				
				<div class="col-12 col-sm-6" data-aos="zoom-in">
					<h3>My name is Michael Ukeje</h3>
					<p>
						I am a Software Engineer, Full-Stack Developer, and Coding instructor, 
						who is interested with anything that breath, and live on the cyber space.
						I am a computer science graduate with first class honors from the prestigious University Haute Ecoles de Gestion et de Technologie (HEGT). <br /> <br />
						I also hold a Diploma in Information Technology with a Distinction from Informatics Academics Singapore.  
						My previous experience includes writing dynamic, responsive Websites and Desktop Applications. 
						
					</p>
				</div>
				
			</div> <!-- end of row 3 -->			
		</div>
	</section>
	

		
	
	
	
<!-- referencing the codeja-vu footer -->
<?php include("./includes/footer.php"); ?> 
<!-- referencing bootstrap scripts dependencies -->	
<?php include("./includes/ref_footer.php"); ?>
	 <script>
		 	window.onload = function(){	
			var colBtn = document.getElementById("colBtn");
			function mySimpleFunc(){
				
				if (colBtn.value == "Show All"){
					colBtn.value = "Show less";
				}else{
					colBtn.value = "Show All";
				}
			}
		colBtn.addEventListener('click', mySimpleFunc);	
		
		}	


  	</script>	
</body>
</html>
