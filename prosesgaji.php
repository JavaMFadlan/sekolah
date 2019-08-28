<?php

if (isset($_POST['submit'])){
    $nama = $_POST ['nama'];
    $Tahun = $_POST ['tahun'];
    $bagian = $_POST ['bagian'];
    $jam = $_POST ['jam'];


    if ($jam > 25 || $jam < 0) {
        $jam = "Hanya Sampai 24 Jam/Hari";
        $gaji = NULL;
    }
    

    if ($bagian == "manajer") {
        $gaji = $jam*150000*$Tahun;
    }
    elseif ($bagian == "Sekretaris") {
        $gaji = $jam*100000*$Tahun;
    }
    elseif ($bagian == "Karyawan") {
        $gaji = $jam*50000*$Tahun;
    }
    elseif ($bagian == "Ob") {
        $gaji = $jam*10000*$Tahun;
    }
    if ($jam <=24 || $jam >= 0) {
        $gaji = "Rp." . number_format($gaji,2,",",".");
    }
    // echo "Nama   : <b>$nama</b><br>";
    // echo "Tahun   : <b>$Tahun</b><br>";
    // echo "Bagian : <b>$bagian</b><br>";
    // echo "Jam    : <b>$jam</b><br>";
    // echo "Gaji   : <b>$gaji</b><br>";
}
?>
<!DOCTYPE html>
<head>
<link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
<html lang="en">
</head>
<body>
<table class="table table-responsive-sm">
  <thead class="thead-dark">
    <tr>
      <th>Nama</th>
      <th>Tahun</th>
      <th>Bagian</th>
      <th>Jam</th>
      <th >Gaji</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <?php
      echo "<td>$nama</td>";
      echo "<td>$Tahun</td>";
      echo "<td>$bagian</td>";
      echo "<td>$jam</td>";
      echo "<td>$gaji</td>";
      ?>
      </tr>
    </tbody>
  </table>
<a href="penggajian.php"><input class="btn btn-primary" type="submit" name="back" value="Back"></a>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>