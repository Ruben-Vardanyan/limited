<?php 
    function paragic($ej1,$s){
        //$ej1 * $ej2 / 2 = $s
        $ej2 = $s * 2 / $ej1;

        $nerqn = sqrt($ej1*$ej1 + $ej2*$ej2);

        return $nerqn + $ej1 + $ej2;

    }
    // 3 4 5
    echo paragic(4,6);

?>