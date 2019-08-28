<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" style="color:white;" >Tugas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="penggajian.php">Gaji <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="kwitansi.php">Kwitansi</a>
      <a class="nav-item nav-link active" href="pendaftaran.php">Pendaftaran</a>
    </div>
  </div>
</nav>

<h1>Formulir Pendaftaran Siswa Baru</h2>
    <form action="prosesdaftar.php" method="POST">
        <p>
            <label for="nama">Nama: </label><br>
            <input type="text" required name="nama" placeholder="nama lengkap" >
        </p>
        <p>
            <label for="alamat">Alamat: </label><br>
            <textarea required name="alamat"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label><br>
            <label><input required type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input required type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
    
        <p>
            <label for="agama">Agama: </label><br>
            <select required name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p> 
           <label for="hoby">Hoby</label><br>
           <input type="checkbox" name="hoby01" value="renang">Renang<br>
           <input type="checkbox" name="hoby02" value="volly">Volly<br>
           <input type="checkbox" name="hoby03" value="makan">Makan<br>
           
        </p>

        <p>
            <label for="sekolah_asal">Sekolah Asal: </label><br>
            <input required type="text" name="sekolah_asal" placeholder="nama sekolah" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>
    </form>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
