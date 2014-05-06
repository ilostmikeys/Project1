<!DOCTYPE html> 
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>Registration</title>
	
		<!-- bootstrap css file -->
		<link href="style/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
	
	</head>

	<body>
		
		<?php 
			session_start();
			if (isset($_SESSION['error'])) {
				echo '<p>'.$_SESSION['error']['username'].'</p>';
				echo '<p>'.$_SESSION['error']['email'].'</p>';
				echo '<p>'.$_SESSION['error']['username'].'</p>';
				echo '<p>'.$_SESSION['error']['password'].'</p>';
				unset($_SESSION['error']);
			}
		?>
		
		<div class="page-header" align="center">
		  <h1> Registration </h1>
		</div>
		
		<div class="signup_form">
			<form class="form-horizontal" action="registration_exec.php" method="post" >
					
				<div class="form-group" >
				    <label for="fullname" class="col-sm-4 control-label"> Full name: </label>
				    <div class="col-sm-5">
				      <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Full Name">
						<span class="help-block"><p class="text-warning"><i> E.g. John Smith </i></p></span>
				    </div>
				</div>
				
				<div class="form-group">
				    <label for="email" class="col-sm-4 control-label" > Email: </label>
				    <div class="col-sm-5">
				      <input name="email" type="text" class="form-control" id="email" placeholder="Email">
						<span class="help-block"><p class="text-warning"><i> Use your z-mail. </i></p></span>
				    </div>
				
				</div>
				
				<div class="form-group">
				    <label for="username" class="col-sm-4 control-label"> Username: </label>
				    <div class="col-sm-5">
				      <input name="username" type="text" class="form-control" id="username" placeholder="Username">
						<span class="help-block"><p class="text-warning"><i> Can be a combination of letters and numbers. </i></p></span>
				    </div>
				</div>
				
				<div class="form-group">
				    <label for="password" class="col-sm-4 control-label"> Password: </label>
				    <div class="col-sm-5">
				      <input name="password" type="password" class="form-control" id="password" placeholder="Password">
						<span class="help-block"><p class="text-warning"><i> Can be a combination of letters and numbers. </i></p></span>
				    </div>
				</div>
			
				<div align="center">
				<input name="submit" type="submit" value="Submit"  class="btn btn-primary btn"/>
				</div>
			</form>
		</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		
	</body>

</html>