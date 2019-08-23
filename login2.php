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
    <style>
    form{
    /* position: absolute;
    margin-top: -300px;
    margin-left: -200px;
    left: 50%;
    top: 50%;
    width: 700px;
    height: 1400px;
    background-color:brown; */
    }
</style>
</head>
<body>
<div class="container-fluid" >
    <form class="form-group" action="proses3.php" method="post" name="input">
    <h2>Formulir Pendaftaran</h2>
    <div class="col-md-6 d-flex">
        <label class="col-sm-4 col-form-label">Nama :</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="username">
            </div>
        </div>
        <div class="col-md-6 d-flex">
        <label class="col-sm-4 col-form-label">NISN</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" name="nomor">
            </div>
        </div>
    <div class="col-md-6 d-flex">
        <label class="col-sm-4 col-form-label">Asal Sekolah :</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="asal">
            </div>
        </div>
    <div class="col-md-6 d-flex">
        <label class="col-sm-4 col-form-label">Alamat</label>
            <div class="col-sm-8">
            <br><textarea name="saran" cols="40" rows = "5"></textarea>
            </div>
        </div>

    <div class="col-md-6 d-flex">
        <label class="col-sm-4 col-form-label">Jenis Kelamin :</label>
            <div class="col-sm-8">
                <div class="form-row">
                     <div class="form-check">
                         <input type="radio" class="form-check-input" name="jk" value="Laki">
                         Laki-Laki<br>
                        <input type="radio" class="form-check-input" name="jk" value="Perempuan">
                        Perempuan<br>
                    </div>
                </div>
            </div>
        </div>
    <!-- <div class="form-group row col-md-6">
    Tempat Lahir : <input type="text" class="form-control" name="tempat">
    </div> -->
    <div class="col-md-6 d-flex">
        <label class="col-sm-4 col-form-label">Tempat Lahir</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" name="tempat">
            </div>
        </div>
    <div class="col-md-6 d-flex">
        <label class="col-sm-4 col-form-label">Tanggal Lahir : </label>
            <div class="col-sm-8">
            <input type="date" name="tanggal">
            </div>
        </div>
    
    <div class="col-md-6 d-flex">
        <label class="col-sm-4 col-form-label">Hobi :</label>
            <div class="col-sm-8">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="hobi" value="bola">
                Bola<br>
                <input type="checkbox" class="form-check-input" name="hobi1" value="gaming">
                Gaming<br>
                <input type="checkbox" class="form-check-input" name="hobi2" value="balap">
                Balap<br>
                <input type="checkbox" class="form-check-input" name="hobi3" value="heureuy">
                Heureuy<br>
                <input type="checkbox" class="form-check-input" name="hobi4" value="ngaganggu">
                Ngaganggu<br>
                </div>
            </div>
        </div>
    
    <div class="col-md-6 d-flex">
        <label class="col-sm-4 col-form-label">Agama </label>
            <div class="col-sm-8">
                <div class="form-group row col-md-6">
                    <select name="agama">
                    <option class="form-control" value="islam">Islam</option>
                    <option class="form-control" value="Kristen">Kristen</option>
                    <option class="form-control" value="Hindu">Hindu</option>
                    <option class="form-control" value="Buddha">Buddha</option>
                    </select>
                </div>
            </div>
        </div>

    <div class="col-md-6 d-flex">
        <label class="col-sm-4 col-form-label">Jurusan</label>
            <div class="col-sm-8">
                    <div class="form-group row col-md-6">
                    <select name="jurusan">
                    <option class="form-control" value="rpl">rpl</option>
                    <option class="form-control" value="tsm">tsm</option>
                    <option class="form-control" value="tkr">tkr</option>
                    </select>
                </div>
            </div>
        </div>
    <!-- <div class="form-group row col-md-6">
    Nama ayah : <input type="text" class="form-control" name="ayah">
    </div>
    <div class="form-group row col-md-6">
    Nama Ibu : <input type="text" class="form-control" name="ibu">
    </div>
    <div class="form-group row col-md-6">
    pekerjaan Ayah : <input type="text" class="form-control" name="payah">
    </div>
    <div class="form-group row col-md-6">
    pekerjaan Ibu : <input type="text" class="form-control" name="pibu">
    </div>
    <div class="form-group row col-md-6">
    Email <input type="text" class="form-control" name="email">
    </div>
    <div class="form-group row col-md-6">
    Password : <input type="password" name="password">
    </div> -->
    <div class="col-md-6 d-flex">
        <label class="col-sm-4 col-form-label">Nama Ayah</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" name="ayah">
            </div>
        </div>
    <div class="col-md-6 d-flex">
        <label class="col-sm-4 col-form-label">Nama Ibu</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" name="ibu">
            </div>
        </div>
    <div class="col-md-6 d-flex">
        <label class="col-sm-4 col-form-label">pekerjaan Ayah</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" name="payah">
            </div>
        </div>
    <div class="col-md-6 d-flex">
        <label class="col-sm-4 col-form-label">pekerjaan Ibu</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" name="pibu">
            </div>
        </div>
    <div class="col-md-6 d-flex">
        <label class="col-sm-4 col-form-label">email</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" name="email">
            </div>
        </div>
    <div class="col-md-6 d-flex">
        <label class="col-sm-4 col-form-label">pekerjaan Ayah</label>
            <div class="col-sm-8">
            <input type="password" class="form-control" name="password">
            </div>
        </div>    
    <input type="submit" name="login" value="login">
    <input type="reset" name="reset" value="reset">
    </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>