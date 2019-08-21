<?php

$indo = 100;
$arab = 200;
$mtk = 70;
$rata = ($indo + $arab + $mtk)/3;

if ($rata >= 90  &&  $rata <= 100) {
    $g = "A";
    $l = "lulus";
}
else if ($rata >= 80 &&  $rata <= 90) {
    $g = "B";
    $l = "lulus";
}
else if ($rata >= 70 &&  $rata <= 80) {
    $g = "C";
    $l = "lulus";
}
else if ($rata >= 60 &&  $rata <= 70) {
    $g = "D";
    $l = "tidak lulus";
}
else if ($rata < 60 &&  $rata >= 0) {
    $g = "E";
    $l = "tidak lulus";
}
if ($rata > 100 || $indo > 100 || $arab > 100 || $mtk > 100 || $mtk > 100 || $arab < 0 || $indo < 0  || $rata < 0){
    $g = "Nilai Tak Sesuai";
}
 echo "B.indo = $indo <br>";
 echo "B.arab = $arab <br>";
 echo "Matematika = $mtk <br>";
 echo "grade = $g <br> keterangan = $l";
?>