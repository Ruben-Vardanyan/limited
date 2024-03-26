<?php 
    $arr = range(8,88,8);
    echo "<ol>";
    foreach ($arr as $val) {
        echo "<li>$val</li>";
    }
    echo "</ol>";

    echo "count : " . count($arr) ."<br>";
    echo "sum : " . array_sum($arr) ."<br>";
    echo "product : " . array_product($arr) ."<br>";
?>