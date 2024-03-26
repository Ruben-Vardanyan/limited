<?php 
    $conn = mysqli_connect("localhost","root","","students");
    if(!$conn){
        die("died");
    }
    $sql = "create table if not exists base (
        id int primary key auto_increment,
        name varchar(150),
        surname varchar(150),
        phone varchar(150)
    ) ";

    $conn->query($sql);

    
    $sql = "INSERT INTO `base`(`id`,`name`, `surname`, `phone`) VALUES 
        ('1','Ruben','Vardanyan','151515'),
        ('2','Ruben2','Vardanyan2','051515'),
        ('3','Ruben3','Vardanyan3','161456'),
        ('4','Ruben4','Vardanyan4','451627'),
        ('5','Ruben5','Vardanyan5','142615')
    ";
    $conn->query($sql);

    $sql = "select * from base";

    $res = $conn->query($sql);
    echo "<ul>";
    while($row = $res->fetch_assoc()){
        echo "<li>".$row['id']." " .$row['name']." ".$row['surname']." ".$row['phone']."</li>";

    }
    echo "</li>";

    $conn->close();
?>


