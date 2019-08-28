<?php
if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];  

    echo "Nama : ".$nama."<br>";
    echo "Alamat : ".$alamat."<br>";
    echo "Hobi : <br>";
    if(isset($_POST['hoby01'])){
        echo "+".$_POST['hoby01']. "<br>";
    }
    if (isset($_POST['hoby02'])){
        echo "+".$_POST['hoby02']. "<br>";
    }
    if(isset($_POST['hoby03'])){
        echo "+".$_POST['hoby03']. "<br>";
    }
    echo "Jenis kelamin : ".$jk."<br>";
    echo "Agama : ".$agama."<br>";
    echo "Asal sekolah : ".$sekolah."<br>";
    }
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="pendaftaran.php"><input type="submit" name="back" value="Back"></a>
</body>
</html>
