<?php
    $conn = mysqli_connect("localhost","root","","students");

    if(!$conn){
        die("merav");
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $sql = "INSERT INTO `base`(`name`, `surname`, `phone`) VALUES ('{$_POST['name']}','{$_POST['surname']}','{$_POST['phone']}')";
        
        if($conn->query($sql) === TRUE){
            echo "added";
        }

        header("Location: xnd3.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" required><br>
        <input type="text" name="surname" required><br>
        <input type="text" name="phone" required><br>
        <input type="submit" value="add">
    </form>
</body>
</html>