<?php 
    $text = '';
    $result = [];
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $text = $_POST['text'];
        $arr = explode(" ",$text);
   
        foreach($arr as $word){
            if($word == strrev($word)){
                $result[$word] = isset($result[$word]) ? $result[$word] + 1 : 1;
            }
        }
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
        <input type="text" name="text" value="<?= $text ?>" required>
        <input type="submit" value="go">
    </form>
    <p><?=$text; ?></p>
    <p>
        <?php 
            
            foreach($result as $word => $count){
                echo "$word : $count <br>";
            }
        ?>
    </p>
</body>
</html>