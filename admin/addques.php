<?php
    // Add question and answers
    // connection
    $conn = mysqli_connect("localhost","root","","quiz_oops") or die(mysqli_error($conn));
    // questions aoptions and answers
    $ques = htmlentities($_POST['ques']);
    $opt1 = htmlentities($_POST['opt1']);
    $opt2 = htmlentities($_POST['opt2']);
    $opt3 = htmlentities($_POST['opt3']);
    $opt4 = htmlentities($_POST['opt4']);
    $ans = htmlentities($_POST['ans']);
    $array = [$opt1,$opt2,$opt3,$opt4];
    $answer = array_search($ans,$array);
    $cat = $_POST['cat']; // category
    $query = "INSERT INTO questions(question,ans1,ans2,ans3,ans4,ans,cat_id) VALUES('$ques','$opt1','$opt2','$opt3','$opt4','$answer','$cat');";
    mysqli_query($conn,$query);
    header("location: questions.php");
?>