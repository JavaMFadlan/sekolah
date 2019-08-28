<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>

<h1>Penjualan</h2>
    <form action="prosesjual.php" method="POST">
        <p>
            <label for="nama">Nama: </label><br>
            <input type="text" required name="nama" placeholder="nama lengkap">
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <input type="text" required name="jalan" placeholder="jalan/Kampung">
            <input type="text" required name="kota" placeholder="Kota">
            <input type="text" required name="desa" placeholder="Desa/kecamatan">
            <input type="text" required name="provinsi" placeholder="Provinsi">
            <input type="number" style="width : 200px;" required name="kode" placeholder="Kode Pos"><br>
        </p>
        <p>
            <label for="alamat">Nama Barang </label><br>
            <input type="text" required name="namab" placeholder="nama barang">
            <br><label for="alamat">harga barang </label><br>
            <input type="number" style="width : 200px;" required name="harga" placeholder="Harga barang">
            <br><label for="alamat">jumlah barang</label><br>
            <input type="number" style="width : 200px;" required name="jumlah" placeholder="Jumlah Barang">
        </p>
        <p>
        <br><label for="alamat">deskripsi</label><br>
            <textarea required name="deskripsi"></textarea>
            <br><label for="alamat">tanggal pembelian</label><br>
            <input type="date" required name="tanggal" >
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar">
        </p>
    </form>
    </body>
</html>
