<?php

$conn = mysqli_connect('localhost', 'root', '', 'website_portfolio');

if (mysqli_connect_errno()) {
    echo 'Koneksi Gagal!:'.mysqli_connect_errno();
}

function registrasi($data)
{
    global $conn;
    $username = stripcslashes($data['username']);
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    $result = mysqli_query($conn, "SELECT username FROM adminlogin WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>

    alert('username sudah digunakan!');
    
    </script>";

        return false;
    }

    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>

alert('kofirmasi password salah!');

</script>";

        return false;
    }
    //encripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    //insert data admin ke datbase
    mysqli_query($conn, "INSERT INTO adminlogin VALUES('','$username','$password')");

    return mysqli_affected_rows($conn);
}