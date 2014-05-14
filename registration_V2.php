<!DOCTYPE html> 
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>Registration</title>
	
		<!-- bootstrap css file -->
		<link href="style/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
	
	</head>

	<body>
		<div class="signup_form" align="center">
			<form action="register.php" method="post" >
	
				<p> 
					<label for="fullname"> Full Name: </label>
					<input name="fullname" type"text" id="fullname" size="30"/>			
				</p>
				
	  	  		<p>
	  	  			<label for="username">User Name:</label>
	  	  			<input name="username" type="text" id="username" size="30"/>
	  	  		</p>
	
	  	  		<p>
	  	  			<label for="email">E-mail: <i>(Must be zmail)</i></label>
	  	  			<input name="email" type="text" id="email" size="30"/>
	  	  		</p>
	
	  	  		<p>
	  	  			<label for="password">Password:</label>
	  	  			<input name="password" type="password" id="password" size="30 "/>
	  	  		</p>
	
				<p> 
					I agree to GoShare's terms and conditions
					<input type="checkbox" name="terms" value="yes">
	
	  	  		<p>
					<input name="submit" type="submit" value="Submit"  class="btn btn-primary btn"/>
	  	  		</p>
	
			</form>
		</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		
	</body>

</html>