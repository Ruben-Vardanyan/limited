<?php 
    $arr = range(9,77,7);
    

    echo "<ul>";
    foreach ($arr as $value) {
        echo "<li>$value</li>";
    }
    echo "</ul>";
    echo "qanak = " . count($arr) . "<br>";
    echo "array_sum = " . array_sum($arr) . "<br>";
    echo "array_product = " . array_product($arr) . "<br>";
?>