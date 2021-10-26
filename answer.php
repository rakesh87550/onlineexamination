<?php
include("class/users.php");
$ans = new users;
$answer = $ans->answer($_POST);
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
        /* answer.php navbar style */
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
        .margin {
            margin-top: 23%;
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
                    <li><a class="active" href="answer.php"><i class="fa fa-file-text"></i>&nbsp;Answer</a></li>
                    <li><a href="#"><i class="fa fa-calendar"></i>&nbsp;<?php echo "Date: " . date("d/m/Y"); ?></li>
                    <li><a name="logout" href="logout.php" style="float: right;"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
                </ul><!-- ending navbar -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <h1>Answers</h1>
                <?php
                $total_ques = $answer['right'] + $answer['wrong'] + $answer['no_answer'];
                $attempt_ques = $answer['right'] + $answer['wrong'];
                ?>
                <div class="card">
                    <div class="card-body">
                        <!--  all answers are show -->
                        <h5 class="card-title" style="color:red;">Total Questions : &emsp;&emsp;&nbsp;&nbsp;<?php echo $total_ques; ?></h5>
                        <hr>
                        <h5 class="card-title" style="color:darkgreen;">Attempt Questions : &emsp;<?php echo $attempt_ques; ?></h5>
                        <hr>
                        <h5 class="card-title" style="color:darkgreen;">Right Answers : &emsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;<?php echo $answer['right']; ?></h5>
                        <hr>
                        <h5 class="card-title" style="color:darkgreen;">Wrong Answers : &nbsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;<?php echo $answer['wrong']; ?></h5>
                        <hr>
                        <h5 class="card-title" style="color:darkgreen;">Not Attempt : &nbsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $answer['no_answer']; ?></h5>
                        <hr>
                        <h5 class="card-title" style="color:darkblue;"><b>Your Result : &emsp;&emsp;&emsp;&nbsp;&nbsp;
                                <?php $per = ($answer['right'] * 100) / ($total_ques);
                                echo round($per, 3) . "%";
                                ?></b></h5>
                        <!--  end of all answers are show -->
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card margin">
                    <div class="card-body">
                        <h2 class="card-title" style="color:darkblue;"><b>Siliguri Government Polytechnic</b></h2><br><br>
                        <h5 class="card-title">If you complete your exam please proceed to logout.</h5>
                        <h5 class="card-title">Thank You....</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    // Database Connection
    $conn = mysqli_connect("localhost", "root", "", "quiz_oops");
    $name = $_SESSION['username'];
    $subject = "html";
    // $_SESSION['subject']

    $right_answer = $answer['right'];
    $wrong_answer = $answer['wrong'];
    $not_attempt = $answer['no_answer'];
    $result = round($per, 3) . "%";
    // Insert Into Database

    $inquery = "INSERT INTO student(`name`, `subject`, `total_ques`, `attempt_ques`, `right_answer`, `wrong_answer`, `not_attempt`, `result`) VALUES('" . $name . "', '" . $subject . "', '" . $total_ques . "', '" . $attempt_ques . "', '" . $right_answer . "', '" . $wrong_answer . "', '" . $not_attempt . "', '" . $result . "')";
    $check = mysqli_query($conn, $inquery);
    // Send Mail
    $fetchquery = "SELECT * FROM signup WHERE username = '$name'";
    $run = mysqli_query($conn, $fetchquery);
    $row = mysqli_fetch_assoc($run);
    $mail = $row['email'];

    $subject = "CHECK YOUR RESULT!!";
    $body = "Hello, $name . Total Question $total_ques . Right Answer $right_answer . Wrong Answer $wrong_answer . Not Attempt $not_attempt Result $result ";
    $sender_mail = "From: rakesh2020onlineexam@gmail.com";
    // if (mail($mail, $subject, $body, $sender_mail)) {
    //     $msg = "Your Reset Password Link Was Sended To $mail Id";
    // } else {
    //     $msg =  "Email sending failed....!";
    // }
    // ?>
</body>

</html>