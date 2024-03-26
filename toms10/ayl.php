<?php 

        if(isset($_POST['name']) && isset($_POST['gender'])){
            echo $_POST['name']. " " . $_POST['gender'];
        } else{
            header("Location: xnd.php");
            exit();
        }
    
?>