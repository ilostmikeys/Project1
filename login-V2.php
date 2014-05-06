<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title> Login </title>
	
		<!-- bootstrap css file -->
		<link href="style/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
		
	</head>

	<body>
		
		<?php
 			session_start();
			include('toDatabase.php');
			if (isset($_POST['submit'])) {	
				$username = trim($_POST['username']);
				$password = trim($_POST['password']);
				$query = "SELECT * FROM user WHERE username='$username' AND password='$password' AND com_code IS NULL";
				$result = mysqli_query($mysqli,$query)or die(mysqli_error());
				$num_row = mysqli_num_rows($result);
				$row=mysqli_fetch_array($result);
				
				if ($num_row ==1) {
					$_SESSION['user_name']=$row['username'];
					header("Location: member.php");
					exit;
				} else {
  					echo 'false';
				}
			}
		?>
		
		<div class="page-header" align="center">
		  <h1> Log in </h1>
		</div>
		
		
		<div class="login_form" align="center">
			<form class="form-horizontal" action="login-V2.php" method="post" >
			
				<div class="form-group">
					<label for="username" class="col-sm-4 control-label"> Username: </label>
					<div class="col-sm-5">
						<input name="username" type="text" class="form-control" id="username" placeholder="Username"/>
					</div>
				</div>
				
				<div class="form-group">
					<label for="password" class="col-sm-4 control-label"> Password: </label>
					<div class="col-sm-5">
						<input name="password" type="password" class="form-control" id="password" placeholder="Password"/>
					</div>
				</div>

				<div align="center">
				<input name="submit" type="submit" value="Submit"  class="btn btn-primary btn"/>
				</div>
			</form>
		</div>
		
	</body>