<?php
        // add subject
        include("../class/users.php"); // class page
        $obj = new users;
        // connection
        $conn = mysqli_connect("localhost","root","","quiz_oops") or die(mysqli_error($conn));
        $cat_name = $_POST['sub'];
        $date = $_POST['date'];
        $teacher = $_POST['teacher'];
        $query = "SELECT * FROM category WHERE cat_name='$cat_name'";
        $result = mysqli_query($conn, $query);
        $check = mysqli_num_rows($result);
        if($check > 0)
        {
            if($obj->signup($result))
            {
                {
                    $obj->url("category.php?run=fail"); // If already exists
                }
            }
        } else
        {
            $inquery = "INSERT INTO category(cat_name,date,teacher) VALUES('$cat_name','$date','$teacher')";
            $res = mysqli_query($conn, $inquery);
            header("location: category.php");
            // if($obj->signup($res))
            // {
            //     {
            //         $obj->url("category.php?run=success"); //correctly store value to database
                    
            //     }
            // }
        }
    ?>
