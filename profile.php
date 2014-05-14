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
				
					<a class="navbar-brand" href="#">Go Share</a>
		

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="#">My Profile</a></li>
						<li><a href="#">Documents</a></li>
						<li class="active"><a href="#">Course Information</a></li>
					
				   
				</div><!-- /.navbar-collapse -->
			
			</div><!-- /.container-fluid -->
		</nav>
		
	</head>
	<body class="margin">
		
		<?php
		
			include('toDatabase.php');
			session_start();
		 	if($_SESSION['user_name'] == '' ) {
		  		header("Location: login-V2.php");
		  		exit;
		 	}
		
		 #	echo "Hi ".$_SESSION['user_name'];

#			$input = $_GET['user'];

	#		$studentId = $_SESSION['mem_id'];
	#		$fullName = $_SESSION['fullname'];
			$userName = $_SESSION['user_name'];
	#		$address = $_SESSION['sEmail'];
		#	echo $userName;

			// Execute the query (the recordset $rs contains the result)

			$sqlScript = "SELECT * FROM user WHERE username = '$userName'";
			$rs = mysqli_query($mysqli,$sqlScript) or die(mysqli_error());
			
			// puts the course info into the $rs array 
		#	$info = mysqli_fetch_array($rs);
			if ($rs) { 
#				echo $username;
			}
			

		?>
		
		
		
		<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
	 	 
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
	  
		</nav>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>

<table width="498" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2">Your Profile Information </td>
	<td><div align="right"><a href="index.php">logout</a></div></td>
  </tr>
  <tr>
    
    <td width="82" valign="top"><div align="left">Student Id:</div></td>
    <td width="165" valign="top"><?php echo $studentId;?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Full Name:</div></td>
    <td valign="top"><?php echo $fullName;?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">User Name:</div></td>
    <td valign="top"><?php echo $userName;?></td>
  </tr>
 
  <tr>
    <td valign="top"><div align="left">Email: </div></td>
    <td valign="top"><?php echo $address;?></td>
  </tr>
</table>
<p align="center"><a href="index.php"></a></p>

</body>
</html>