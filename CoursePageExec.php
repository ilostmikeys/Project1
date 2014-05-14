<?php
	// Start session
	session_start();
	
	// Include database connection details
	include('toDatabase.php');
	
	$input = 'INFS3611';
	
	// Execute the query (the recordset $rs contains the result)
	
	$sqlScript = "SELECT * FROM course WHERE course_code = '$input'";
	$rs = mysqli_query($mysqli,$sqlScript) or die(mysqli_error());
	
	// puts the course info into the $rs array 
	$info = mysqli_fetch_array($rs);
	
	$code = $info['course_code'];
	$name = $info['course_name'];
	$desc = $info['course_desc'];
	$rate = $info['course_rate'];
	
	echo $code;
	echo '<br>';
	echo $name;
	echo '<br>';
	echo 'Rating: ';
	echo $rate;
	echo '<hr>';
	echo 'About this course';
	echo '<br>';
	echo $desc;
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo 'What the students say';
	echo '<br>'
	
	
?>