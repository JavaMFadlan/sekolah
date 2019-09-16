<?php
session_start();
if (isset($_SESSION['login'])) {

    
        unset($_SESSION);
        session_destroy();
        echo "Anda Berhasil Logout";
        echo "<a href='session1.php'>(session1.php)</a> Login Lagi";
        echo "Anda Tak Bisa Masuk <a href='session2.php'>session2.php</a>Lagi";
    }
