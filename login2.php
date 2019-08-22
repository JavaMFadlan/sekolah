<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="container-fluid">
    <legend align= "center">
    <form action="proses3.php" method="post" name="input">
    <h2>Formulir Pendaftaran</h2>
    Nama : <input type="text" name="username"><br>
    Asal Sekolah : <input type="text" name="asal"><br>
    Alamat : <br><textarea name="saran" cols="40"
                        rows = "5"></textarea><br>
    Jenis Kelamin 
    <input type="radio" name="jk" value="Laki">
    Laki-Laki
    <input type="radio" name="jk" value="Perempuan">
    Perempuan<br>
    Tempat Lahir : <input type="text" name="tempat"><br>
    Tanggal Lahir : <input type="date" name="tanggal"><br>
    Hobi :<br>
    <input type="checkbox" name="hobi" value="bola">
    Bola<br>
    <input type="checkbox" name="hobi1" value="gaming">
    Gaming<br>
    <input type="checkbox" name="hobi2" value="balap">
    Balap<br>
    <input type="checkbox" name="hobi3" value="heureuy">
    Heureuy<br>
    <input type="checkbox" name="hobi4" value="ngaganggu">
    Ngaganggu<br>
    Agama 
    <select name="agama">
    <option value="islam">Islam</option>
    <option value="Kristen">Kristen</option>
    <option value="Hindu">Hindu</option>
    <option value="Buddha">Buddha</option>
    </select>
    <br>
    Agama 
    <select name="jurusan">
    <option value="rpl">rpl</option>
    <option value="tsm">tsm</option>
    <option value="tkr">tkr</option>
    </select>
    <br>
    Nama ayah : <input type="text" name="ayah"><br>
    Nama Ibu : <input type="text" name="ibu"><br>
    pekerjaan Ayah : <input type="text" name="payah"><br>
    pekerjaan Ibu : <input type="text" name="pibu"><br>
    Email <input type="text" name="email"><br>
    Password : <input type="password" name="password"><br>
    <input type="submit" name="login" value="login">
    <input type="reset" name="reset" value="reset">
    </form>
    </legend>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>