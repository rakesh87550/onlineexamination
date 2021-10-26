<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset=UTF-8>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SGP || Rakesh</title>
	<link rel="stylesheet" href="../bootstrap.min.css"> <!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="../style.css"> <!-- Stylesheet -->
	<link rel="shortcut icon" type="image/icon" href="../images/favicon.jpg"> <!-- Favicon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Font awesome icons --></head>
	<style>
		body{
    background-color:rgb(48, 48, 48);
}
	</style>
<body>
    <div class="container">
		<div class="text-light"><!-- Start Header -->
		   <center><h1>SILIGURI GOVERNMENT POLYTECHNIC<br><small>Online Exam</small></h1></center>
		   <hr color=white>
            <h3><center>Welcome to admin Panel</center></h3>
            <hr color=white>
		</div><!-- Ending Header -->
        <div class="row">
			<div class="col-lg-3"></div>
				<!-- Start Login Form -->
				<div class="col-lg-6"> 
					<div class="card">
						<h4 class="card-header text-center" style="color:black;">Admin Login Form </h4>
						<br>
						<form action="admin_login.php" method="post">
							<div class="form-group text-center">
								<label for="email "><b><i class="fa fa-envelope-open"></i> Email: </b> </label>
								<input type="email" name="em" id="e" class="form-control" placeholder="Enter your email" required="true" autocomplete="off" patterns="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
							</div>
							<div class="form-group text-center">
								<label for="user "><b><i class="fa fa-user-circle-o"></i> Username: </b></label>
								<input type="text" name="un" id="u" class="form-control" placeholder="Enter username" required="true" autocomplete="off">
							</div>
							<div class="form-group text-center">
								<label for="pass "><b><i class="fa fa-low-vision"></i> Password:</b> </label>
								<input type="password" name="ps" id="p" class="form-control" placeholder="Enter password" required="true" pattern=".{5,}">
							</div>
							<div>
							<button class="btn btn-dark d-block m-auto" type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i> Login </button><br><!-- submit button -->
							</div>
						</form>
					</div>
			</div><!-- Ending Form -->
		</div>
	</div>  
</body>
</html>