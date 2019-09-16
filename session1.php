<?php
session_start();
if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if($user == "pol" && $pass=="123"){
        $_SESSION['login'] = $user;
        echo "Anda Berhasil Login";
        echo "<a href='session2.php'>(session2.php)</a> Menuju halaman Berikutnya";
    }
}else {
    ?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="POST">
        <h2>Login Here</h2>
        Username : <input type="text" name="user"><br>
        Password : <input type="password" name="pass"><br>
        <input type="submit" name="login" value="login">
        </form>
    </body>
    </html>

    <?php }?>