<?php

if (isset($_POST['login'])){
    $bintang = $_POST['bintang'];

    for ($i=1; $i <= $bintang ; $i++) {
        for ($t=$bintang; $t >= $i ; $t--) { 
            echo "&nbsp";
        }
        for ($e=1; $e <= $i ; $e++){ 
                echo "*";
        }
        echo "<br>";
    }
        echo "Jumlah Bintang = $bintang";
    }
?>