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
					<h2 class="h1">Ukeje Michael</h2>	
					<p>A Software Engineer</p>
					
						<button class="btn btn-primary btn-lg">See Projects</button>
						<button class="btn btn-lg btn-outline-light">Hire Me</button>
					</p>
				</div>
			
								
				<div class="col-12 col-sm-12">
					<a href="#" class="scroll-down">
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
					<h3>My name is Michael</h3>
					<p>
						
						I am interested in anything that breath, and live on the cyber space.
						I am a Software Engineer, Full-Stack Developer, and Coding instructor. A computer science graduate with first class honors. <br /> <br />
						
						I also hold a Diploma in Information Technology with a Distinction from Informatics Academics Singapore.  
						My previous experience includes writing dynamic, responsive Websites and Desktop Applications. 
						
<!--
						I am a Software Engineer, Full-Stack Developer, and Coding instructor, 
						who is interested in anything that breath, and live on the cyber space.
						A computer science graduate with first class honors. <br /> <br />
						I also hold a Diploma in Information Technology with a Distinction from Informatics Academics Singapore.  
						My previous experience includes writing dynamic, responsive Websites and Desktop Applications. 
-->
						
					</p>
				</div>
				
			</div> <!-- end of row 3 -->			
		</div>
	</section>
	
	<section id="skill">
		<div class="container">
			<h1>Skills</h1>
			<nav>
			  <div class="nav nav-tabs" id="nav-tab" role="tablist">
				<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Professional </a>
				<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Personnal</a>
			  </div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
			  <div class="ntab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				  <div class="row">
					<div class="col col-12 col-sm-4">
					  <div class="skills">
						<i class="icofont icofont-4x icofont-data"></i>
						<h2>BackEnd</h2>
						<ul>
							<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<span>Python - Django, Flask, Pandas</span>
							</li>  
							<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<span>JavaScript - NodeJS, TypeScript</span></li> 
							<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<span>PHP, Laravel</span>
							</li> 
							<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<span>C Language</span>
						 	</li> 

							<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<span>Google Cloud Platform - (Firebase, Firestore)</span>
							</li> 
							<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<span>AWS - (S3, Lambda)</span>
							</li> 
							<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<span>Heroku</span>
							</li>
							<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<span>Databases - MySql, PostgreSql, MongoDB</span>
							</li>
							
						</ul>
					  </div>
					  
				  	</div>
				  <div class="col col-12 col-sm-4" >
					 <div class="skills">
					 	<i class="icofont icofont-4x icofont-code"></i>
					    <h2>FrontEnd</h2>
						 <ul>
						 	<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<span>Javascript / ReactJS / jQuery</span>
							 </li>
							 <li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<span>HTML5, CSS3</span>
							 </li>
							 <li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<span>Bootstrap</span>
							 </li>
							 <li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<span>Materialize CSS</span>
							</li>
							 <li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<span>Wordpress</span>
							</li>
						 </ul>
					 </div>	
					  
				  </div>
				  <div class=" col col-12 col-sm-4">
					  <div class="skills w-100">
					  	<i class="icofont icofont-4x icofont-tools-alt-2"></i>
					    <h2>Others</h2>
						  <ul>
						  	<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<span>Git and Github</span>
							</li>
							<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<span>Rest API</span>
							</li>
							 <li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<span>Google Classroom, Google Doc </span>
							 </li>
							  <li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<span>Microsoft Office</span>
							 </li>
						  </ul>
					  </div>
					  
				  </div>
			  	  
			  </div>
			</div>
			  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">bullshit 2</div>
			
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
