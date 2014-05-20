<?php 

session_start();
		
// Include database connection details
include('toDatabase.php');

?>
<!DOCTYPE html>
<html>
<head>
	
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
	
	<style type="text/css">
	.cancel {
		-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
		-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
		box-shadow:inset 0px 1px 0px 0px #ffffff;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #f9f9f9), color-stop(1, #e9e9e9) );
		background:-moz-linear-gradient( center top, #f9f9f9 5%, #e9e9e9 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f9f9', endColorstr='#e9e9e9');
		background-color:#f9f9f9;
		-webkit-border-top-left-radius:6px;
		-moz-border-radius-topleft:6px;
		border-top-left-radius:6px;
		-webkit-border-top-right-radius:6px;
		-moz-border-radius-topright:6px;
		border-top-right-radius:6px;
		-webkit-border-bottom-right-radius:6px;
		-moz-border-radius-bottomright:6px;
		border-bottom-right-radius:6px;
		-webkit-border-bottom-left-radius:6px;
		-moz-border-radius-bottomleft:6px;
		border-bottom-left-radius:6px;
		text-indent:0;
		border:1px solid #dcdcdc;
		display:inline-block;
		color:#666666;
		font-family:Arial;
		font-size:15px;
		font-weight:bold;
		font-style:normal;
		height:50px;
		line-height:50px;
		width:120px;
		text-decoration:none;
		text-align:center;
		text-shadow:1px 1px 0px #ffffff;
	}
	.cancel:hover {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #e9e9e9), color-stop(1, #f9f9f9) );
		background:-moz-linear-gradient( center top, #e9e9e9 5%, #f9f9f9 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9');
		background-color:#e9e9e9;
	}.cancel:active {
		position:relative;
		top:1px;
	}</style>
	
	<style type="text/css">
	.submit {
		-moz-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
		-webkit-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
		box-shadow:inset 0px 1px 0px 0px #bbdaf7;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #378de5) );
		background:-moz-linear-gradient( center top, #79bbff 5%, #378de5 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#378de5');
		background-color:#79bbff;
		-webkit-border-top-left-radius:6px;
		-moz-border-radius-topleft:6px;
		border-top-left-radius:6px;
		-webkit-border-top-right-radius:6px;
		-moz-border-radius-topright:6px;
		border-top-right-radius:6px;
		-webkit-border-bottom-right-radius:6px;
		-moz-border-radius-bottomright:6px;
		border-bottom-right-radius:6px;
		-webkit-border-bottom-left-radius:6px;
		-moz-border-radius-bottomleft:6px;
		border-bottom-left-radius:6px;
		text-indent:0;
		border:1px solid #84bbf3;
		display:inline-block;
		color:#ffffff;
		font-family:Arial;
		font-size:15px;
		font-weight:bold;
		font-style:normal;
		height:50px;
		line-height:50px;
		width:120px;
		text-decoration:none;
		text-align:center;
		text-shadow:1px 1px 0px #528ecc;
	}
	.submit:hover {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #378de5), color-stop(1, #79bbff) );
		background:-moz-linear-gradient( center top, #378de5 5%, #79bbff 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#378de5', endColorstr='#79bbff');
		background-color:#378de5;
	}.submit:active {
		position:relative;
		top:1px;
	}</style>
	
	<?php
			$course = $_GET['course'];

			// Execute the query (the recordset $rs contains the result)
	
			$sqlScript = "SELECT * FROM course WHERE course_code = '$course'";
			$rs = mysqli_query($mysqli,$sqlScript) or die(mysqli_error($mysqli));
	
			// puts the course info into the $rs array 
			$info = mysqli_fetch_array($rs);
	
			$code = $info['course_code'];
			$name = $info['course_name'];
			$desc = $info['course_desc'];
			$rate = $info['course_rating'];
		
	?>
			
</head>
<body class="body">


<h1 style="font-family:helvetica; text-align:left;">Share your experience</h1>
<p style="font-family:helvetica; text-align:left; font-size:22px">Tell everyone about the course that you've done.</p>
<hr>

<form method="post" action="SubmitReview.php?course=<?php echo $course;?>">
<p style="font-family:helvetica; text-align:left; font-size:20pt"><?php echo $course?><br>
<p style="font-family:helvetica; text-align:left; font-size:18px"><?php echo $name?></p><br>

<p style="font-family:helvetica; text-align:left; font-size:14px">Your comment<br><br>
	<textarea rows="6" cols="50" name="commentarea" id="commentarea"></textarea>
</p><br>
<p style="font-family:helvetica; text-align:left; font-size:12pt">How would you rate this course?<br>
	<span class="rating">
	        <input type="radio" class="rating-input"
	    id="rating-input-1-5" name="rating-input-1" value=5>
	        <label for="rating-input-1-5" class="rating-star"></label>
	        <input type="radio" class="rating-input"
	                id="rating-input-1-4" name="rating-input-1" value=4>
	        <label for="rating-input-1-4" class="rating-star"></label>
	        <input type="radio" class="rating-input"
	                id="rating-input-1-3" name="rating-input-1" value=3>
	        <label for="rating-input-1-3" class="rating-star"></label>
	        <input type="radio" class="rating-input"
	                id="rating-input-1-2" name="rating-input-1" value=2>
	        <label for="rating-input-1-2" class="rating-star"></label>
	        <input type="radio" class="rating-input"
	                id="rating-input-1-1" name="rating-input-1" value=1>
	        <label for="rating-input-1-1" class="rating-star"></label>
	</span>

</p>
<br>
<input type="submit" id="search" class="submit" value="Submit">
<a href="#" class="cancel">Cancel</a>
</form>

</body>
</html>