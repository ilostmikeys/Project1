<?php
	// Start session
	session_start();
 
	// Include database connection details
	require_once('toDatabase.php');
 
	// Array to store validation errors
	$errorMessagesArray = array();
 
	// Validation error flag
	$errorFlag = false;
 
	// Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	// Sanitize the POST values 
	$username = clean($_POST['username']);
	$password = clean($_POST['password']);
 
	// Input Validations
	if($username == '') {
		$errorMessagesArray[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errorMessagesArray[] = 'Password missing';
		$errflag = true;
	}
 
	// If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: login.php");
		exit();
	}
 
	// Create query
	$qry="SELECT * FROM member WHERE username='$username' AND password='$password'";
	$result=mysql_query($qry);
 
	// Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['mem_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
			$_SESSION['SESS_LAST_NAME'] = $member['password'];
			session_write_close();
			header("location: homepage.php");
			exit();
		} else {
			// Login failed
			$errmsg_arr[] = 'Username and password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errorMessagesArray;
				session_write_close();
				header("location: login_fail.php");
				exit();
			}
		}
	} else {
		die("Query failed");
	}

