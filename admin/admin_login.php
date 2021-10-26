<?php
    // admin login page
    session_start();
    $server = "localhost";
    $name = "root";
    $pass = "";
    $dbname = "quiz_oops";
    // connection
    $conn = mysqli_connect($server,$name,$pass,$dbname) or die(mysqli_error($conn));
    $username = mysqli_real_escape_string($conn, $_POST['un']);
    $password = mysqli_real_escape_string($conn, $_POST['ps']);
    $email = mysqli_real_escape_string($conn, $_POST['em']);
    $query = "SELECT * FROM admin where email = '$email' AND uname = '$username' AND pass = '$password'";
    $result = mysqli_query($conn,$query);
    $check = mysqli_num_rows($result);
    if ($check > 0) {
        $_SESSION['username'] = $username;
        header("location: home.php");
        die();
    } else {
        header("location: index.php");
        die();
    }
?>