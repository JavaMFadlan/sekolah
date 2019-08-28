<?php
if (isset($_POST[daftar])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    foreach ($nama as $data => $val) {
    echo "nama : ".$nama[$data]."&nbsp&nbsp&nbsp";
    echo "kelas : ".$kelas[$data]."<br>"; 
    }
}
?>