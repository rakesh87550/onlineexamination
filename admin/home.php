<?php
    // checking for duplicate user
    session_start();
    if(isset($_SESSION['username']) && ($_SESSION['username'] !=""))
    {

    }else
    {
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset=UTF-8>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SGP || Rakesh</title>
        <link rel="stylesheet" href="../bootstrap.min.css"> <!-- Bootstrap -->
        <link rel="stylesheet" href="style.css"><!-- custom css -->
        <link rel="shortcut icon" type="image/icon" href="../images/favicon.jpg"> <!-- Favicon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Font awesome icons -->
    </head>
    <body>
        <div><!-- navbar -->
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <a href="home.php" class="navbar-brand">
                <h3 class="brand" style="font-family:audrey;">SILIGURI GOVERNMENT POLYTECHNIC</h3>
                </a>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><h5 class="user"><i class="fa fa-user"></i> User : <?php echo "<span style='color:lightgreen;'>".$_SESSION['username']."</span>"; ?></h5></li>
                </ul>
            </nav>
        </div><!-- End of navbar -->
        <hr color=white> 
        <div> <!-- starting of second navbar -->
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
                <ul class="navbar-nav m-auto"> <!-- navbar -->
                    <li class="nav-item list"><a href="home.php" class="nav-link active" ><i class="fa fa-home"></i>&nbsp;Home</a></li>
                    <li class="nav-item list"><a href="category.php" class="nav-link"><i class="fa fa-list"></i>&nbsp;Subjects</a></li>
                    <li class="nav-item list"><a href="questions.php" class="nav-link"><i class="fa fa-question-circle"></i>&nbsp;Questions</a></li>
                    <li class="nav-item list"><a href="remove.php" class="nav-link"><i class="fa fa-trash"></i>&nbsp;Remove</a></li>
                    <li class="nav-item list"><a href="student.php" class="nav-link"><i class="fa fa-trash"></i>&nbsp;Student</a></li>
                    <li class="nav-item list"><a href="logout.php" class="nav-link"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
                </ul>
            </nav>
        </div><!-- Ending of navbar -->
        <hr color=white>
        <div class="container-fluid main"><!-- home content -->
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 text-center">
                <h1>Home</h1><br>
                <h2>Welcome to the online exam admin panel</h2> <br>
                <h4 style="font-family:sans-serif;">At first please add a subject. Then according to the subject please add the questions and their options and correct answer.</h4>
                <h4>Thank You So Much</h4>
                </div>
            </div>
        </div>
    </body>
</html>

