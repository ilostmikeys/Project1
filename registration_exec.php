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
	$fname = clean($_POST['fname']);
	$lname = clean($_POST['lname']);
	$gender = clean($_POST['gender']);
	$eaddress = clean($_POST['eaddress']);
	$username = clean($_POST['username']);
	$password = md5($password);
	$password = clean($_POST['password']);
	$password2 = md5($password2);
	$password2 = clean($_pOST['password2'])
	
	// Input Validations
	if($fname == '') {
		$errmsg_arr[] = 'First name missing';
		$errflag = true;
	}
	if($lname == '') {
		$errmsg_arr[] = 'Last name missing';
		$errflag = true;
	}
	if($gender == '') {
		$errmsg_arr[] = 'Gender missing';
		$errflag = true;
	}
	if($eaddress == '') {
		$errmsg_arr[] = 'Email Address missing';
		$errflag = true;
	}
	if($username == '') {
		$errmsg_arr[] = 'username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	} 
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	// create query
	$success = mysql_query("INSERT INTO member(fname, lname, gender, eaddress, username, password)VALUES('$fname', '$lname', '$gender', '$eaddress', '$username', '$password')");
	header("location: registration.php?remarks=success");
	
	if ($sucess) { 
		//get the new user id
		$userid = mysql_insert_id();
	             
		//create a random key
		$key = $username . $email . date('mY');
		$key = md5($key);
	             
		//add confirm row
		$confirm = mysql_query("INSERT INTO `confirm` VALUES(NULL,'$userid','$key','$email')"); 
		echo "asd";
		// if confirm was successful above..
		if($confirm){
		
			//include the swift class
			include_once 'swift/swift_required.php';
		
			//put info into an array to send to the function
			$info = array(
				'username' => $username,
				'email' => $email,
				'key' => $key);
				
			//send the email
			if(send_email($info)){	
				//email sent
				$action['result'] = 'success';
				array_push($text,'Thanks for signing up. Please check your email for confirmation!');
			} else {
				$action['result'] = 'error';
				array_push($text,'Could not send confirm email');
			}
		} else{
			$action['result'] = 'error';
			array_push($text,'Confirm row was not added to the database. Reason: ' . mysql_error());
		}
	}

	mysql_close($con);
?>
