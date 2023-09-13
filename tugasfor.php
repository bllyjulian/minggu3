<?php
    $bintang = 5;
    
    for ($i = 1; $i <= $bintang; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    for ($i = 1; $i <= $bintang - 1; $i++) {
        for ($j = 0; $j < $bintang - $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
?>