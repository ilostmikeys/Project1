<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title> Registration </title>
		
		<!-- bootstrap css file -->
		<link href="style/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
		
		<script type="text/javascript">
		function validateForm() {
			var a=document.forms["reg"]["fname"].value;
			var b=document.forms["reg"]["lname"].value;
			var c=document.forms["reg"]["gender"].value;
			var d=document.forms["reg"]["address"].value;
			var e=document.forms["reg"]["username"].value;
			var f=document.forms["reg"]["password"].value;
			
			if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") 
				&& (d==null || d=="") && (e==null || e=="") && 
				(f==null || f=="")) {
					alert("All Field must be filled out");
					return false;
			}
			if (a==null || a=="") {
				alert("First name must be filled out");
				return false;
			}
			if (b==null || b=="") {
				alert("Last name must be filled out");
				return false;
			}
			if (c==null || c=="") {
				alert("Gender name must be filled out");
				return false;
			}
			if (d==null || d=="") {
				alert("address must be filled out");
				return false;
			}
			if (e==null || e=="") {
				alert("username must be filled out");
				return false;
			}
   	 		if (f==null || f=="") {
				alert("password must be filled out");
				return false;
   	   		}
		}
		</script>
		
	</head>
	
	
	<body>
		<div class="page-header" align="center">
		  <h1> Registration </h1>
		</div>
		
		<form name="reg" action="registration_exec.php" onsubmit="return validateForm()" method="post" id="regform">
			<table width="1000" border="0" align="center" cellpadding="10" cellspacing="0">
				<tr>
					<td colspan="3">
						<div align="center">
						<?php 
							if (!isset($_GET['remarks'])) {
								$remarks=""; 
							} else {
								$remarks=$_GET['remarks']; 
							}	
							if ($remarks==null and $remarks=="") {
								echo '';
							}
							if ($remarks=='success') {
								echo 'Registration Success';
							}	
						?>	
					</div></td>
				</tr>
				<tr>
					<td width="500"><div align="right">First Name:</div></td>
					<td width="600"><input type="text" name="fname" /></td>
				</tr>
				<tr>
	  				<td><div align="right">Last Name:</div></td>
	  				<td><input type="text" name="lname" /></td>
				</tr>
				<tr>
	  				<td><div align="right">Gender:</div></td>
	  				<td><input type="text" name="mname" /></td>
				</tr>
				<tr>
	  				<td><div align="right">Email*:</div></td>
	  				<td><input type="text" name="eaddress" /></td>
				</tr>
				<tr>
	   				<td><div align="right">Username:</div></td>
	   				<td><input type="text" name="username" /></td>
	 			</tr>
				<tr>
	   				<td><div align="right">Password:</div></td>
	   				<td><input type="password" name="password" /></td>
	 			</tr>
				<tr>
					<td width="500"><div align="right"> </div></td>
					<td width="500"><div align="right">* Must use zmail for confirmation</div></td>

																
				</tr>
	 			<tr>
	   				<td><div align="right"></div></td>
	   				<td><input name="submit" type="submit" value="Submit"  class="btn btn-primary btn"/></td>
	 			</tr>
				</table>
			</form>
	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>	
	</body>
	

</html>