<?php
session_start();
if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if($user == "pol" && $pass=="123"){
        $_SESSION['login'] = $user;?>
        <html lang="en">
    <head>
    </head>
    <body>
        <!-- <form action="" method="POST">
        <h2>Login Here</h2> -->
        Masuk Persegi : <a href="persegi.php"><input type="submit" value="masuk"></a><br>
        Masuk Segitiga Bintang : <a href="bintang.php"><input type="submit" value="masuk"></a><br>
        Masuk TNI : <a href="TNI.php"><input type="submit" value="masuk"></a><br>
        <a href="logout.php"><input type="submit" name="login" value="logout"></a><br>
        <!-- </form> -->
    </body>
    </html>
    <?php }?>


<?php }else {?>
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