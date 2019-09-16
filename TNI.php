<?php
session_start();
if (isset($_SESSION['login'])) {?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Persegi</p>
    <fieldset>
    <legend> Luas Persegi
    </legend>
    <form action="" method="get">
    <label for="">NAMA</label>
    <input type="text" name="nama"><br>
    <label for="">Berat Badan</label>
    <input type="number" name="bb" min="1"><br>
    <label for="">Tinggi Badan</label>
    <input type="number" name="tb" min="1"><br>
    <input type="submit" value="simpan" name="simpan">
    </form>
    <a href="logout.php"><input type="submit" name="login" value="logout"></a><br>
    </fieldset>
    <?php
    if (isset($_GET['simpan'])) {
        $nama = $_GET['nama'];
        $bb = $_GET['bb'];
        $tb = $_GET['tb'];

        function tni($berat,$tinggi){
            if ( ($berat <= 60 && $berat >= 50)&&$tinggi >=165 ) {
                $e = "Diterima";
            } else {
                $e = "Tidak Diterima";
            }
            
            return $e;
        }
        $terima = tni($bb,$tb);
        echo "NAMA = $nama ";
        echo "Berat Anda = <b>$bb</b> dengan Tinggi = <b>$tb</b> Anda <b>$terima</b>";
    }?>
</body>
</html>

<?php }else {
    die("Anda Belum Login. Silahkan Login<a href=home.php>disini</a>");
}?>