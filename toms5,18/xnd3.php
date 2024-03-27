<?php 
    $conn = mysqli_connect("localhost","root","","test");
    if(!$conn){
        die("died" . mysqli_connect_error());
    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['fullname']) && isset($_POST['address']) && isset($_POST['birthyear'])){
            $fullname = $_POST['fullname'];
            $address = $_POST['address'];
            $birthyear = $_POST['birthyear'];

            $sql = "INSERT INTO `persons`( `fullname`, `address`, `birthyear`) 
            VALUES ('$fullname','$address','$birthyear')";

            if($conn->query($sql)){
                echo "the person added";
            }

        }
    }
?>
<form action="" method="post">
    fullname <br>
    <input type="text" name="fullname"><br>
    address <br>
    <input type="text" name="address"><br>
    birthyear <br>
    <input type="number" name="birthyear" id=""><br>
    <input type="submit" value="insert">
</form>
