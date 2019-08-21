<?php

$array = array(
    array("sub","bot"),
    array("bot","tox"),
    array("tox","ic"),
    array("ic","an"),
    array("an","alog")
);

for ($baris=0; $baris < count($array); $baris++) {
    echo "<br><b>Data KE-$baris </b><br>"; 
    for ($kolom=0; $kolom < count($array[$baris]); $kolom++) { 
        echo "<li>" . $array[$baris][$kolom] . "<br>";
    }
}
?>