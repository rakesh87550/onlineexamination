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
        </div><!-- End of navbar --><hr color=white>
        <div><!-- second navbar -->
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <ul class="navbar-nav m-auto"> <!-- navbar -->
                    <li class="nav-item list"><a href="home.php" class="nav-link" ><i class="fa fa-home"></i>&nbsp;Home</a></li>
                    <li class="nav-item list"><a href="category.php" class="nav-link active"><i class="fa fa-list"></i>&nbsp;Subjects</a></li>
                    <li class="nav-item list"><a href="questions.php" class="nav-link "><i class="fa fa-question-circle"></i>&nbsp;Questions</a></li>
                    <li class="nav-item list"><a href="remove.php" class="nav-link"><i class="fa fa-trash"></i>&nbsp;Remove</a></li>
                    <li class="nav-item list"><a href="student.php" class="nav-link"><i class="fa fa-trash"></i>&nbsp;Student</a></li>
                    <li class="nav-item list"><a href="logout.php" class="nav-link"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
                </ul>
            </nav>   
        </div><!-- End of navbar -->
        <hr color=white>
        <div class="container-fluid main">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <h1 class="text-center">Subjects</h1><br>
                        <form action="addsub.php" method="post"><!--Start Form -->
                            <div class="form-group text-center">
                                <label for="subject"><b><h3> Enter a subject : </h3></b></label>
                                <input type="text" name="sub" id="sub" class="form-control" placeholder="Enter a subject name" required="true" autocomplete="off">
                            </div>
                            <div class="form-group text-center">
                                <label for="Examination Date"><b><h3> Examination Date : </h3></b></label>
                                <input type="date" name="date" id="date" class="form-control" placeholder="Enter the date" required="true">
                            </div>
                            <div class="form-group text-center">
                                <label for="teacher"><b><h3> Teacher Name : </h3></b></label>
                                <input type="text" name="teacher" id="teacher" class="form-control" placeholder="Enter the teacher name" required="true" autocomplete="off">
                            </div>
                        <?php if(isset($_GET['run'])&& $_GET['run']=="success") 
							{echo "<center style='color:white;'><b>You have been successfully inserted</b></center>"; //icorrect message checking and print
							} 
                        ?>
                        <?php if(isset($_GET['run'])&& $_GET['run']=="fail") 
							{echo "<center style='color:white;'><b>This subject is already exists !!</b></center>"; //incorrect message checking and print
							} 
						?>
                            <div>
                                <button class="btn btn-light d-block m-auto" type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i> Submit </button><br>
                            </div>
                        </form> <!-- End Form -->
                </div>
            </div>
        </div>
    </body>
</html>

