<?php 

session_start();
		
// Include database connection details
include('toDatabase.php');

?>
<!DOCTYPE html>
<html>
<head>
	
	<?php
	
		$input = $_GET['course'];
	
		// Execute the query (the recordset $rs contains the result)
	
		$sqlScript = "SELECT * FROM course WHERE course_code = '$input'";
		$rs = mysqli_query($mysqli,$sqlScript) or die(mysqli_error($mysqli));
	
		// puts the course info into the $rs array 
		$info = mysqli_fetch_array($rs);
	
		$code = $info['course_code'];
		$name = $info['course_name'];
		$desc = $info['course_desc'];
		
		$commentScript = "SELECT * FROM review INNER JOIN user ON review.user = user.id WHERE course_code = '$input' ORDER BY time_posted DESC";
		$result = mysqli_query($mysqli,$commentScript) or die(mysqli_error($mysqli));
		
		$sumScript = "SELECT SUM(rating) as 'total_rating' FROM review WHERE course_code = '$input'";
		$sumResult = mysqli_query($mysqli,$sumScript) or die(mysqli_error($mysqli));
		$sumArray = mysqli_fetch_array($sumResult);
		
		$sum = $sumArray['total_rating'];
		
		$countScript = "SELECT COUNT(rating) as 'total_reviews' FROM review WHERE course_code = '$input'";
		$countResult = mysqli_query($mysqli,$countScript) or die(mysqli_error($mysqli));
		$countArray = mysqli_fetch_array($countResult);
		
		$count = $countArray['total_reviews'];
		
		if ($count > 0) {
			$overall = $sum/$count;
	    }
	?>

	<!-- bootstrap css file -->
	<link href="style/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
	
	<nav class="navbar navbar-inverse" role="navigation">
				<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
			
					<!--<a class="navbar-brand" href="#">Go Share</a>-->
	

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="profile.php">My Profile</a></li>
						<li><a href="upload_html.php">Documents</a></li>
						<li><a href="SearchPage.php">Course Information</a></li>
				
			   
				</div><!-- /.navbar-collapse -->
		
			</div><!-- /.container-fluid -->
		</nav>

		<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
 	 
		  <div class="container-fluid">
		   	<ul class="nav navbar-nav">
				<li><a href="aboutUs.html">About Us</a></li>
				<li><a href="conditionsPage.html">Terms and Conditions of Use</a></li>
				<li><a href="rulesPage.html">Rules</a></li>
				<li><a href="helpPage.html">Help/FAQ</a></li>
				<li><a href="contactPage.html">Contact Us</a></li>
				</ul>
		     </li>
		  </div>
  
		</nav>
	
		
	
	
	<style type="text/css">

	.rating {
	    overflow: hidden;
	    display: inline-block;
	    font-size: 0;
	    position: relative;
	}
	.rating-input {
	    float: right;
	    width: 2px;
	    height: 16px;
	    padding: 0;
	    margin: 0 0 0 -16px;
	    opacity: 0;
	}
	.rating:hover .rating-star:hover,
	.rating:hover .rating-star:hover ~ .rating-star,
	.rating-input:checked ~ .rating-star {
	    background-position: 0 0;
	}
	.rating-star,
	.rating:hover .rating-star {
	    position: relative;
	    float: right;
	    display: block;
	    width: 16px;
	    height: 16px;
	    background: url('http://kubyshkin.ru/samples/star-rating/star.png') 0 -16px;
	}
	.body {
	        margin: 40px;
	        margin-bottom: 50px;
	        padding: 0;
	        background-color: #edece9;
	        font-family: "Lucida Grande", "Bitstream Vera Sans", "Verdana";
	        font-size: 13px;
	        color: #333;
	      }
	
	</style>
	
	
</head>

<body class="body">
	
	
		<!-- ><nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
	 	 
		  <div class="container-fluid">
		   	<ul class="nav navbar-nav">
				<li><a href="#">About Us</a></li>
				<li><a href="#">Terms and Conditions of Use</a></li>
				<li><a href="#">Rules</a></li>
				<li><a href="#">Help/FAQ</a></li>
				<li><a href="#">Contact Us</a></li>
				</ul>
		     </li>
		  </div>
	  
		</nav> -->
	
		
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="js/bootstrap.min.js"></script>
<?php
if ($_GET['post'] == 'success') {
	echo '<center><div id="comment" style="background-color:#C2FFE0;height:30px;width:400px;line-height:30px;float:center;">Your review was successfully posted. Thank you!</div></center><br>';
}
?>
	
<h1 style="font-family:helvetica; text-align:left;"><?php echo $code;?></h1>
<p style="font-family:helvetica; text-align:left; font-size:22px"><?php echo $name;?></p>
	<?php
	if ($count > 0) {
	$rounded_rating;
	if ($overall >= 0 & $overall < 1) {
		$rounded_rating = 0;
	}
	else if ($overall >= 1 & $overall < 2) {
		$rounded_rating = 1;
	}
	else if ($overall >= 2 && $overall < 3) {
		$rounded_rating = 2;
	}
	else if ($overall >= 3 && $overall < 4) {
		$rounded_rating = 3;
	}
	else if ($overall >= 4 && $overall < 5) {
		$rounded_rating = 4;
	}
	else {
		$rounded_rating = 5;
	}
	for ($i = 0; $i < $rounded_rating; $i++)
	{
		echo '<i class="glyphicon glyphicon-star"></i>';
	}
	for ($i = 0; $i < 5 - $rounded_rating; $i++)
	{
		echo '<i class="glyphicon glyphicon-star-empty"></i>';
	}
	echo ' (';
	echo number_format((float)$overall, 1, '.', '');;
	echo '/5)';
	echo '<br>';
	echo 'Based on ';
	echo $count;
		if ($count == 1) {
			echo ' review';
		} else {
			echo ' reviews';
		}
	} else {
		echo '<p style="font-family:helvetica; text-align:left; font-size:12px; font-weight:bold">No reviews yet. Be the first to <a href="CourseReview.php?course=';
		echo $code;
		echo '"style="font-family:helvetica; font-size:12px;">review</a> this course. Your review matters!</p>';
	}
	?>
<hr>
<br>
<p style="font-family:helvetica; text-align:left; font-size:16px; font-weight:bold">About this course
<p class="margin" style="font-family:helvetica; text-align:left; font-size:14px"><br><?php echo $desc;?></p>
<br> 
<a href="https://www.handbook.unsw.edu.au/undergraduate/courses/2014/<?php echo $code;?>.html" style="font-family:helvetica; font-size:14px;">View on UNSW Handbook</a>
<br>
<br>
<br>
<br>
<?php
if ($count != 0) {
	echo '<p style="font-family:helvetica; text-align:left; font-size:16px; font-weight:bold">Students\' reviews</p>
		<p style="font-family:helvetica; text-align:left; font-size:12px; font-weight:bold">You can also
		<a href="CourseReview.php?course=';
	echo $code;
	echo '"style="font-family:helvetica; font-size:12px;">post a review</a> on this course. Your review matters!</p>
		<div id="comment" style="height:150px;width:400px;float:left;">
		<hr>';
	while($cmt = mysqli_fetch_array($result))
	{
		$user = $cmt['username'];
		$comment = $cmt['comment'];
		$rate = $cmt['rating'];
		$time = $cmt['time_posted'];
		
		echo '<p style="font-family:helvetica; text-align:left; font-size:14px;"><a href="#" style="font-family:helvetica; font-size:14px; font-weight:bold">';
		echo $user;
		echo '</a> says:</p>';
		echo '<p style="font-family:helvetica; text-align:left; font-size:14px;">';
		echo $comment;
		echo '</p>';
		for ($i = 0; $i < $rate; $i++)
		{
			echo '<i class="glyphicon glyphicon-star"></i>';
		}
		for ($i = 0; $i < 5 - $rate; $i++)
		{
			echo '<i class="glyphicon glyphicon-star-empty"></i>';
		}
		echo '<p style="font-family:helvetica; text-align:right; font-size:9px;"><i>Posted ';
		echo $time;
		echo '</i></p>';
		echo '<hr>';
	}
}
?>
</div>
<br>
<br>
</body>
</html>
	