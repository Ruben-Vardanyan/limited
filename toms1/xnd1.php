<?php
    // $arr = [];
    // echo "<ol>";
    // for ($i=8; $i <= 88; $i++) { 
    //     if($i % 8 == 0){
    //         $arr[] = $i;
    //         echo "<li>".$i."</li>";
    //     }
    // }
    // echo "</ol>";

    // start, end, step
    $arr = range(8,88,8); 
    echo "<ol>";
    foreach($arr as $i):
        echo "<li>".$i."</li>";
    endforeach;    
    echo "</ol>";   

    echo "count = " . count($arr) . "<br>";
    echo "s = " . array_sum($arr) . "<br>";
    echo "p = " . array_product($arr). "<br>";


