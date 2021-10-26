<?php
$msg = "";
// connection
$conn = mysqli_connect("localhost", "root", "", "quiz_oops") or die(mysqli_error($conn));
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['submit'])) {
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
        if ($password == $cpassword) {
            $sql = "UPDATE signup set pass = '$cpassword' WHERE id = '$id'";
            $result = mysqli_query($conn, $sql);
            header("location:..login.php");
        } else {
            $msg = "Password Not Matched";
        }
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
                <h5 class="text-center">Enter your new password !! </h5><br>
                <!-- Start Login Form -->

                <div class="card shadow-lg">
                    <h4 class="card-header text-center" style="color:darkblue;"> Reset Password </h4>
                    <br>
                    <form action="" method="post">
                        <div class="form-group text-center">
                            <label for="password"><b> Password: </b></label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required="true">
                        </div>
                        <div class="form-group text-center">
                            <label for="password "><b> Confirm Password: </b></label>
                            <div class="input-group">
                                <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Enter your confirm password" required="true" data-toggle="password">
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-eye"></i></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <?php echo "<p style='text-align:center;color:red;background-color:yellow;font-weight:bold;'>$msg</p>"; ?>
                        </div>
                        <div>
                            <button class="btn btn-success d-block m-auto" type="submit" name="submit"><i class="fa fa-sign-in" aria-hidden="true"></i> Reset Password </button><br>
                        </div>
                    </form>
                </div>
                <!-- Ending Form -->

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/Jquery-3.3.1.min.js"></script>
    <script src="bootstrap-show-password.min.js"></script>
</body>

</html>