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
	
	<style>
	p#error{
		margin-top: 3.2%;
		text-align: center;
	}	
</style>
</head>

<body>
	
	<!-- the nav included via php -->
	 <?php include ("./includes/navbar.php");  ?>  
	
	
	<?php include ("./includes/contactform_validator.php"); ?>
	
	
	
	<!-- section 1 , row 1 -->
	<section id="intro-header">
		<div class="container">
			<div class="row">
				<div id="headline" class="col-12 col-md-6" data-aos="zoom-out">
					<h1 class="h4">Hello, I am</h1>
					<h2 class="h1">Ukeje Michael</h2>	
					<p>A Software Engineer</p>
<!--					<p>I am fascinated by anything that lives, and breathes  on the cyber space</p>-->
						<br />
						<button class="btn btn-warning btn-lg"><a href="#projects">View Project</a></button>
						<button class="btn btn-lg btn-outline-light">
							<a href="#contacts">Get In Touch</a>
						</button>
					</p>
				</div>
			
								
				<div class="col-12 col-sm-12">
					<a href="#projects" class="scroll-down">
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
	
	
	
	
	<section id="projects">
		<div class="container">
			<h1>Projects</h1>
			<ul class="nav nav-pills my-3" id="myTab" role="tablist">
			  <li class="nav-item">
				<a class="nav-link active" id="home-tab" data-toggle="tab" href="#all" role="tab" aria-controls="home" aria-selected="true">All</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" id="profile-tab" data-toggle="tab" href="#web" role="tab" aria-controls="profile" aria-selected="false">Web</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" id="contact-tab" data-toggle="tab" href="#django" role="tab" aria-controls="contact" aria-selected="false">Django</a>
			  </li>
				<li class="nav-item">
				<a class="nav-link" id="profile-tab" data-toggle="tab" href="#react" role="tab" aria-controls="profile" aria-selected="false">ReactJS</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" id="contact-tab" data-toggle="tab" href="#algorithm" role="tab" aria-controls="contact" aria-selected="false">Algorithm</a>
			  </li>
			</ul>
			
			
			<div class="tab-content" id="myTabContent">
			  <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="home-tab">
				<div class="row">
					  <div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
						  <img class="card-img-top img-fluid" src="images/kiki_port.jpg" alt="Card image cap">
						  <div class="card-header">
							<h5 >E-Commerce </h5>
						  </div>
						  <div class="card-body">
							<p class="card-text">An E-Commerce website built on Django for medium scale business, Utilizing django middewares.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
									<button class="btn btn-outline-light">Source Code</button>
								</span>
							</div>
						  </div>
						</div> <!-- E commerce card  -->	 
					</div>
					
					<div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
						  <img class="card-img-top img-fluid" src="images/CMForm2.png" alt="Card image cap">
						  <div class="card-header">
							<h5 >Student Class Form </h5>
						  </div>
						  <div class="card-body">
							<p class="card-text">Class form built on React using formik reusable component, validated with Yup and styled with ChakaUI.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
									<button class="btn btn-outline-light">Source Code</button>
								</span>
							</div>
						  </div>
						</div> <!-- Class Management Form card  -->
					</div>
					
					<div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
							<img class="card-img-top img-fluid" src="images/number_pyramid.png" alt="Card image cap">
						  
						  <div class="card-header">
							<h5>Numeric Pyramid Pattern</h5>
						  </div>
						  <div class="card-body">
							<p class="card-text">An algorithm that prints numbers in reverse and direct chronological pattern creating a pyramid.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
<!--									<button class="btn btn-outline-light">Source Code</button>-->
								<span class="btn btn-outline-light">Source Code</span>
								</span>
							</div>
						  </div>
						</div> <!--Number Pyramid Card -->
					</div>
					
					<div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
							<img class="card-img-top img-fluid" src="images/LottoGame.png" alt="Card image cap">
						  
						  <div class="card-header">
							<h5>Lotto Game</h5>
						  </div>
						  <div class="card-body">
							<p class="card-text">Number Lotto game built with vanilla Javascript. It incremen t/ decrement user money depending on how many correct guess.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
									<button class="btn btn-outline-light">Source Code</button>
								</span>
							</div>
						  </div>
						</div> <!-- Lotto Game Card  -->
					</div>
					
					<div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
							<img class="card-img-top img-fluid" src="images/Untitled design.jpg" alt="Card image cap">
						  
						  <div class="card-header">
							<h5>Recipe App</h5>
						  </div>
						  <div class="card-body">
							<p class="card-text">Differe3nt from your regular app, supports user blogging, authentication and allows users to upload their own recipes.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
									<button class="btn btn-outline-light">Source Code</button>
								</span>
							</div>
						  </div>
						</div> <!-- Recipe app card  -->
					</div>
					
					<div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
							<img class="card-img-top img-fluid" src="images/HeartPattern.png" alt="Card image cap">
						  
						  <div class="card-header">
							<h5>Beautiful Heart Pattern</h5>
						  </div>
						  <div class="card-body h-100">
							<p class="card-text">A simple application that print different colorful heart pattern depending on user selection between 1 - 7.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
									<button class="btn btn-outline-light">Source Code</button>
								</span>
							</div>
						  </div>
						</div> <!-- Beautiful Heart Pattern Card  -->
					</div>
					
					<!-- cards row 3 -->
					
					<div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
							<img class="card-img-top img-fluid" src="images/Untitled design.jpg" alt="Card image cap">
						  
						  <div class="card-header">
							<h5>Number Converter</h5>
						  </div>
						  <div class="card-body">
							<p class="card-text">A number converter app built on react that converts number depending on the selected choice. works for binary, hexadecimal, octal, and decimal.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
									<button class="btn btn-outline-light">Source Code</button>
								</span>
							</div>
						  </div>
						</div> <!-- Number Converter card  -->
					</div>
					
					<div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
							<img class="card-img-top img-fluid" src="images/HeartPattern.png" alt="Card image cap">
						  
						  <div class="card-header">
							<h5>File Scheduling</h5>
						  </div>
						  <div class="card-body">
							<p class="card-text">An algorithm to handles files in C. Write and read files, return the number of lines, characters and words in a file.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
									<button class="btn btn-outline-light">Source Code</button>
								</span>
							</div>
						  </div>
						</div> <!-- File Scheduling Card  -->
					</div>
					
					<div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
							<img class="card-img-top img-fluid" src="images/portfolio_port2.png" alt="Card image cap">
						  
						  <div class="card-header">
							<h5>Portfolio Website</h5>
						  </div>
						  <div class="card-body">
							<p class="card-text">A fully responsive portfolio that showcase my work and details about my software programming skills.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
									<button class="btn btn-outline-light">Github Code</button>
								</span>
							</div>
						  </div>
						</div> <!-- Portfolio Card  -->
					</div>
							
				</div>
			  	
			  </div> <!-- end of all tab -->
				
				
				
				
				
			<!-- web section tab -->
			  <div class="tab-pane fade" id="web" role="tabpanel" aria-labelledby="profile-tab">
				  <div class="row">
				  	<div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
						  <img class="card-img-top img-fluid" src="images/kiki_port.jpg" alt="Card image cap">
						  <div class="card-header">
							<h5 >E-Commerce </h5>
						  </div>
						  <div class="card-body">
							<p class="card-text">An E-Commerce website built on Django for medium scale business, Utilizing django middewares.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
									<button class="btn btn-outline-light">Source Code</button>
								</span>
							</div>
						  </div>
						</div> <!-- E commerce card  -->	 
					</div>
					  
					<div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
						  <img class="card-img-top img-fluid" src="images/CMForm2.png" alt="Card image cap">
						  <div class="card-header">
							<h5 >Student Class Form </h5>
						  </div>
						  <div class="card-body">
							<p class="card-text">Class form built on React using formik reusable component, validated with Yup and styled with ChakaUI.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
									<button class="btn btn-outline-light">Source Code</button>
								</span>
							</div>
						  </div>
						</div> <!-- Class Management Form card  -->
					</div>
					  
					 <div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
							<img class="card-img-top img-fluid" src="images/portfolio_port2.png" alt="Card image cap">
						  
						  <div class="card-header">
							<h5>Portfolio Website</h5>
						  </div>
						  <div class="card-body">
							<p class="card-text">A fully responsive portfolio that showcase my work and details about my software programming skills.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
									<button class="btn btn-outline-light">Github Code</button>
								</span>
							</div>
						  </div>
						</div> <!-- Portfolio Card  -->
					</div> 
					  
					<div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
							<img class="card-img-top img-fluid" src="images/Untitled design.jpg" alt="Card image cap">
						  
						  <div class="card-header">
							<h5>Recipe App</h5>
						  </div>
						  <div class="card-body">
							<p class="card-text">Different from your regular app, supports user blogging, authentication and allows users to upload their own recipes.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
									<button class="btn btn-outline-light">Source Code</button>
								</span>
							</div>
						  </div>
						</div> <!-- Recipe app card  -->
					</div>
					  
					<div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
							<img class="card-img-top img-fluid" src="images/Untitled design.jpg" alt="Card image cap">
						  
						  <div class="card-header">
							<h5>Number Converter</h5>
						  </div>
						  <div class="card-body">
							<p class="card-text">A number converter app built on react that converts number depending on the selected choice. works for binary, hexadecimal, octal, and decimal.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
									<button class="btn btn-outline-light">Source Code</button>
								</span>
							</div>
						  </div>
						</div> <!-- Number Converter card  -->
					</div>
					  
					
					  <div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
							<img class="card-img-top img-fluid" src="images/LottoGame.png" alt="Card image cap">
						  
						  <div class="card-header">
							<h5>Lotto Game</h5>
						  </div>
						  <div class="card-body">
							<p class="card-text">Number Lotto game built with vanilla Javascript. It incremen t/ decrement user money depending on how many correct guess.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
									<button class="btn btn-outline-light">Source Code</button>
								</span>
							</div>
						  </div>
						</div> <!-- Lotto Game Card  -->
					</div>
					  

				  </div>
			  </div>
				
				
			  <div class="tab-pane fade" id="django" role="tabpanel" aria-labelledby="contact-tab">
			  	<div class="row">
					<div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
						  <img class="card-img-top img-fluid" src="images/kiki_port.jpg" alt="Card image cap">
						  <div class="card-header">
							<h5 >E-Commerce </h5>
						  </div>
						  <div class="card-body">
							<p class="card-text">An E-Commerce website built on Django for medium scale business, Utilizing django middewares.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
									<button class="btn btn-outline-light">Source Code</button>
								</span>
							</div>
						  </div>
						</div> <!-- E commerce card  -->	 
					</div>
				  
				    <div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
							<img class="card-img-top img-fluid" src="images/Untitled design.jpg" alt="Card image cap">
						  
						  <div class="card-header">
							<h5>Recipe App</h5>
						  </div>
						  <div class="card-body">
							<p class="card-text">Differe3nt from your regular app, supports user blogging, authentication and allows users to upload their own recipes.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
									<button class="btn btn-outline-light">Source Code</button>
								</span>
							</div>
						  </div>
						</div> <!-- Recipe app card  -->
					</div>  
				</div>
			  </div> <!-- end of django tab section -->
				
			<div class="tab-pane fade" id="react" role="tabpanel" aria-labelledby="contact-tab">
				<div class="row">
					<div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
							<img class="card-img-top img-fluid" src="images/Untitled design.jpg" alt="Card image cap">
						  
						  <div class="card-header">
							<h5>Number Converter</h5>
						  </div>
						  <div class="card-body">
							<p class="card-text">A number converter app built on react that converts number depending on the selected choice. works for binary, hexadecimal, octal, and decimal.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
									<button class="btn btn-outline-light">Source Code</button>
								</span>
							</div>
						  </div>
						</div> <!-- Number Converter card  -->
					</div>
				
					<div class="col col-12 col-md-6 col-lg-4 ">
							<div class="card">
							  <img class="card-img-top img-fluid" src="images/CMForm2.png" alt="Card image cap">
							  <div class="card-header">
								<h5 >Student Class Form </h5>
							  </div>
							  <div class="card-body">
								<p class="card-text">Class form built on React using formik reusable component, validated with Yup and styled with ChakaUI.</p>
							  </div>
							  <div class="card-footer">
								<div class="d-flex flex-row justify-content-between">
									<span>
										<button class="btn btn-outline-warning">Live Preview</button>
									</span>
									<span>
										<button class="btn btn-outline-light">Source Code</button>
									</span>
								</div>
							  </div>
							</div> <!-- Class Management Form card  -->
						</div>
				
						<div class="col col-12 col-md-6 col-lg-4 ">
							<div class="card">
							  <img class="card-img-top img-fluid" src="images/LottoGame.png" alt="Card image cap">

							  <div class="card-header">
								<h5>Lotto Game</h5>
							  </div>
							  <div class="card-body">
								<p class="card-text">Number Lotto game built with vanilla Javascript. It incremen t/ decrement user money depending on how many correct guess.</p>
							  </div>
							  <div class="card-footer">
								<div class="d-flex flex-row justify-content-between">
									<span>
										<button class="btn btn-outline-warning">Live Preview</button>
									</span>
									<span>
										<button class="btn btn-outline-light">Source Code</button>
									</span>
								</div>
							  </div>
						</div> <!-- Lotto Game Card  -->
					</div>
				</div>
			</div> <!-- end of react tab section -->
				
			<div class="tab-pane fade" id="algorithm" role="tabpanel" aria-labelledby="contact-tab">
				<div class="row">
					<div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
							<img class="card-img-top img-fluid" src="images/number_pyramid.png" alt="Card image cap">
						  
						  <div class="card-header">
							<h5>Numeric Pyramid Pattern</h5>
						  </div>
						  <div class="card-body">
							<p class="card-text">An algorithm that prints numbers in reverse and direct chronological pattern creating a pyramid.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
<!--									<button class="btn btn-outline-light">Source Code</button>-->
								<span class="btn btn-outline-light">Source Code</span>
								</span>
							</div>
						  </div>
						</div> <!--Number Pyramid Card -->
					</div>
					
					<div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
							<img class="card-img-top img-fluid" src="images/HeartPattern.png" alt="Card image cap">
						  
						  <div class="card-header">
							<h5>Beautiful Heart Pattern</h5>
						  </div>
						  <div class="card-body h-100">
							<p class="card-text">A simple application that print different colorful heart pattern depending on user selection between 1 - 7.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
									<button class="btn btn-outline-light">Source Code</button>
								</span>
							</div>
						  </div>
						</div> <!-- Beautiful Heart Pattern Card  -->
					</div>
					
					<div class="col col-12 col-md-6 col-lg-4 ">
						<div class="card">
							<img class="card-img-top img-fluid" src="images/HeartPattern.png" alt="Card image cap">
						  
						  <div class="card-header">
							<h5>File Scheduling</h5>
						  </div>
						  <div class="card-body">
							<p class="card-text">An algorithm to handles files in C. Write and read files, return the number of lines, characters and words in a file.</p>
						  </div>
						  <div class="card-footer">
							<div class="d-flex flex-row justify-content-between">
								<span>
									<button class="btn btn-outline-warning">Live Preview</button>
								</span>
								<span>
									<button class="btn btn-outline-light">Source Code</button>
								</span>
							</div>
						  </div>
						</div> <!-- File Scheduling Card  -->
					</div>
				</div> <!-- end of algorithm tab section -->
			
				
		</div>
	</section>
		
	
	
	
	
	
<!-- section 3 row 3 and row 4 -->
	<section id="about">
		<div class="container">
			<div class="row">
				
				<div class="col-12 col-sm-12 col-md-12">
					<h1>ABOUT ME</h1>
				</div>
				
				<div class="col-12 col-sm-12 col-md-6" data-aos="fade-right">
					<img src="images/imgaboutme3.jpg" alt="about image placeholder" class="img-fluid" />
				</div>
				
				<div class="col-12 col-sm-12 col-md-6" data-aos="zoom-in">
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
	
	<section id="skills">
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
					<div class="col col-12 col-md-6 col-lg-4  my-5">
					  <div class="skill h-100">
						  <div class="icon-align">
							  <i class="icofont icofont-4x icofont-data"></i>
						  </div>  
						
						<h2>BackEnd</h2>
						<ul>
							<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<p>Python - Django, Flask, Pandas</p>
							</li>  
							<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<p>JavaScript - NodeJS, TypeScript</p></li> 
							<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<p>PHP, Laravel</p>
							</li> 
							<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<p>C Language</p>
						 	</li> 

							<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<p>Google Cloud Platform - (Firebase, Firestore)</p>
							</li> 
							<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<p>AWS - (S3, Lambda)</p>
							</li> 
							<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<p>Heroku</p>
							</li>
							<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<p>Databases - MySql, PostgreSql, MongoDB</p>
							</li>
							
						</ul>
					  </div>
					  
				  	</div>
				  <div class="col col-12 col-md-6 col-lg-4 my-5">
					 <div class="skill h-100"> 
						 <div class="icon-align">
						 	<i class="icofont icofont-4x icofont-code"></i>
						 </div>
					 	
					    <h2>FrontEnd</h2>
						 <ul>
						 	<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<p>Javascript / ReactJS / jQuery</p>
							 </li>
							 <li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<p>HTML5, CSS3</p>
							 </li>
							 <li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<p>Bootstrap</p>
							 </li>
							 <li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<p>Materialize CSS</p>
							</li>
							 <li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<p>Wordpress</p>
							</li>
						 </ul>
					 </div>	
					  
				  </div>
				  <div class="col col-12 col-md-6 col-lg-4 my-5 mx-auto">
					  <div class="skill h-100">
					  	<div class="icon-align">
							<i class="icofont icofont-4x icofont-tools-alt-2"></i>
						</div>
					    <h2>Others</h2>
						  <ul>
						  	<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<p>Git and Github</p>
							</li>
							<li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<p>Rest API</p>
							</li>
							 <li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<p>Google Classroom, Google Doc </p>
							 </li>
							  <li>
								<i class="icofont icofont-tick-mark pr-2"></i>
								<p>Microsoft Office</p>
							 </li>
						  </ul>
					  </div>
					  
				  </div>		  
			  	  
			  </div>
			</div>
			  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">bullshit 2</div>
			
		</div>
	</section>
		
		<section id="contacts">
			<div class="container">
				<h1>Contact</h1>
				
				<div class="row">
					<div class="col col-12 col-md-6 social_contact">
					
					</div>
					
					<div class="col col-12 col-md-6">
						<p id="error" class="text-danger"><?php if (!empty($error)) echo $error; if($success) echo $success_message;  ?></p>
						<form class="form-horizontal" id="contact_form" method="post" action="<?php $_SERVER['REQUEST_URI'] ?>">
<!--							htmlspecialchars($_SERVER['REQUEST_URI'])-->
			
					<div class="form-group">
						<input class="form-control" type="email" id="contact_email" name="contact_email" value="<?php if(isset($email)) echo $email; ?>" maxlength="30"  required />
						<label for="Email">Email address</label>
					</div>
					<div class="form-group">
						<input class="form-control" type="text" id="contact_topic" name="contact_topic" value="<?php if(isset($topic)) echo $topic; ?>" maxlength="50" required />
						<label for="Topic">Subject</label>
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="3" id="msg" name="msg"  maxlength="150" required><?php if(isset($message)) echo $message; ?></textarea>
						<label for="Message">Your message</label>
					</div>
						<div>
							<input type="submit" class="btn btn-outline-secondary btn-lg btn-block" name="submit" id="submit" value="Send Message" />
						</div>

				</form>
					</div>
				</div>
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
	<!-- prevents user from refreshing and resubmitting form after submitted -->
	<script>
			if (window.history.replaceState){
				window.history.replaceState(null, null, window.location.href);
			}
	</script>
</body>
</html>
