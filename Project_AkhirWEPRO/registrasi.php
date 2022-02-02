<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}
include 'koneksi.php';
if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('user baru ditambahkan!');
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Admin</title>
</head>

<body>
    <form action="" method="post">

        <ul style="list-style: none;">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li><br>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li><br>
            <li>
                <label for="password2">Konfirmasi Password :</label>
                <input type="password" name="password2" id="password2">
            </li>
            <li><button type="submit" name="register">Login</button></li>
        </ul>
    </form>
</body>

</html>