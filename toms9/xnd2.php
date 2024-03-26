<?php
    $num1 = $num2 =$res = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $res = $num1 * $num2;
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
        <input type="text" name="num1"  value="<?=$num1 ?>" required><br>
        <input type="text" name="num2"  value="<?=$num2 ?>" required><br>
        <input type="text" name="res"  value="<?=$res ?>" disabled><br>
        <input type="submit" value="count">
    </form>
</body>
</html>