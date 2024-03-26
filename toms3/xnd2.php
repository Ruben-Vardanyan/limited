<?php 
    $text1 = $text2 = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $text2 = $_POST['text1'];
        $text1 = $_POST['text2'];
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
        <input type="text" name="text1"  value="<?=$text1 ?>">
        <input type="text" name="text2" value="<?=$text2 ?>">
        <input type="submit" value="change">
    </form>
</body>
</html>