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
    $selectquery = "SELECT * FROM category";
    $result = mysqli_query($conn, $selectquery);
    $html = '<table>
                <thead>
                    <tr>
                        <th>Subject Id</th>
                        <th>Subject Name</th>
                        <th>Examination Date</th>
                        <th>Teacher Name</th>
                    </tr>
                </thead>';
        while ($row = mysqli_fetch_assoc($result)) {
            $html .= '
                <tbody>
                    <tr>
                        <td>'.$row['id'].'</td>
                        <td>'.$row['cat_name'].'</td>
                        <td>'.$row['date'].'</td>
                        <td>'.strtoupper($row['teacher']).'</td>
                    </tr>
                </tbody>';  
        }
    $html .= '</table>';
    header('Content-Type:application/xls');
    header('Content-Disposition:attachment;filename=subject_report.xls');
    echo $html;
?>