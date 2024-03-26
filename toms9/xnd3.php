<!-- 

INSERT INTO `customers`(`firstname`, `lastname`, `city`) VALUES 
('Ruben','Vardanyan','Yerevan'),
('Ruben2','Vardanyan2','Jermuk'),
('Ruben3','Vardanyan3','Jermuk'),
('Ruben4','Vardanyan4','Yerevan'),
('Ruben5','Vardanyan5','Abovyan'),
('Ruben6','Vardanyan6','Mecamor')
 -->

<?php
    $conn = mysqli_connect("localhost","root","","xnd");

    if(!$conn){
        die("merav");
    }

    $sql = "DELETE FROM `customers` WHERE city = 'Yerevan' or city = 'Jermuk'";

    $conn->query($sql);

    $res = $conn->query("select * from `customers`");

    echo "<ul> ";
    while($row = $res->fetch_assoc()){
        echo "<li>" . $row['lastname'] ." ". $row['firstname'] ." ". $row['city'] ."</li>" ;
    }  
    echo "</ul> ";

?>