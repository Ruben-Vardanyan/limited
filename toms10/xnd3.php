<?php 
    session_start();
    $conn = mysqli_connect("localhost","root","","xnd");

    if(!$conn){
        die("died");
    }

    $_SESSION['fullname'] = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : "";
    $_SESSION['university'] = isset($_SESSION['university']) ? $_SESSION['university'] : "HAPH";
    $_SESSION['birthyear'] = isset($_SESSION['birthyear']) ? $_SESSION['birthyear'] : "";


    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $fullname = $_SESSION['fullname'] = $_POST['fullname'];
        $university = $_SESSION['university'] = $_POST['university'];
        $birthyear = $_SESSION['birthyear'] = $_POST['birthyear'];

        $conn->query("INSERT INTO `student`(`fullname`, `university`, `birthyear`) 
        VALUES ('$fullname','$university','$birthyear')");

        header("Location: xnd3.php");
        exit();
    } 
    $conn->close();
?>

<form action="" method="post">
    fullname
    <input type="text" name="fullname" value="<?=$_SESSION['fullname']?>" required><br>
    university
    <input type="text" name="university" value="<?=$_SESSION['university']?>" required><br>
    birthdate
    <select name="birthyear"  required>
        <?php
            foreach(range(2024,1900,-1) as $year){
                echo "<option value='$year' ".($_SESSION['birthyear'] == $year ? "selected" : "" ).">$year</option>";
            }
        ?>
    </select><br>
    <input type="submit" value="insert">
</form>