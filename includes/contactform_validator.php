<?php

$success = false; // variable to check and print successful message

if (isset($_POST['submit'])){
	$name = clean_data($_POST['contact_name']);
	$email = clean_data($_POST['contact_email']);
	$topic = clean_data($_POST['contact_topic']);
	$message = clean_data($_POST['msg']);
	
	$success_message = "<span class='text-success'>Message has been submitted successfully<br /> do check your email for confirmation</span>";
	$error =  "";
	// check if above one field empty, two field empty, or all field empty then set error message
	if ((empty($name) && empty($email) && empty($topic) && empty($message)) or (!empty($name) && empty($email) && empty($topic) && empty($message)) or
	   (empty($name) && !empty($email) && empty($topic) && empty($message)) or (empty($name) && empty($email) && !empty($topic) && empty($message)) or
	   (empty($name) && empty($email) && empty($topic) && !empty($message)))  {
		$error = "all fields musn't be empty";
	}

	elseif ((empty($name)) && (!empty($email)) && (!empty($topic)) && (!empty($message))){
		$error = "name cant be empty";

	}
	elseif ((!empty($name)) && (empty($email)) && (!empty($topic)) && (!empty($message))){
		$error = "Email cant be empty";

	}
	elseif ((!empty($name)) && (!empty($email)) && (empty($topic)) && (!empty($message))){
		$error = "subject cant be empty";

	}
	elseif ((!empty($name)) && (!empty($email)) && (!empty($topic)) && (empty($message))){
		$error = "message cant be empty";

	}
	elseif ((strlen($name) < 3)){
		$error = "name shouldnt be less than 3";
		
	}
	elseif ((strlen($topic) < 5)){
		$error = "Topic Can't be less than 5";
		
	}
	elseif ((strlen($message) < 10)){
		$error = "message can't be less than 10";
		
	}
	else{
		$dbc = mysqli_connect('localhost', 'root', '', 'codejavu_db');
		$query = "INSERT INTO contact_tb (c_name, c_topic, email, c_message, ts) VALUES('$name', '$topic', '$email', '$message', NOW())";
		mysqli_query($dbc, $query) or die ("cant access database");
		$from = 'Papercut@user.com';
		$mail_subject = "contact message successfully recieved";
		$to = $email;		
		$mailed_msg = "Dear $name, Thank you for contacting us \n I will get back to you via your email address";
		mail ($to, $mail_subject, $mailed_msg, 'from:' . $from);
		$name = $message = $topic = $email = "";
		$success = true; // boolean set to true for success message
		mysqli_close($dbc);
		
		
	}

} // end of the if statement



function clean_data($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>