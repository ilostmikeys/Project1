<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title> Log in failed </title>
		
		<!-- bootstrap css file -->
		<link href="style/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
		
	</head>
	
	<body>
		<div class="page-header" align="center">
		  <h1> Log On failed, try again</h1>
		</div>
		
		<form name="loginform" action="login_exec.php" method="post" id="logform">
			<!--the code bellow is used to display the message of the input validation-->
			 		<?php
						if (isset($_SESSION['ERRMSG_ARR']) &&
						 	is_array($_SESSION['ERRMSG_ARR']) &&
						 	count($_SESSION['ERRMSG_ARR']) >0 ) {
								echo '<ul class="err">';
								foreach($_SESSION['ERRMSG_ARR'] as $msg) {
									echo '<li>',$msg,'</li>'; 
								}
								echo '</ul>';
								unset($_SESSION['ERRMSG_ARR']);
							}
					?>
			
			<div align = "center"> Username: <input name="username" type="text" />
			<div align = "center"> Password: <input name="password" type="password" />
			<p> </p>
			<div align = "center"> <input name="" type="submit" value="Login" class="btn btn-primary btn" /> </div>
		</form>
			
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>