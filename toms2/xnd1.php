<?php
    $arr = range(9,77,7);

    echo "<ul>";
    foreach($arr as $i){
        echo "<li>".$i."</li>";
    }
    echo "</ul>";

    echo "count = " . count($arr) . "<br>";
    echo "s = " . array_sum($arr). "<br>";
    echo "p = " . array_product($arr). "<br>";