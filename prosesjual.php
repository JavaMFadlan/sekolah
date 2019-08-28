<?php
if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];

    $jalan = $_POST['jalan'];
    $desa = $_POST['desa'];
    $kota = $_POST['kota'];
    $prov = $_POST['provinsi'];
    $kode = $_POST['kode'];
    $prov = strtoupper($prov);

    $namab = $_POST['namab'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal'];
    $tanggal = date("d-m-Y", strtotime($tanggal));

    echo "Nama : ".$nama."<br>";
    echo "Alamat : Jl.".$jalan." Ds.".$desa.", Kota : ".$kota." Kode Pos : ".$kode.", Provinsi : ".
          $prov."<br>";
    $hargas = $harga*$jumlah;

    if ($jumlah >= 10) {
        $hargad = $hargas*20/100;
        $hargaa = $hargas-$hargad;
        $hargaa = "Rp." .number_format($hargaa,2,' ,','.') . ",-";
    }
    
    else if ($jumlah >= 5) {
        $hargad = $hargas*10/100;
        $hargaa = $hargas-$hargad;
        $hargaa = "Rp." .number_format($hargaa,2,',','.') . ",-";
    }
    
    if ($jumlah <= 0) {
        $hargaa= "pesanan Tak Bisa Diproses";
    }
    
    echo "Nama Barang: ".$namab."<br>";
    echo "Jumlah Barang : ".$jumlah."<br>";
    echo "Harga Total : ".$hargaa."<br>";
    echo "Deskripsi : ".$deskripsi."<br>";
    echo "Tanggal : ".$tanggal."<br>";
    }
    ?>