<?php
    session_start();
    // checking for duplicate user
    if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {
    } else {
        header("location:index.php");
    }

    // fetch data from database
    //connection of database
    $conn = mysqli_connect("localhost", "root", "", "quiz_oops") or die(mysqli_error($conn));

    //Fetching the content of category
    $selectquery = "SELECT * FROM student";
    $result = mysqli_query($conn, $selectquery);
    $html = '<table>
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Subject Name</th>
                        <th>Total Question</th>
                        <th>Attempt Question</th>
                        <th>Right Answer</th>
                        <th>Wrong Answer</th>
                        <th>Not Attempt</th>
                        <th>Result</th>
                    </tr>
                </thead>';
        while ($row = mysqli_fetch_assoc($result)) {
            $html .= '
                <tbody>
                    <tr>
                        <td>'.$row['name'].'</td>
                        <td>'.strtoupper($row['subject']).'</td>
                        <td>'.$row['total_ques'].'</td>
                        <td>'.$row['attempt_ques'].'</td>
                        <td>'.$row['right_answer'].'</td>
                        <td>'.$row['wrong_answer'].'</td>
                        <td>'.$row['not_attempt'].'</td>
                        <td>'.$row['result'].'</td>
                    </tr>
                </tbody>';  
        }
    $html .= '</table>';
    header('Content-Type:application/xls');
    header('Content-Disposition:attachment;filename=student_report.xls');
    echo $html;
?>