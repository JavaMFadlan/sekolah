<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand " style="color:white;" >Tugas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="penggajian.php">Gaji </a>
      <a class="nav-item nav-link active" href="kwitansi.php">Kwitansi<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="pendaftaran.php">Pendaftaran</a>
    </div>
  </div>
</nav>

<form class="form-group" action="proseskwitansi.php" method="post" name="input">
<div class="col-md-6 d-flex">
        <label class="col-sm-4 col-form-label">Terima Dari</label>
            <div class="col-sm-8">
                <input required type="text" class="form-control" name="nama">
            </div>
        </div>
<div class="col-md-6 d-flex">
        <label class="col-sm-4 col-form-label">Jumlah</label>
            <div class="col-sm-8">
                <input required type="number" class="form-control" name="jumlah">
            </div>
        </div>
<div class="col-md-6 d-flex">
    <label class="col-sm-4 col-form-label">Untuk Pembayaran</label>
        <div class="col-sm-8">
            <div class="form-group row col-md-6">
            <textarea required name="untuk" cols="40" rows = "5"></textarea>
            </div>
        </div>
    </div>

<div class="col-md-6 d-flex">
        <label class="col-sm-4 col-form-label">Kepada</label>
            <div class="col-sm-8">
                <input required type="text" class="form-control" name="kepada">
            </div>
        </div>
        <div class="col-md-6 d-flex">
            <div class="col-sm-8">
            <input type="submit" class="btn btn-primary" name="submit" value="submit">
            <input type="reset" class="btn btn-primary" name="reset" value="reset">
            </div>
        </div>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>