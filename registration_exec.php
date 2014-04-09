<?php
	session_start();
	include('toDatabase.php');
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['mname'];
	$eaddress=$_POST['eaddress'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	mysql_query("INSERT INTO member(fname, lname, gender, eaddress, username, password)VALUES('$fname', '$lname', '$gender', '$eaddress', '$username', '$password')");
	header("location: registration.php?remarks=success");
	mysql_close($con);
?>
