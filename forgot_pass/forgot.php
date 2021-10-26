<?php
$msg = "";
// connection
$conn = mysqli_connect("localhost", "root", "", "quiz_oops") or die(mysqli_error($conn));
// fetch value from form
// login the user
if (isset($_POST['submit'])) {
	$email = mysqli_real_escape_string($conn, $_POST['e']);
	$query = "SELECT * FROM signup WHERE email = '$email'";
	$res = mysqli_query($conn, $query);
	$count = mysqli_num_rows($res);
	if ($count > 0) {
		$res = mysqli_query($conn, "SELECT id,name FROM signup WHERE email = '$email'");
		$row = mysqli_fetch_assoc($res);
		$id = $row['id'];
		$name = $row['name'];

		// send  mail    
		$subject = "RESET YOUR FORGOT PASWORD";
		$body = "Hello, $name . Click Here To Reset your password http://sgp.inventweb.in/forgot/reset_pass.php?id=$id";
		$sender_mail = "From: rakesh2020onlineexam@gmail.com";
		if (mail($email, $subject, $body, $sender_mail)) {
			$msg = "Your Reset Password Link Was Sended To $email Id";
		} else {
			$msg =  "Email sending failed....!";
		}
	} else {
		header("location:forgot.php?run=fail");
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html" charset=UTF-8>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SGP || Rakesh</title>
	<link rel="stylesheet" href="../bootstrap.min.css"> <!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="../style.css"> <!-- Stylesheet -->
	<link rel="shortcut icon" type="image/icon" href="../images/favicon.jpg"> <!-- Favicon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Font awesome icons -->
</head>

<body>
	<div class="container">
		<div>
			<!-- Start Header -->
			<img class="img-fluid" src="../images/L_45933.gif" alt="Siliguri govt polytechnic">
			<h1 class="text-center" style="font-family:audrey;">SILIGURI GOVERNMENT POLYTECHNIC<br><small style="color:darkblue;"><b>Welcome to Rakesh quiz world</b></small></h1>
			<hr>
		</div><!-- Ending Header -->

		<div class="row">
			<div class="col-lg-6 offset-3">
				<h5 class="text-center">If you forgot your password !! <br><br>Please enter your email address which is used for signup to send your password</h5><br>
				<!-- Start Login Form -->

				<div class="card shadow-lg">
					<h4 class="card-header text-center" style="color:darkblue;"> Forgot Password </h4>
					<br>
					<form action="" method="post">
						<div class="form-group text-center">
							<label for="email "><b> Email: </b></label>
							<input type="email" name="e" id="e" class="form-control" placeholder="Enter your email" required="true" autocomplete="off">
						</div>
						<div>
							<?php //checking for invalid user
							if (isset($_GET['run']) && $_GET['run'] == "fail") {
								echo "<p class='text-center' style='color:red'>Enter a valid email address</p>";
							}
							?>
							<?php echo "<p style='text-align:center;color:red;background-color:yellow;font-weight:bold;'>$msg</p>"; ?>
						</div>
						<div>
							<button class="btn btn-success d-block m-auto" type="submit" name="submit"><i class="fa fa-sign-in" aria-hidden="true"></i> Send Mail </button><br>
						</div>
					</form>
				</div>
				<!-- Ending Form -->

			</div>
		</div>
	</div>
</body>

</html>