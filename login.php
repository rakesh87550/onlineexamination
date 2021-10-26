<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html" charset=UTF-8>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SGP || Rakesh</title>
	<link rel="stylesheet" href="bootstrap.min.css"> <!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="style.css"> <!-- Stylesheet -->
	<link rel="shortcut icon" type="image/icon" href="images/favicon.jpg"> <!-- Favicon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Font awesome icons -->
</head>

<body>
	<div class="container">
		<div>
			<!-- Start Header -->
			<img class="img-fluid" src="images/L_45933.gif" alt="Siliguri govt polytechnic">
			<h1 class="text-center" style="font-family:audrey;">SILIGURI GOVERNMENT POLYTECHNIC<br><small style="color:darkblue;"><b>Welcome to Rakesh quiz world</b></small></h1>
			<hr>
		</div><!-- Ending Header -->
		<div class="row">
			<!-- Start Login Form -->
			<div class="col-lg-6">
				<div class="card">
					<h4 class="card-header text-center" style="color:darkblue;"> LogIn Form </h4>
					<br>
					<form action="signin_sub.php" method="post">
						<?php
						if (isset($_GET['run']) && $_GET['run'] == "failed") //incorrect message chacking and print
						{
							echo "<center style='color:red;'><b>Your username or password is incorrect !!</b></center>";
						}
						?>
						<div class="form-group text-center">
							<label for="user "><b> Username: </b></label>
							<input type="text" name="u" id="u" class="form-control" placeholder="Enter username" required="true" autocomplete="off">
						</div>
						<div class="form-group text-center">
							<label for="pass "><b> Password:</b> </label>
							<input type="password" name="p" id="p" class="form-control" placeholder="Enter password" required="true">
						</div>
						<a class="btn-link" href="forgot_pass/forgot.php" style="margin-left:9px;">Forgot password!</a>
						<div>
							<button class="btn btn-success d-block m-auto" type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i> Login </button><br>
						</div>
					</form>

				</div>
			</div><!-- Ending Form -->
			<!-- Start Signup Form -->
			<div class="col-lg-6">
				<div class="card">
					<h4 class="card-header text-center" style="color:darkblue;"> SignUp Form </h4>
					<br>
					<form action="signup_sub.php" method="post">
						<div class="form-group text-center">
							<label for="name "><b> Name: </b></label>
							<input type="text" name="n" id="n" class="form-control" placeholder="Enter your name" required="true" autocomplete="off">
						</div>
						<div class="form-group text-center">
							<label for="user "><b>Username:</b> </label>
							<input type="text" name="u" id="u" class="form-control" placeholder="Enter your username" required="true" autocomplete="off">
						</div>
						<div class="form-group text-center">
							<label for="email "><b>Email:</b> </label>
							<input type="email" name="e" id="e" class="form-control" placeholder="Enter your email" required="true" autocomplete="off" patterns="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
						</div>
						<div class="form-group text-center">
							<label for="pass "><b>Password:</b> </label>
							<input type="password" name="p" id="p" class="form-control" placeholder="Enter your password (!Atleast 5 characters)" required="true" pattern=".{5,}">
						</div>
						<?php if (isset($_GET['run']) && $_GET['run'] == "success") {
							echo "<center style='color:darkblue;'><b>You have been successfully registered <br> Please Login !!</b></center>"; //incorrect message chacking and print
						}
						?>
						<div>
							<button class="btn btn-success d-block m-auto" type="submit"><i class="fa fa-user" aria-hidden="true"></i> Signup </button><br>
						</div>
					</form>
				</div>
			</div><!-- Ending Form -->
		</div>
	</div>
</body>

</html>