.<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form method="post" name = "input">
        Nama : <input type = "text" name="nama"><br>
        Nilai 1 : <input type = "text" name="nilai"><br>
        Nilai 2 : <input type = "text" name="nilai2"><br>
        <input type="submit" name="input" value="input">
    </form>
</body>
</html>
<?php

if (isset($_POST['input'])){
    $nama = $_POST ['nama'];
    $nilai = $_POST ['nilai'];
    $nilai2 = $_POST ['nilai2'];
    echo "NAMA Anda : <b>$nama</b><br>";
    echo "Nilai 1 : <b>$nilai</b><br>";
    echo "nilai 2 : <b>$nilai2</b><br>";
    $rata = ($nilai+$nilai2)/2;
    echo "Rata-rata : <b>$rata</b><br>";
}

?>