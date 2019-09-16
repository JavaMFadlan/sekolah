<?php
session_start();
if (isset($_SESSION['login'])) {
        echo "Selamat Datang ".$_SESSION['login'];
        echo "<a href='session3.php'>(session3.php)</a> Logout";
    }else {
        die("Anda Belum Login. Silahkan Login<a href=session1.php>disini</a>");
    }