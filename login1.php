<?php

if (isset($_POST['login'])){
    $login = $_POST ['username'];
    $alamat = $_POST ['alamat'];
    $jk = $_POST ['jk'];
    $agama = $_POST ['agama'];
    $email = $_POST ['email'];
    $password = $_POST ['password'];
    $text = $_POST['saran'];
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
        echo "Alamat : $alamat <br>";
        echo "Jenis Kelamin : $jk <br>";
        echo "Dahareun : <br>";
    if (isset($_POST['dahareun'])) {
        echo "<li>".$_POST['dahareun']." <br>";
    }
    if (isset($_POST['dahareun1'])) {
        echo "<li>".$_POST['dahareun1']." <br>";
    }
        echo "Agama : $agama <br><br>";
        echo "Kritik / Saran <br><br> $text <br><br>";
        echo "<h1>Email : $email </h1>";
        echo "<h1>STATUS : $password </h1><br>";
}

?>