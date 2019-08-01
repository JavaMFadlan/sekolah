<?php
$harga=15000;
$dus=6;
$satuDus=5;
$bekas=2000;
$hsl= $harga * $dus * $satuDus;
$hsl1= $dus * $bekas;
$hasil = $hsl+$hsl1;
echo "Hasilnya = Rp." .$hasil;
?>