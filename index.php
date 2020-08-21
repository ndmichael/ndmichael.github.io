<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no" >
<!-- bootstrap and other dependecies referenced here -->
<?php include ("./includes/ref_header.php"); ?>
</head>

<body>
	
	<!-- the nav included via php -->
	 <?php include ("./includes/navbar.php");  ?> 
	
	
	
	<!-- section 1 , row 1 -->
	<section id="intro-header">
		<div class="container">
				<div id="headline" class="col-sm-6" data-aos="zoom-out">
					<h1 class="h4">Hello, I am</h1>
					<h2 class="h1">Ukeje Ndubuisi</h2>	
					<p>A Software Engineer</p>
					
						<span><button class="btn btn-warning btn-lg">Projects</button></span>
						<span><button class="btn btn-success btn-lg">Hire Me</button></span>
					</p>
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
				
				<div class="col-sm-6" data-aos="fade-right">
					<img src="images/imgaboutme3.jpg" alt="about image placeholder" class="img-responsive" />
				</div>
				
				<div class="col-sm-6" data-aos="zoom-in">
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
	

		<section class="coding container" id="coding">
		<h1>Top 3 Software Development Methodologies</h1>
		<div class="row">
			<div class="col-sm-4">
				<div class="col-sm-12 code_principles ">
					<img src="images/waterfall1.png" class="img-responsive img-thumbnail"/></p>
					<h2>WaterFall Model</h2>
					<p>
						In computer software development waterfall model is the sequential / linear process of developing software. Each step must be followed and none skipped because each step acts as a reference or input for the next step... 

					</p>
					<p class="align"><a href="tabs_model.php">
					<input type="button" class="btn btn-group-lg btn-success" value="read more" /></a>
					</p>
				</div>

			</div>
			<div class="col-sm-4">
				<div class="col-sm-12 code_principles">
					<img src="images/agile2.png" class="img-responsive img-thumbnail"/>
					<h2>Agile Model</h2>

					<p>
						Agile Software Development is based on iterative development, 
						where each release contains a new feature(s). 
						the requirements are broken down into many small parts that can be incrementally developed...
					</p>
					<p class="align">
						<a href="tabs_model.php">
							<input type="button" class="btn btn-group-lg btn-success" value="read more" />
						</a> 
					</p>
					</div> <!-- end of inner columns -->
				</div>
			<div class="col-sm-4">
				<div class="col-sm-12 code_principles">
					<img src="images/devOps2.jpg" class="img-responsive img-thumbnail"/>
					<h2>DevOps</h2>
					<p>
						DevOps evolves from Agile model, its safe to say DevOps is an offspring from Agile methodology.
						In devOps operator and Development goes hand in hand.
					</p>
					<p class="align">
						<a href="tabs_model.php">
							<input type="button" class="btn btn-group-lg btn-success" value="read more" />
						</a> 
					</p>
				</div>

			</div>	
		</div>
	
	</section> <!-- end of section -->
	
	<section id="skills">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="text-center">
						Some Skills and Frameworks
					</h2>
					<p class="text-center">My top programming languages and Frameworks/CMS </p>
				</div>		
			</div> <!-- end of row -->
			
			<!-- row 6, span 3 rows -->
			<div class="row">
				<div class="c col-sm-4 col-xs-12" >
					<div class="skill">
						<p data-aos="zoom-in"><img src="images/python_logo.png" class="img-circle img-responsive" alt="python logo"/></p> 
						<hr />
						<h3>Python</h3>
						<p>Python is a interpreted high level programming language. It can be used in different fields in computer programming.
						ie: data analysis and web developement.</p>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12" >
					<div class="skill">
						<p data-aos="zoom-in"><img src="images/js1.png" class="img-circle img-responsive" alt="javascript logo" /></p> <hr />
						<h3 class="js">JavaScript</h3>
						<p>JS a core library of the world wide web; It's a client side language but can also be used for programming
						backend ie: node.js</p>
					</div>
				</div>

				<div class="col-sm-4 col-xs-12">
					<div class="skill text-center">
						<p data-aos="zoom-in"><img src="images/php1.png" class="img-circle img-responsive" alt="php logo"/></p>
						<hr />
						<h3 class="php">PHP</h3>
						<p>PHP is a popular scripting language. Its the most used scripting langauge for backend programming.
						it powers about 75% of the web pages online.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div class="skill">
						<p data-aos="zoom-in-down"><img src="images/Optimized-html53.png" class="img-circle img-responsive" alt="css3/html5 logo" /> </p> 
						<hr />
						<h3>HTML5 &amp; CSS3</h3>
						<p>HTML 5 and CSS3 is the latest version of html web develpment. Its allows various animations.</p>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="skill">
						<p data-aos="zoom-in-down"><img src="images/django.png" class="img-circle img-responsive" alt="dJango logo" /></p> 
						<hr />
						<h4 class="django">dJango &amp; tKinter</h4>
						<p>Django a Python framework use for web app development.
						Tkinter is a python library for GUI application development.</p>
					</div>
				</div>

				<div class="col-sm-4 col-xs-12">
					<div class="skill">
						<p data-aos="zoom-in-down"><img src="images/jquery_img.png" class="img-circle img-responsive" alt=" " /> </p>
						<hr />
						<h3 class="jQuery">jQuery &amp; React</h3>
						<p>jQuery is a javascript library that simplifies DOM tree traversal.
						ReactJS is a JavaScript library for building web user Interfaces.</p>
					</div>
				</div>
			</div>
			
			<div class="collapse row" id="dem">
				<div class="col-sm-4 col-xs-12">
					<div class="skill">
						<p data-aos="zoom-in"><img src="images/laravel.png" class="img-circle img-responsive" alt="laravel image" /> </p>
						<hr />
						<h3 class="laravel">LARAVEL</h3>
						<p>Laravel is a python framework for building web applications.
						It implements the MVC architectural pattern</p>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="skill">
						<p data-aos="zoom-in"><img src="images/bootstraplogo.png" class="img-circle img-responsive" alt="bootstrap" /> </p>
						<hr />
						<h3 class="bootstrap">Bootstrap &amp; Wordpress</h3>
						<p>BootStrap is a free and open source CSS framework for fast building of responsive web pages.
						WordPress a powerful content management system, written in php</p>
					</div>
				</div>
				
				<div class="col-sm-4 col-xs-12">
					<div class="skill">
						<p data-aos="zoom-in"><img src="images/c_logo.png" class="img-circle img-responsive" alt="bootstrap" /></p> 
						<hr />
						<h3 class="bootstrap">C-Lang</h3>
						<p>A precedoral progamming language that supports structured programming.</p>
					</div>
				</div>
			</div>
			
			
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<input type="button" href="#dem" id="colBtn"  class="btn btn-success btn-block" data-toggle="collapse" value="Show All" />
				</div>
			</div>
		</div> <!-- end of container -->	
	</section> <!-- end of skill section -->
	
	
	
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
