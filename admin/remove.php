<?php
session_start();
// checking for duplicate user
if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {
} else {
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
    <div>
        <!-- navbar -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a href="home.php" class="navbar-brand">
                <h3 class="brand" style="font-family:audrey;">SILIGURI GOVERNMENT POLYTECHNIC</h3>
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <h5 class="user"><i class="fa fa-user"></i> User : <?php echo "<span style='color:lightgreen;'>" . $_SESSION['username'] . "</span>"; ?></h5>
                </li>
            </ul>
        </nav>
    </div><!-- End of navbar -->
    <hr color=white>
    <div>
        <!-- navbar -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <ul class="navbar-nav m-auto">
                <li class="nav-item list"><a href="home.php" class="nav-link "><i class="fa fa-home"></i>&nbsp;Home</a></li>
                <li class="nav-item list"><a href="category.php" class="nav-link"><i class="fa fa-list"></i>&nbsp;Subjects</a></li>
                <li class="nav-item list"><a href="questions.php" class="nav-link"><i class="fa fa-question-circle"></i>&nbsp;Questions</a></li>
                <li class="nav-item list"><a href="remove.php" class="nav-link active"><i class="fa fa-trash"></i>&nbsp;Remove</a></li>
                <li class="nav-item list"><a href="student.php" class="nav-link"><i class="fa fa-trash"></i>&nbsp;Student</a></li>
                <li class="nav-item list"><a href="logout.php" class="nav-link"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
            </ul>
        </nav>
        <!-- ending navbar -->
    </div>
    <hr color=white>
    <div class="container-fluid main">
        <div class="row">
            <!-- starting main section -->
            <div class="col-lg-8 offset-2 text-center">
                <h1>Remove Subject</h1><br>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "quiz_oops") or die(mysqli_error($conn));
                //connection of database

                //Fetching the content of category
                $selectquery = "SELECT * FROM category";
                $result = mysqli_query($conn, $selectquery);
                if (mysqli_num_rows($result) > 0) {
                    echo '<table class="table text-light">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Subject Id</th>';
                    echo '<th>Subject Name</th>';
                    echo '<th>Examination Date</th>';
                    echo '<th>Teacher Name</th>';
                    echo '<th>Action</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td>' . strtoupper($row['cat_name']) . '</td>';
                        echo '<td>' . ($row['date']) . '</td>';
                        echo '<td>' . strtoupper($row['teacher']) . '</td>';
                        echo '<td>
                                        <form action="" method="post">
                                        <input type="hidden" name="id" value=' . $row['id'] . '>
                                        <input type="submit" name="quesnum" class="btn btn-light" value="Total Ques">&nbsp;&nbsp;
                                        <input type="submit" name="delete" class="btn btn-light" value="Delete">
                                        </form>
                                        </td>';
                        echo '</tr>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                } else {
                    echo "<p style='color:red'>No Data Found</p>";
                }
                //End of fetching

                // show total questions in alert box
                if (isset($_POST['quesnum'])) {
                    $id = $_POST['id'];
                    $quesquery = "SELECT * FROM questions WHERE cat_id = '$id' ";
                    $que = mysqli_query($conn, $quesquery);
                    $quesnumber = mysqli_num_rows($que);
                    if ($quesnumber > 0) {
                        echo "<script>alert(" . $quesnumber . ")</script>";
                    } else {
                        echo "<p style='color:red'>No Data Found</p>";
                    }
                }

                //Delete the subject
                if (isset($_POST['delete'])) {
                    $id = $_POST['id'];
                    $delquery = "DELETE FROM category WHERE id = '$id'";
                    mysqli_query($conn, $delquery);
                    $deletequery = "DELETE FROM questions WHERE cat_id = '$id'";
                    $check = mysqli_query($conn, $deletequery);
                    if ($check) {
                        echo "<script>window.open('remove.php', '_self')</script>";
                        exit();
                    } else {
                        echo "ERROR";
                    }
                }

                ?>
                <!-- export to excel sheet -->
                <a href="export_subject.php" class="btn btn-light">Excel Import</a>
            </div>
            <!-- ending main section -->
        </div>
    </div>
</body>

</html>