<?php 
    $conn = mysqli_connect("localhost","root","","students");

    if(!$conn){
        die("merav");
    }
    
    $sql = "create table if not exists base (
        id int primary key auto_increment,
        name varchar(150),
        surname varchar(150),
        phone varchar(150)
    ) ";

    $conn->query($sql);


    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $sql = "INSERT INTO `base`(`name`, `surname`, `phone`) VALUES ('{$_POST['name']}','{$_POST['surname']}','{$_POST['phone']}')";

        $conn->query($sql);

        header("Location: xnd3.php");
        exit();
    }
?>

<form action="" method="post">
    <input type="text" name="name" id="">
    <input type="text" name="surname" id="">
    <input type="text" name="phone" id="">
    <input type="submit" value="add">
</form>
