<?php
    $text1 = isset($_POST['text1']) ? $_POST['text1'] : "";
    $text2 = isset($_POST['text2']) ? $_POST['text2'] : "";
    $text3 = isset($_POST['text3']) ? $_POST['text3'] : "";
    $result = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // find this , replace with this , the whole text;
        $result = "Result:" . str_replace($text2, $text3, $text1);

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
        text
        <input type="text" name="text1" value="<?=$text1 ?>" required><br>
        find
        <input type="text" name="text2" value="<?=$text2 ?>" required><br>
        replace with
        <input type="text" name="text3" value="<?=$text3 ?>" required><br>
        <input type="submit" value="replace"><br>
    </form>
    <p><?=$result ?></p>
</body>
</html>

