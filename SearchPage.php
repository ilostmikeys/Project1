<?php
session_start();
?><!DOCTYPE html>
<html>
<head>
	
	<!-- bootstrap css file -->
	<link href="style/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
	


	
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
		height:30px;
		line-height:23px;
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
	
</head>
<center>
	<body class="body">
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
		
		
<br>
<br>
<br>
<br>

<form name="search">
<p style="font-family:helvetica; font-size:22pt">Find a course</p>
	<div class="input-group">
	  <input type="text" id="searchbar">
	</div>
	<br>

	
</form>

<input type="button" id="search" class="submit" value="Find" onclick="location.href='SearchResult.php?key='+ document.getElementById('searchbar').value">


</body>
</center>
	
</html>