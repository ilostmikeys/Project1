<?php
	// Start session
	session_start();
	
	// Include database connection details
	include('toDatabase.php');
	
	$input = 'INFS3611';
	
	// Execute the query (the recordset $rs contains the result)
	$rs = mysql_query("SELECT * FROM course WHERE course_code = '$input'")
	or die(mysql_error());
	
	// puts the course info into the $rs array 
	$info = mysql_fetch_array($rs);
	
	$code = $info['course_code'];
	$name = $info['course_name'];
	$desc = $info['course_desc'];
	$rate = $info['course_rate'];
	
?>