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
	
	<?php
	
		$input = $_GET['key'];
	
		// Execute the query (the recordset $rs contains the result)
	
		$sqlScript = "SELECT * FROM course WHERE course_code LIKE '%$input%' OR course_name LIKE '%$input%';";
		$rs = mysqli_query($mysqli,$sqlScript);
		
		$countScript = "SELECT COUNT(course_code) as 'total_result' FROM course WHERE course_code LIKE '%$input%' OR course_name LIKE '%$input%';";
		$countResult = mysqli_query($mysqli,$countScript) or die(mysqli_error($mysqli));
		$countArray = mysqli_fetch_array($countResult);
		
		$count = $countArray['total_result'];
	?>
	<style>
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

<body class="body">
	<h1 style="font-family:helvetica; text-align:left;">Search Results</h1>
	<div class="input-group">
		<form name="search" action="NewSearch.php">
		  <input type="text" name="newsearchbar" id="newsearchbar" value="<?php echo $input;?>">
		  <input type="submit" id="find" value="Find">
		  
		</form>
	</div>
	
	<br>
	<hr>
	<br>
	<br>
	
	<?php
	if ($count == 0) {
		echo '<p style="font-family:helvetica; font-size:18px;">No matches found. Please try again.</p>';
	} else {
		while($info = mysqli_fetch_array($rs))
		 { 
			 $code = $info['course_code']; 
		 	 $name = $info['course_name'];
			 $rate = $info['course_rate'];
		 
			 echo '<a href="CoursePage.php?course=';
			 echo $code;
			 echo '" style="font-family:helvetica; font-size:18px; font-weight:bold">';
			 echo $code;
			 echo '</a>';
			 echo '<p style="font-family:helvetica; font-size:18px;">';
			 echo $name;
			 echo '</p><br><br>';
		 }
	}
	?>
</body>
</html>