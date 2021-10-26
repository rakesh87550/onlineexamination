<?php
include("class/users.php");
$username = $_SESSION['username'];
$profile = new users;
$profile->users_profile($username);
?>
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
<style>
	/* profile.php navbar style */
	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		border: 1px solid #e7e7e7;
		background-color: #f3f3f3;
	}

	li a {
		display: block;
		color: black;
		text-align: center;
		padding: 14px 25px;
		text-decoration: none;
		float: left;
	}

	li a:hover:not(.active) {
		background-color: #ddd;
		text-decoration: none;
		color: #000;
	}

	li a.active {
		color: white;
		background-color: #4CAF50;
		text-decoration: none;
	}

	/*end of navbar style */
	.para {
		font-size: 20px;
		color: black;
	}
</style>

<body>
	<div class="container">
		<div>
			<!-- Start Header -->
			<img class="img-fluid" href="profile.php" src="images/L_45933.gif" alt="Siliguri govt polytechnic">
			<h1 class="text-center" style="font-family:audrey;">SILIGURI GOVERNMENT POLYTECHNIC<br><small style="color:darkblue;">Rakesh quiz world</small></h1>
			<hr>
		</div><!-- Ending Header -->
		<div class="row">
			<div class="col-lg-12">
				<ul>
					<li><a href="home.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
					<li><a class="active" href="profile.php"><i class="fa fa-user"></i>&nbsp;Profile</a></li>
					<li><a href="about.php"><i class="fa fa-address-card"></i>&nbsp;About</a></li>
					<li><a href="Notes.php"><i class="fa fa-book"></i>&nbsp;Notes</a></li>
					<li><a href="#"><i class="fa fa-calendar"></i>&nbsp;<?php echo "Date: " . date("d/m/Y"); ?></li>
					<li><a href="logout.php" style="float: right;"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
				</ul>
			</div>
			<div class="col-lg-12">
				<h1>User Profile</h1>
				<div class="card">
					<!-- fetching all data from database -->
					<?php
					foreach ($profile->data as $prof) { ?>
						<div class="card-body">
							<h4 class="card-title">Roll No : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $prof['id']; ?></h4>
							<h4 class="card-title">Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $prof['name']; ?></h4>
							<h4 class="card-title">Username : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $prof['username']; ?></h4>
							<h4 class="card-title">Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $prof['email']; ?></h4>
							<p class="para">So it’s exam day today! Warm up your brain and show the world how exceptionally wonderful you are. Wishing you the <b style="color:darkblue;">Best of luck!</b></p>&nbsp;
							<a href="home.php" class="btn btn-success"><i class="fa fa-backward"></i>&nbsp; Back </a>
						</div>

					<?php } ?>
				</div>
				<!-- ending of fetching -->
			</div>
		</div>
	</div>
</body>

</html>