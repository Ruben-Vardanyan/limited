<?php
    $fullname = $address = $year = "";
    $country = "Armenia";
    $conn = mysqli_connect("localhost","root","","xnd");

    if(!$conn){
        die("died");
    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];
        $country = $_POST['country'];
        $year = $_POST['year'];
        $sql = "INSERT INTO `persons`( `fullname`, `address`, `country`, `birthyear`) VALUES ('$fullname','$address','$country','$year')";
        

        $conn->query($sql);

        
         
    }
    $conn->close();

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
        fullname
        <input type="text" name="fullname" value="<?=$fullname ?>"  required><br>
        address
        <input type="text" name="address" value="<?=$address ?>"  required><br>
        country
        <input type="text" name="country" value="<?=$country ?>"  required><br>
        year
        <select name="year">
            <?php foreach (range(2024,1900,-1) as $years) {
                if($year == $years){
                    echo "<option value='$years' selected>$years</option>";
                }else{
                    echo "<option value='$years'>$years</option>";
                }
                
            } ?>
        </select>
        <input type="submit" value="add">
    </form>
</body>
</html>



<!--  -->
<?php
    // session_start();
    
    
    // $conn = mysqli_connect("localhost","root","","xnd");

    // if(!$conn){
    //     die("died");
    // }
    // if($_SERVER['REQUEST_METHOD'] == "POST"){
    //     $fullname = $_SESSION['fullname'] = $_POST['fullname'];
    //     $address = $_SESSION['address'] = $_POST['address'];
    //     $country = $_SESSION['country'] = $_POST['country'];
    //     $year = $_SESSION['year'] = $_POST['year'];
    //     $sql = "INSERT INTO `persons`( `fullname`, `address`, `country`, `birthyear`) 
    //     VALUES ('$fullname','$address','$country','$year')";

    //     $conn->query($sql);  
        
    //     header("Location: xnd3.php");
    //     exit();
    // }
    // $conn->close();

?>

    <!-- <form action="" method="post">
        fullname
        <input type="text" name="fullname" value="<?=$_SESSION['fullname'] ?>"  required><br>
        address
        <input type="text" name="address" value="<?=$_SESSION['address'] ?>"  required><br>
        country
        <input type="text" name="country" value="<?=$_SESSION['country'] ?>"  required><br>
        year
        <select name="year">
            <?php foreach (range(2024,1900,-1) as $years) {
                echo "<option value='$years' ". ($_SESSION['year'] == $years ? "selected" : "") .">$years</option>";
            } ?>
        </select>
        <input type="submit" value="add">
    </form> -->