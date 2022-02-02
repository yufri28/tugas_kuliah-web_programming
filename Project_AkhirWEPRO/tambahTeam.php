<?php

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
    <h3>Tambah Team</h3>
    <form action="" method="post" enctype="multipart/form-data" class="tambah-foto">
        <ul style="list-style: none;">
            <li>
                <label for="nama_gmbr">Nama </label><span class="c1"> :</span>
                <input type="text" name="Name_img" id="nama_gmbr1" require>
            </li>
            <br>
            <li>
                <label for="skill">Skill </label><span class="c1"> :</span>
                <input type="text" name="skill" id="skill" require>
            </li>
            <br>
            <li>
                <label for="gmbr">Gambar </label><span class="c2"> :</span>
                <input type="file" name="gambarP" id="gmbrP" require><br><br>
                <button type="submit" name="submit">Upload</button>
            </li>
        </ul>
    </form>
    <?php

if (isset($_POST['submit'])) {
    $name = $_POST['Name_img'];
    $skill = $_POST['skill'];
    $namafile = $_FILES['gambarP']['name'];
    $sFile = $_FILES['gambarP']['tmp_name'];
    $folder = './Images/';

    move_uploaded_file($sFile, $folder.$namafile);
    $upload = "INSERT INTO myteam VALUES('','$name','$skill','$namafile')";
    $upload = mysqli_query($conn, $upload);
    if ($upload) {
        ?>
    <script languange="javascript">
    alert('Upload Berhasil!');
    document.location = 'admin.php#myteam';
    </script>
    <?php
    } else {
        echo 'Upload Gagal!';
    }
    mysqli_close($conn);
}

?>

</body>

</html>