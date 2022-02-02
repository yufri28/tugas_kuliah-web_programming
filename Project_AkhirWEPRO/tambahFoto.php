<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}
include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Foto</title>
    <style>
    h3 {
        margin-top: 20px;
        text-align: center;
    }

    form {
        width: 50%;
        border: 1px solid black;
        margin: 0 20% 20% 25%;
    }

    .c1 {
        margin-left: 20px;
    }

    .c2 {
        margin-left: 63px;
    }

    button {
        margin-left: 100px;
    }
    </style>
</head>

<body>
    <h3>Tambah Foto Work</h3>
    <form action="" method="post" enctype="multipart/form-data" class="tambah">
        <ul style="list-style: none;">
            <li>
                <label for="nama_gmbr">Nama Gambar </label><span class="c1"> :</span>
                <input type="text" name="Nama_Gambar" id="nama_gmbr" require>
            </li>
            <br>
            <li>
                <label for="gmbr">Gambar </label><span class="c2"> :</span>
                <input type="file" name="gambar" id="gmbr" require><br><br>
                <button type="submit" name="submit">Upload</button>
            </li>
        </ul>
    </form>
    <?php

    if (isset($_POST['submit'])) {//data dikirim dari form method="post"
        $nama = $_POST['Nama_Gambar']; //data nama yang dikirim dari inputan user akan ditampung ke dalam sini
        $namaFile = $_FILES['gambar']['name']; //data nama file yang dikirim dari inputan user akan ditampung ke dalam sini
        $source = $_FILES['gambar']['tmp_name']; //data nama file sementara yang dikirim dari inputan user akan ditampung ke dalam sini
        $folder = './Images/'; //file gambar  dikirim namanya dari inputan user akan ditampung ke dalam folder ini

        move_uploaded_file($source, $folder.$namaFile);
        $insert = "INSERT INTO images_work VALUES('','$nama','$namaFile')";
        $upload = mysqli_query($conn, $insert);
        if ($insert) {
            ?>
    <script languange="javascript">
    alert('Upload Berhasil!');
    document.location = 'admin.php#mywork';
    </script>
    <?php
        } else {
            echo 'Upload Gagal!';
        }
    }
     mysqli_close($conn);
    ?>
</body>

</html>