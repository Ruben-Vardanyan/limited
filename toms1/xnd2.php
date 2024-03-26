<?php 
    $find = $text = $replace = $result = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $find = $_POST['find'];
        $replace = $_POST['replace'];
        $text = $_POST['text'];

        $result = str_replace($find,$replace,$text);
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
        <input type="text" name="text" value="<?=$text ?>" required placeholder="text">
        <input type="text" name="find" value="<?=$find ?>" required placeholder="find">
        <input type="text" name="replace" value="<?=$replace ?>" required placeholder="replace">
        <input type="submit" value="replace">
    </form>
    <p>result: <?=$result ?></p>
</body>
</html>