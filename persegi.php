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
    <label for="">SISI</label>
    <input type="number" name="s" min="1"><br>
    <input type="submit" value="simpan" name="simpan">
    
    </form>
    <a href="logout.php"><input type="submit" name="login" value="logout"></a><br>
    </fieldset>
    <?php
    if (isset($_GET['simpan'])) {
        $sisi = $_GET['s'];

        function luas_persegi($s){
            $luas = $s * $s;
            return $luas;
        }
        $d = luas_persegi($sisi);
        echo "Hasil Dari Luas Persegi Yaitu $d";
    }
    ?>
</body>
</html>

<?php }
else {
    die("Anda Belum Login. Silahkan Login<a href=home.php>disini</a>");
}

?>