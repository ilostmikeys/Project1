<?php
	// Start session
	session_start();
	
	// Include database connection details
	include('toDatabase.php');
	
	// Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	// Sanitize the POST values
	$fullname = clean($_POST['fullname']);
	$eaddress = clean($_POST['email']);
	$username = clean($_POST['username']);
	$password = clean($_POST['password']);
	
	// Input Validations
	if($fullname == '') {
		// checks if the full name is blank
		$_SESSION['error']['fullname'] = "Full name is required.";
	}
	
	if($_POST['email'] == '') {
		// checks if the email is blank
		$_SESSION['error']['email'] = "E-mail is required.";
	} else {
		//whether the email format is correct
		if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $eaddress)) {
			
			//if it has the correct format whether the email has already exist
			$sqlEmailCheck = "SELECT * FROM user WHERE email = '$eaddress'";
			$resultEmailCheck = mysqli_query($mysqli,$sqlEmailCheck) or die(mysqli_error());
			if (mysqli_num_rows($resultEmailCheck) > 0) {
				$_SESSION['error']['email'] = "This Email is already used.";
			}
		} else {
			//this error will set if the email format is not correct
			$_SESSION['error']['email'] = "Your email is not valid.";
		}
	}
		
	if($username == '') {
		// checks if the username is blank
		$_SESSION['error']['username'] = "User name is required.";
	}
	
	if($password == '') {
		// checks if the password is blank
		$_SESSION['error']['password'] = "Password is required.";
	} 
	
	if(isset($_SESSION['error'])) {
		header("Location: registration-V2.php");
		exit;
	} else {
		$com_code = md5(uniqid(rand()));

		$sqlInsert = "INSERT INTO user (fullname, username, email, password, com_code) VALUES ('$fullname', '$username', '$eaddress', '$password', '$com_code')";
		$resultInsert = mysqli_query($mysqli,$sqlInsert) or die("Shit happened.");
		
		
		if($resultInsert) {
			require_once "Mail.php";
			
			$from = "<from.gmail.com>";
			$to = "<$eaddress>";
			$subject = "Confirmation from GoShare to $username";
			$body = "Please click the link below to verify and activate your account.";
			$body .= "localhost/Project1/registrationConfirm.php?passkey=$com_code";
			
			$host = "GoShareUNSW@gmail.com";
			$username = "GoShareUNSW@gmail.com";
			$password = "g0shar3unsw";
		
			$headers = array ('From' => $from,
				'To' => $to,
				'Subject' => $subject
			);
			
			$smtp = Mail::factory('smtp',
				array ('host' => 'ssl://smtp.gmail.com',
				'port' => 465,
				'auth' => true,
				'username' => $username,
				'password' => $password)
			);
		
			$mail = $smtp->send($to, $headers, $body);
	
	
			if (PEAR::isError($mail)) {
				echo("<p>" . $mail->getMessage() . "</p>");
			} else {
				echo("<p>Message successfully sent!</p>");
			}
		}
	}
	
?>


