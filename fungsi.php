<?php
function cetak_ganjil (){
    for ($i=0; $i <100 ; $i++) { 
        if ($i%2 == 1) {
            echo $i." ";
        }
    }
}
cetak_ganjil();
echo "<br><br><br>";


function cetak_ganjil1($awal, $akhir){
    for ($i=$awal; $i <$akhir ; $i++) { 
        if ($i%2 == 1) {
            echo $i." ";
        }
    }
}
$a = 10;
$b = 50;
echo "Bilangan Ganjil dari $a sampai $b : <br>";
cetak_ganjil1($a,$b);
echo "<br><br><br>";


function luas_lingkaran($jari){
    return 3.14 *$jari *$jari;
}
$r = 7;
echo "luas lingkaran dengan jari-jari $r = ";
echo luas_lingkaran($r);
echo "<br><br><br>";

function tambah_string($str){
    $str = $str . ", Jakarta";
    return $str;
}
//
$str = "universitas Budi Luhur";
echo "\$str = $str <br>";
echo tambah_string ($str). "<br>";
echo "\$str = $str<br>";
echo "<br><br><br>";


function tambah_string1(&$str){
    $str = $str . ", Jakarta";
    return $str;
}

$str = "universitas Budi Luhur";
echo "\$str = $str <br>";
echo tambah_string1($str). "<br>";
echo "\$str = $str<br>";
echo "<br><br><br>";


function luas_lingkaran1($jari){
    return 3.14 *$jari*$jari;
}
$arr = get_defined_functions();
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<br><br><br>";


if (function_exists('exif_read_data')) {
    echo "Fungsi exif_read_data() ada di PHP.<br />\n";
} else {
    echo "Fungsi exif_read_data() tak ada di PHP.<br />\n";
}

?>