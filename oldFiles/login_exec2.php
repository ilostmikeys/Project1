<!DOCTYPE html>

	<head>
		
		<title>Login</title>
	</head>
	
	<body>
	<?php
 	session_start();
 	include('toDatabase.php');
 	if(isset($_POST['submit'])) {
  		$email = trim($_POST['email']);
  		$password = trim($_POST['password']);
  		$query = "SELECT * FROM user WHERE email='$email' AND password='$password' AND com_code IS NULL";
  		$result = mysqli_query($mysqli,$query)or die(mysqli_error());
  		$num_row = mysqli_num_rows($result);
  		$row=mysqli_fetch_array($result);
  		if( $num_row ==1 ) {
   			$_SESSION['user_name']=$row['username'];
   			header("Location: homepage.php");
   			exit;
  		} else {
   			echo 'false';
		}
	}
?>
<div class="login_form">
<form action="homepage.php" method="post" >
 <p>
  <label for="email">E-mail:</label>
  <input name="email" type="text" id="email" size="30"/>
 </p>
 <p>
  <label for="password">Password:</label>
  <input name="password" type="password" id="password" size="30"/>
 </p>
 <p>
  <input name="submit" type="submit" value="Submit"/>
 </p>
</form>
</div>
</body>
</html>