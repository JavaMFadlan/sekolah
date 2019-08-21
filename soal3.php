<?php

for ($i=1; $i <=10 ; $i++) {
    echo "<br><br> Hitung perkalian $i <br>"; 
    for ($j=1; $j <= 10 ; $j++) { 
        $h = $i * $j;
        if ($h%2 == 1) {
            $e = "ganjil";
        } else {
            $e = "genap";
        }
        echo "$i x $j = $h   adalah $e <br>";
    }
}


?>