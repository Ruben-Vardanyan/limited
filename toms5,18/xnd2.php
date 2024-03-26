
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
        name <br>
        <input type="text" name="name" required />
        <br>
        male
        <input type="radio" name="gender" required value="male">
        female
        <input type="radio" name="gender" required value="female">
        <br>
        <br>
        <input type="submit">
    </form>

    <?php 
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            echo "<h1>{$_POST['name']}</h1>";
            echo "<h3>{$_POST['gender']}</h3>";
        }
    ?>
</body>
</html>