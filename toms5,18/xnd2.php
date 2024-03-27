<form action="" method="post">
    name <br>
    <input type="text" name="name"><br>
    male <input type="radio" name="gender" value="male">
    female <input type="radio" name="gender" value="female">
    <br>
    <input type="submit" value="add">
</form>
<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['name']) && isset($_POST['gender'])){
            echo $_POST['name'] . "<br>";
            echo $_POST['gender'] . "<br>";
        }
    }
?>
