<!DOCTYPE html>
<html>

<head>
	
	
	<!-- bootstrap css file -->
	<link href="/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
	<!--<div ><img src="logo.png"  width="100" height="100" ></a></div> -->
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
				
					
					
		

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="profile.php">My Profile</a></li>
						<li><a href="upload_html.php">Documents</a></li>
						<li class="active"><a href="SearchPage.php">Course Information</a></li>
					
				   
				</div><!-- /.navbar-collapse -->
		
			</div><!-- /.container-fluid -->
		</nav>
	<!--	<style>
		.body {
		        margin: 40px;
		        margin-bottom: 50px;
		        padding: 0;
		        background-color: #edece9;
		        font-family: "Lucida Grande", "Bitstream Vera Sans", "Verdana";
		        font-size: 13px;
		        color: #333;
		      }</style> -->
	</head>
	<body class="body">
		
				<php?
		
					include('toDatabase.php');
					session_start();
				 	if($_SESSION['user_name'] == '' ) {
				  		header("Location: login-V2.php");
				  		exit;
				 	}
		
				 #	echo "Hi ".$_SESSION['user_name'];

		#			$input = $_GET['user'];


					$fullName = $_SESSION['fullname'];
					$userName = $_SESSION['user_name'];
					$eaddress = $_SESSION['email'];
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
				<li><a href="aboutUs.html">About Us</a></li>
				<li><a href="conditionsPage.html">Terms and Conditions of Use</a></li>
				<li><a href="rulesPage.html">Rules</a></li>
				<li><a href="helpPage.html">Help/FAQ</a></li>
				<li><a href="contactPage.html">Contact Us</a></li>
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
    <td height="26" colspan="2"><h4>Your Profile Information </h4></td>
	<td><div align="right"><a href="welcome.html">Logout</a></div></td>
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
    <td valign="top"><?php echo $eaddress;?></td>
  </tr>
</table>
<p align="center"><a href="index.php"></a></p>

</body>
</html>