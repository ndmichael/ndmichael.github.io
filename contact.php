<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Me</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bootstrap and other dependecies referenced here -->
	<?php include ("./includes/ref_header.php"); ?>
<style>
	p#error{
		margin-top: 3.2%;
		text-align: center;
	}	
</style>

</head>

<body>
		<!-- shared navbar using php include -->
	<?php  include ("./includes/navbar.php");  ?> 
	
	<?php include ("./includes/contactform_validator.php"); ?>
	
	<section id="contactMe" class="container">
		<h1>Contact Me</h1>
		<p id="error" class="text-danger"><?php if (!empty($error)) echo $error; if($success) echo $success_message;  ?></p>
		<div class="row">
			<div class="col-sm-offset-3 col-sm-6">
				<form class="form-horizontal" id="contact_form" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
					<div class="form-group group">
						<label class="col-sm-2 control-label" for="username">Name:</label>
						<div class="col-sm-10">
								<input class="form-control control-override fa fa-envelope-o" type="text" id="contact_name" name="contact_name" value="<?php if(isset($name)) echo $name; ?>" placeholder="Your name" maxlength="30" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="email">Email:</label>
						<div class="col-sm-10">
							<input class="form-control control-override" type="email" id="contact_email" name="contact_email" value="<?php if(isset($email)) echo $email; ?>" maxlength="30" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="topic">Topic:</label>
						<div class="col-sm-10">
							<input class="form-control control-override" type="text" id="contact_topic" name="contact_topic" value="<?php if(isset($topic)) echo $topic; ?>" maxlength="50" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="message">Message:</label>
						<div class="col-sm-10">
							<textarea class="form-control textarea-override" rows="6" id="msg" name="msg" placeholder="type your message" maxlength="150" required><?php if(isset($message)) echo $message; ?></textarea>
						<hr size="5px" />
							
							<div class="row text-center">
								<div class="btn-override">
									<input type="submit" class="btn btn-group btn-primary btn-lg pull-left" name="submit" id="submit" value="SUBMIT" />
									<input type="reset" class="btn btn-group btn-danger btn-lg pull-right" value="CANCEL" />
								</div>
							</div>
						</div>
					</div>

				</form>
			</div>
		</div> <!-- end of row -->
	</section>
	


	<!-- referencing the codeja-vu footer -->
	 <?php include("./includes/footer.php"); ?> 


	
	<!-- referencing bootstrap scripts dependencies -->	
	<?php include("./includes/ref_footer.php"); ?>
	
	<!-- prevents user from refreshing and resubmitting form after submitted -->
	<script>
			if (window.history.replaceState){
				window.history.replaceState(null, null, window.location.href);
			}
	</script>
</body>
</html>
