<?php
    $conn = mysqli_connect("localhost","root","","students");

    if(!$conn){
        die("merav");
    }
    $sql = "SELECT * from base";
    $res = $conn->query($sql);

    $students = [];

    while($row = $res->fetch_assoc()){
        $students[] = $row;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td, th{
            border:1px solid #000;
            border-collapse: collapse;
        }
        td,th{
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <table>
            <?php 
                echo "<tr>";
                echo "<th>id</th>";
                echo "<th>name</th>";
                echo "<th>surname</th>";
                echo "<th>phone</th>";
                echo "</tr>";
                foreach($students as $student){
                    echo "<tr>";
                    echo "<td>{$student['id']}</td>";
                    echo "<td>{$student['name']}</td>";
                    echo "<td>{$student['surname']}</td>";
                    echo "<td>{$student['phone']}</td>";
                    echo "</tr>";

                }
            ?>
    </table>
</body>
</html>
