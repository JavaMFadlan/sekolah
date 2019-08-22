<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="login1.php" method="post" name="input">
    <h2>register</h2>
    Nama : <input type="text" name="username"><br>
    Alamat : <input type="text" name="alamat"><br>
    Jenis Kelamin 
    <input type="radio" name="jk" value="Laki">
    Laki-Laki
    <input type="radio" name="jk" value="Perempuan">
    Perempuan<br>
    Dahareun
    <input type="checkbox" name="dahareun" value="Ketupat">
    Ketupat
    <input type="checkbox" name="dahareun1" value="Batagor">
    Batagor<br>
    Agama 
    <select name="agama">
    <option value="islam">Islam</option>
    <option value="Kristen">Kristen</option>
    <option value="Hindu">Hindu</option>
    <option value="Buddha">Buddha</option>
    </select>
    <br>
    Kritik / Saran <br><textarea name="saran" cols="40"
    rows = "5"></textarea><br>
    Email <input type="text" name="email"><br>
    Password : <input type="password" name="password"><br>
    <input type="submit" name="login" value="login">
    <input type="reset" name="reset" value="reset">
    </form>

</body>
</html>