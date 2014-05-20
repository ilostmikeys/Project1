<?php

session_start();
		
// Include database connection details
include('toDatabase.php');

function clean($str) {
	$str = @trim($str);
	if(get_magic_quotes_gpc()) {
		$str = stripslashes($str);
	}
	return mysql_real_escape_string($str);
}

// Sanitize the POST values
  $cmt = clean($_POST["commentarea"]);
  $rate = clean($_POST["rating-input-1"]);
  $course = $_GET['course'];
  $sqlInsert = "INSERT INTO review (comment, rating, course_code, user) VALUES ('$cmt', '$rate', '$course', 4)";
  $resultInsert = mysqli_query($mysqli,$sqlInsert) or die(mysqli_error($mysqli));
  
  if ($resultInsert) {
	  Header('Location: CoursePage.php?post=success&&course=' .$course);
  }
?>