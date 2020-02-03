 <!DOCTYPE html>
 <html>
 <head>
 <title> coding cafe sign and login </title>
 
		<!--getting the w3 school bootstrap code-->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
 
 </head>
	<style>
		body{
			background-color:LightGray;
			overflow-x:hidden;
		}
		#centered1{
		position: absolute;
		font-size: 10vw;
		top: 30%;
		left: 30%;
		transform: translate(-50%, -50%);
	}
	#centered2{
		position: absolute;
		font-size: 10vw;
		top: 50%;
		left: 40%;
		transform: translate(-50%, -50%);
	}
	#centered3{
		position: absolute;
		font-size: 10vw;
		top: 70%;
		left: 30%;
		transform: translate(-50%, -50%);
	}
	
	#signup{
		width: 60%;
		border-radius: 30px;
	}
	#login{
		width: 60%;
		background-color: #fff;
		border: 1px solid #1da1f2;
		color: #1da1f2;
		border-radius: 30px;
	}
	#login:hover{
		width: 60%;
		background-color: #fff;
		color: #1da1f2;
		border: 2px solid #1da1f2;
		border-radius: 30px;
	}
	.well{
		background-color: #187FAB;
	}
	</style>
 
 <body bgcolor="#E6E6FA">
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="color:white;">SOCIAL_NETWORK</h1></center>
				
			</div>
		</div>
	</div>
	<div class="row">
	
	<div class="col-sm-6" style"Left:0.5x;">
		<img src="images/368917.jpg" class="img-rounded" title="social_netword" width="600px"
		height="565px">
		<div id="centered1" class="centered"><h3 style="color:white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Follow Your Interests.</strong></h3></div>
			<div id="centered2" class="centered"><h3 style="color:white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Hear what People are talking about.</strong></h3></div>
			<div id="centered3" class="centered"><h3 style="color:white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Join the Conversation.</strong></h3></div>
		</div>
		
		<div class="col-sm-6" style="left:8%:">
			<img src="images/LOGO.jpg" class="img-rounded" title="Coding cafe" width="100px" height="100px">
			<h2><strong>See what's happening in <br> the world right now</strong></h2><br><br>
			<h4><strong>join Coding Cafe Today.</strong></h4>
			<form method="post" action="">
				<button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button><br><br>
				<?php
					if(isset($_POST['signup'])){
						echo "<script>window.open('signup.php','_self')</script>";
					}
				?>
				<button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
				<?php
					if(isset($_POST['login'])){
						echo "<script>window.open('signin.php','_self')</script>";
					}
				?>
			</form>
	</div>
	</div>
 </body>
 
 </html>
 