<?php
include("../class/users.php");
$cats = new users;
$cats->cat_show();
// checking for duplicate user
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
        <div>
         <!-- navbar -->
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item list"><a href="home.php" class="nav-link" ><i class="fa fa-home"></i>&nbsp;Home</a></li>
                    <li class="nav-item list"><a href="category.php" class="nav-link"><i class="fa fa-list"></i>&nbsp;Subjects</a></li>
                    <li class="nav-item list"><a href="questions.php" class="nav-link active"><i class="fa fa-question-circle"></i>&nbsp;Questions</a></li>
                    <li class="nav-item list"><a href="remove.php" class="nav-link"><i class="fa fa-trash"></i>&nbsp;Remove</a></li>
                    <li class="nav-item list"><a href="student.php" class="nav-link"><i class="fa fa-trash"></i>&nbsp;Student</a></li>
                    <li class="nav-item list"><a href="logout.php" class="nav-link"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
                </ul>
            </nav>
            <!-- ending of navbar -->
        </div>
        <hr color=white>
        <!-- main section -->
        <div class="container-fluid main">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                <!-- starting for question form -->
                    <form action="addques.php" method="post">
						<div class="form-group text-center">
							<label for="question "><b> Question </b> </label>
							<input type="text" name="ques" id="ques" class="form-control" placeholder="Enter your question" required="true">
						</div>
						<div class="form-group text-center">
							<label for="opt1"><b> Option-1 </b></label>
							<input type="text" name="opt1" id="opt1" class="form-control" placeholder="Enter your first option" required="true">
                        </div>
                        <div class="form-group text-center">
							<label for="opt2"><b> Option-2 </b></label>
							<input type="text" name="opt2" id="opt2" class="form-control" placeholder="Enter your second option" required="true">
                        </div>
                        <div class="form-group text-center">
							<label for="opt3"><b> Option-3 </b></label>
							<input type="text" name="opt3" id="opt3" class="form-control" placeholder="Enter your third option" required="true">
                        </div>
                        <div class="form-group text-center">
							<label for="opt4"><b> Option-4 </b></label>
							<input type="text" name="opt4" id="opt4" class="form-control" placeholder="Enter your fourth option" required="true">
                        </div>
                        <div class="form-group text-center">
							<label for="ans "><b> Answer </b></label>
							<input type="text" name="ans" id="ans" class="form-control" placeholder="Enter your answer" required="true">
						</div>
                        <div class="form-group text-center">
                            <select class="form-control" id="cat" name="cat">
                                <option>Select a Subject</option>
                                <?php  
                                //php category show
                                foreach($cats->cat as $category) {?>
                                <option value="<?php echo $category['id']; ?>"><?php echo $category['id']; ?>. <?php echo $category['cat_name']; ?></option> 
                                <!-- show category -->
                                <?php } ?>
                            </select>
						</div>
						<div>
						<button class="btn btn-light d-block m-auto" type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i> Submit </button><br><!-- submit button -->
						</div>
					</form>
                    <!-- ending form -->
                </div>
            </div>
        </div>
        <!-- ending main section -->
    </body>
</html>

