<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="GET">
    <fieldset>
    <legend>Form Array</legend>
    <label>Array</label>
    <input type="number" name="array" required>
    <input type="submit" value="Submit" name="input">
    
    </form>
    <form action="formarraypro.php" method="post">
<?php
if (isset($_GET[input])) {
    $no = $_GET['array'];
    for ($i=1; $i <= $no; $i++) {
        ?>    
        
<label for="nama">Nama: </label>
<input type="text" required name="nama[]">
<label for="nama">Kelas: </label>
<input type="text" required name="kelas[]">
<br>
  <?php } ?>
    <input type="submit" value="Submit" name="daftar">
    </form>
<?php } ?>

</fieldset>
</body>
</html>