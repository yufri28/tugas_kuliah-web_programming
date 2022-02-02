<?php
session_start();

if (isset($_SESSION['login'])) {
    header('Location: admin.php');
    exit;
}

include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM adminlogin WHERE username = '$username'");

    //cek Username
    if (mysqli_num_rows($result) === 1) {
        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            //set sesi untuk masuk
            $_SESSION['login'] = true;

            header('location: admin.php');
            exit;
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
    li {
        display: inline-block;
    }

    /* form {
        align-items: center;
        align-content: center;
        border: 1px solid black;
        width: 26%;
        height: 40%;
    } */
    </style>
</head>

<body>

    <?php

if (isset($error)) {
    echo "<script>
    alert('Password Salah!');
    </script>";
}

?>
    <div class="container">
        <div class="jumbotron">
            <div class="card">
                <h2>
                    Login Form
                </h2>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Login</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
    <form action="" method="post">
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Username</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username"
                                name="username" id="username">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Password</label>
                            <input type="password" class="form-control" id="formGroupExampleInput2"
                                placeholder="Password" name="password" id="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button> -->
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript; choose one of the two! -->
    </form>
    <!-- <form action="" method="post">
        
        <ul style="list-style: none;">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li><br><br>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li><br><br>
            <a href="user.php" style="text-decoration: none;">Masuk Sebagai User</a>
        </ul>
    </form> -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>
</body>

</html>