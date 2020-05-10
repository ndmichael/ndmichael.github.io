<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SDLC</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bootstrap and other dependecies referenced here -->
	<?php include ("./includes/ref_header.php"); ?>
	
	<style>
		#tabs_container{
			margin: 5.5em auto;
		}
	</style>

</head>

<body>
	
	<!-- shared navbar using php include -->
	<?php  include ("./includes/navbar.php");  ?> 
	
	<div id="tabs_container" class="container">
		<ul class="nav nav-tabs nav-justified">
  			<li class="active"><a data-toggle="tab" href="#waterfall-id">Water Fall</a></li>
  			<li><a data-toggle="tab" href="#agile-id">Agile</a></li>
  			<li><a data-toggle="tab" href="#devops-id">DevOps</a></li>
		</ul>

	
	
	
	
		<div class="tab-content row">
			<div id="waterfall-id" class="tab-pane fade in active col-sm-offset-2 col-sm-8" style="background-color:#F0ECEC">
				<h2>WATER FALL MODEL</h2>
				<p>
					Water fall software development model is a sequential model in which development moves in stages known as phase. Each phase must be completed before moving to the next, thereby moving in a linear-sequential pattern
				</p>
				<figure>
						<legend>Waterfall</legend>
						<img src="images/waterfall2.png" class="img-responsive img-thumbnail" />
				</figure>
				<h3>PHASES IN WATERFALL MODEL:</h3>
				<ul>
					<li><p>Requirement Gathering</p></li>
					<li><p>Design Stage</p></li>
					<li><p>Built Stage</p></li>
					<li><p>Test Stage</p></li>
					<li><p>Deployment stage</p></li>
					<li><p>Maintenance</p></li>
				</ul>
				
				<h3>PROS OF WATER FALL MODEL</h3>
				<ol>
					<li><p>Stages are well defined and clear.</p></li>
					<li><p>Processes during development as well documented</p></li>
					<li><p>Before moving to next stage each stages must be completed</p></li>
					<li><p>Simple and easy to understand and use</p></li>
				</ol>
				
				<h3>CONS OF WATER FALL MODEL</h3>
				<ol>
					<li><p>Errors can be fixed only during the phase.</p></li>
					<li><p>It is not flexible enough </p></li>
					<li><p>Most modern projects specifications changes a lot, so waterfall model is not desirable for such projects.</p></li>
					<li><p>Not a good model for complex and object-oriented projects.</p></li>
					<li><p>High risk and time consuming.</p></li>
				</ol>

			</div> <!-- end of waterfall column  -->
		
		
		
			<div id="agile-id" class="tab-pane fade col-sm-offset-2 col-sm-8">
				
				<h2>AGILE MODELS</h2>
				<p>
					Agile software development is a group of software development methodologies which uses the iterative development pattern. Agile makes each development pattern/steps an ongoing process in collaboration of customers, managements and developers.
					Agile is a simplified or a total opposite of waterfall model. <br /><br />
					<cite><q>One bright sunny day, a few people with varied software development methodologies background sat on a round table to brainstorm a possible alternative solution to software development. The aim was to achieve faster software development time with less documentation. The end result of the meeting is what we call today the Agile Software Development Process.</q></cite> <br />
					
					Two notable subs models in the Agile Software Development Models are SCRUM and LEAN

				</p>
				<figure>
						<img src="images/agile1.png" class="img-responsive img-thumbnail" />
				</figure>
				<h3>PHASES IN AGILE MODEL:</h3>
				<ul>
					<li><p>Concept</p></li>
					<li><p>Inception</p></li>
					<li><p>Iteration</p></li>
					<li><p>Release</p></li>
					<li><p>Production</p></li>
					<li><p>Retirement</p></li>
				</ul>
				

				
				<h3>PROS OF AGILE MODEL</h3>
				<ol>
					<li><p>Quick Testing</p></li>
					<li><p>Flexibility</p></li>
					<li><p>Great Communication</p></li>
					<li><p>Quicker testing and deployment</p></li>
				</ol>
				
				<h3>CONS OF AGILE MODEL</h3>
				<ol>
					<li><p>Customer information dependent.</p></li>
					<li><p>The final end product is hard to predict</p></li>
					<li><p>Poor Documentation.</p></li>
					<li><p>No set deadline</p></li>
				</ol>
				

			</div>

				
			<div id="devops-id" class="tab-pane fade col-sm-offset-2 col-sm-8">
				
				<h2>DevOPs MODELS MODEL</h2>
				<p>
					DevOps is an offspring of agile software development which came into existence to match increase software velocity. DevOps blurs the line between developers and system ops.
					What this mean in essence is that it combines software development with system operations throughout the life cycle of software.
					The first 3 steps in DevOps are grouped as continuous development (Plan, Code, and Build), and deployment and operations are grouped as Continuous (Deployment and Operation).

				</p>
				<figure>
						<img src="images/devOps1.png" class="img-responsive img-thumbnail" />
				</figure>
				<h3>PHASES IN DevOps MODEL:</h3>
				<ul>
					<li><p>Plan</p></li>
					<li><p>Code</p></li>
					<li><p>Build</p></li>
					<li><p>Continuous Testing</p></li>
					<li><p>Continuous Integration / Package</p></li>
					<li><p>Deployment / Release</p></li>
					<li><p>Operate</p></li>
					<li><p>Monitor</p></li>
				</ul>
						
				<h3>Pros of DevOps Model</h3>
				<ol>
					<li><p>Improved flexibility and support.</p></li>
					<li><p>Speed up production time</p></li>
					<li><p>Promotes better team efficiency</p></li>
					<li><p>With a clear product vision</p></li>
				</ol>
				

				
				<h3>Cons of DevOps Model</h3>
				<ol>
					<li><p>Lack of Talented DevOps.</p></li>
					<li><p>Hard to transit from another methology.</p></li>
				</ol>	

			</div>
	
		</div>
	
	</div>	
	
	
	
	
	
	
	
	
	
	<!-- referencing the codeja-vu footer -->
	 <?php include("./includes/footer.php"); ?> 
	
	<!-- referencing bootstrap scripts dependencies -->	
	<?php include("./includes/ref_footer.php"); ?>	
	

</body>
</html>