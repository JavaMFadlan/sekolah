<?php

if (isset($_POST['login'])){
    $login = $_POST ['username'];
    $alamat = $_POST ['saran'];
    $nisn = $_POST ['nomor'];
    $asal = $_POST ['asal'];
    $ayah = $_POST ['ayah'];
    $ibu = $_POST ['ibu'];
    $payah = $_POST ['payah'];
    $pibu = $_POST ['pibu'];
    $jk = $_POST ['jk'];
    $agama = $_POST ['agama'];
    $jurusan = $_POST ['jurusan'];
    $email = $_POST ['email'];
    $tempat = $_POST ['tempat'];
    $tanggal = $_POST ['tanggal'];
    $password = $_POST ['password'];
    if ($email == "sia1@gmail.com" && $password == "12345") {
        $email = "Aktif";
        $password = "Aktif";
    }
    else if($password != "12345"){
        $password = "Tidak Aktif";
        if ($email != "sia1@gmail.com" ) {
            $email = "Salah Email";
        }
        else if ($email == "sia1@gmail.com" ) {
            $email = "Aktif";
        }
    }
    elseif ($email != "sia1@gmail.com" ) {
        $email = "Salah Email";
            $password = "Tidak Aktif";
    }
        echo "Nama : $login <br>";
        echo "NISN : $nisn <br>";
        echo "Alamat : $alamat <br>";
        echo "Asal Sekolah : $asal <br>";
        echo "Nama Ayah : $ayah <br>";
        echo "Pekerjaan Ayah : $payah <br>";
        echo "Nama Ibu : $ibu <br>";
        echo "Pekerjaan Ibu : $pibu <br>";
        echo "Jurusan : $jurusan <br>";
        echo "Tempat Lahir : $tempat <br>";
        echo "Tanggal Lahir : $tanggal <br>";
        echo "Hobi : <br>";
    if (isset($_POST['hobi'])) {
        echo "<li>".$_POST['hobi']." <br>";
    }
    if (isset($_POST['hobi1'])) {
        echo "<li>".$_POST['hobi1']." <br>";
    }
    if (isset($_POST['hobi2'])) {
        echo "<li>".$_POST['hobi2']." <br>";
    }
    if (isset($_POST['hobi3'])) {
        echo "<li>".$_POST['hobi3']." <br>";
    }
    if (isset($_POST['hobi4'])) {
        echo "<li>".$_POST['hobi4']." <br>";
    }
        echo "Agama : $agama <br><br>";
        echo "<h1>Email : $email </h1>";
        echo "<h1>STATUS : $password </h1><br>";
}

?>