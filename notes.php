<?php
include("class/users.php");
$username = $_SESSION['username'];
$profile = new users;
$profile->cat_show();
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html" charset=UTF-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SGP || Rakesh</title>
    <link rel="stylesheet" href="bootstrap.min.css"><!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Stylesheet -->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.jpg"> <!-- Favicon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Font awesome icons -->
    <style>
        /* home.php navbar style */
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
            font-size: 24px;
            color: black;
        }

        .btn {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div>
            <!-- Start Header -->
            <img class="img-fluid" href="home.php" src="images/L_45933.gif" alt="Siliguri govt polytechnic">
            <h1 class="text-center" style="font-family:audrey;">SILIGURI GOVERNMENT POLYTECHNIC<br><small style="color:darkblue;">Rakesh quiz world</small></h1>
            <hr>
        </div><!-- Ending Header -->
        <div class="row">
            <div class="col-lg-12">
                <ul>
                    <!-- navbar -->
                    <li><a href="home.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                    <li><a href="profile.php"><i class="fa fa-user"></i>&nbsp;Profile</a></li>
                    <li><a href="about.php"><i class="fa fa-address-card"></i>&nbsp;About</a></li>
                    <li><a class="active" href="Notes.php"><i class="fa fa-book"></i>&nbsp;Notes</a></li>
                    <li><a href="#"><i class="fa fa-calendar"></i>&nbsp;<?php echo "Date: " . date("d/m/Y"); ?></li>
                    <li><a href="logout.php" style="float: right;"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
                </ul><!-- ending navbar -->
                <h1>Notes</h1>
                <p style="font-size:21px;font-family:sans-serif;">Wishing you the best of luck! May God bless you with the courage to<br> never lose faith in yourself in the examination hall.<b style="color:darkblue;"> Best of luck !</b></p><!-- Goodluck message -->
                <p class="para">Click Download Button To Download Your Notes......</p><br>
            </div>
            <div class="col-lg-4">
                <a href="notes/notes.txt" class="btn btn-success" download="NOTES"><i class="fa fa-download"></i>&nbsp;Download</a>
                <a href="home.php" class="btn btn-success"><i class="fa fa-backward"></i>&nbsp; Back </a>
            </div>
        </div>
    </div>
    </div>
</body>

</html>