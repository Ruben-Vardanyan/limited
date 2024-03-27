<?php 
    $conn = mysqli_connect("localhost","root","","test");

    if(!$conn){
        die("died: " . $conn->connect_error());
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST["fullname"]) && isset($_POST["birthyear"])){
            $sql = "INSERT INTO `student`(`fullname`, `birthyear`) 
            VALUES ('{$_POST['fullname']}','{$_POST['birthyear']}')";
            
            if($conn->query($sql)){
                echo "the student added";
            }
        }

        $conn->close();
    }
?>
<form action="" method="post">
    fullname <br>
    <input type="text" name="fullname" id=""> <br>
    birthyear <br>
    <input type="number" name="birthyear" min="1900" max="2024" id=""> <br>
    <input type="submit" value="insert">
</form>
