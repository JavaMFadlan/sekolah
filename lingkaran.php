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
    <label for="">Jari-Jari</label>
    <input type="number" name="s" min="1"><br>
    <input type="submit" value="simpan" name="simpan">
    </form>
    </fieldset>
    <?php
    if (isset($_GET['simpan'])) {
        $sisi = $_GET['s'];

        function luas_lingkaran($s){
            $luas = 3.14 * $s * $s;
            return $luas;
        }
        function keliling_lingkaran($k){
            $keliling = 2*$k*3.14;
            return $keliling;
        }
        $d = luas_lingkaran($sisi);
        $k = keliling_lingkaran($sisi);
        echo "Hasil Dari Luas lingkaran Yaitu $d <br>";
        echo "Hasil Dari Keliling lingkaran Yaitu $k";
    }
    
    
    
    
    ?>
</body>
</html>