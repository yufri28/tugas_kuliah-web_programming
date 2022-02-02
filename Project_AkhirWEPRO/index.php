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
    <!--untuk memberi tahu kepada browser bahwa website ini menggunakan karakter set utf-8 -->
    <!--  Sebuah <meta> elemen viewport memberikan petunjuk browser pada bagaimana mengontrol dimensi halaman dan scaling.

The width=device-width bagian set lebar halaman untuk mengikuti layar-lebar perangkat (yang akan bervariasi tergantung pada perangkat).

The initial-scale=1.0 bagian menetapkan tingkat zoom awal saat halaman pertama dimuat oleh browser.  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indeks</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    .Login {
        padding-top: 2px;
        width: 72px;
        height: 30px;
        background-color: #1fab89;
        margin-left: 20px;
        font-size: 10px;
        border-radius: 0.5em;
    }

    .login1 {
        font-size: 20px;
    }

    .myteam {
        width: 100%;
        font-size: x-large;
        font-weight: bolder;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        background-color: rgba(128, 128, 128, 0.041);
    }

    .galerymyteam {
        margin-bottom: 40px;
    }

    .fotopro {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin-top: 30px;
    }

    .person {
        font-size: large;
        margin-bottom: 40px;
    }

    .person2 {
        font-size: 15px;

    }

    li {
        margin-left: -14px;
    }
    </style>
</head>

<body>
    <div class="header">
        <h1 class="logo">YufriLt</h1>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="#home-main">Home</a></li>
                    <li><a href="#about-me">About Me</a></li>
                    <li><a href="#mywork">Work</a></li>
                    <li><a href="#contact-me">Contact</a></li>
                    <p class="Login"><a href="logout.php" class="login1">Logout</a></p>
                    <p><a href="" style="font-size: 15px; margin-left: 5px;">My Team</a></p>
                </ul>
            </nav>
        </div>
    </div>
    <div id="home-main">
        <div class="hallo">
            hallo
        </div>
        <div class="container-home">
            <div class="text-home-main">
                <h1>Hallo,</h1><br>
                <h1>Saya <span>Yufridon</span>,
                </h1>
                <br>
                <h1>Mahasiswa | Web Developer</h1><br>
                <p>Butuh Website Untuk Bisnismu?</p>
                <p>Silahkan, Hubungi saya!</p><br>
                <p class="kontak"><a href="#contact-me">Hubungi</a></p>
            </div>
            <div class="foto-profil">
                <img class="fp-main" src="../Images/myphoto.JPG" alt=""><br>
                <div class="medsos">
                    <a href="https://www.facebook.com/yufridon.luttu.9" target="_blank">
                        <img class="media-sosial" src="../Images/facebook.png" alt="">
                    </a>
                    <a href="https://www.instagram.com/yufri28/" target="_blank">
                        <img class="media-sosial" src="../Images/instagram.png" alt="">
                    </a>
                    <a href="#contact-me">
                        <img class="media-sosial" src="../Images/whatsapp.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div id="about-me">
            <div class="batas">
                hallo
            </div>
            <div id="judul-halaman">About Me</div>
            <div class="judul-content-deskripsi">Deskripsi</div>
            <div class="content-about-me">
                <div class="container-about">
                    <div class="my-ftp">
                        <img class="ftp" src="../Images/almamater.JPG" alt=" ">
                    </div>
                    <div class="deskripsi-saya">
                        <h3 style="margin-left: 130px;">Yufridon Chrisma Luttu</h3><br>
                        <p>Saya adalah Mahasiswa Jurusan Ilmu Komputer Universitas Nusa Cendana Kupang.</p><br>
                        <p>Saya masuk Universitas Nusa Cendana pada Tahun 2019 dan saat ini saya adalah Mashasiswa
                            Semester III.</p><br>
                        <p>Selain kesibukan saya sebagai Mahasiswa saya juga menerima project pembuatan Website. Untuk
                            project-project yang sudah pernah saya buat bisa dilihat<a href="#mywork"
                                style="font-size: 15px; color: blue; font-style: italic;">disini.</a></p><br>
                        <p>Untuk lebih jelasnya silahkan kontak saya. Klik<a href="#contact-me"
                                style="font-size: 15px; color: blue; font-style: italic;">disini</a>atau bisa langsung
                            lewat sosial media saya dibawah ini.</p>
                        <div class="sosmed-1">
                            <a href="https://www.facebook.com/yufridon.luttu.9" target="_blank">
                                <img class="media-sosial" src="../Images/facebook.png" alt="">
                            </a>
                            <a href="https://www.instagram.com/yufri28/" target="_blank">
                                <img class="media-sosial" src="../Images/instagram.png" alt="">
                            </a>
                            <a href="#contact-me">
                                <img class="media-sosial" src="../Images/whatsapp.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="myskill">
                <div class="judul-skill">Skill</div>
                <div class="content-skill">
                    <img class="skill-html" src="../Images/html5css3.jpg" alt="">
                </div>
            </div>
            <div style="color: #eeee; height: 40px;">batas</div>
        </div>
        <div id="mywork">
            <div class="batas">
                hallo
            </div>
            <div id="judul-halaman" style="color: whitesmoke;">Work</div>
            <div class="container-Work">
                <p><a href="tambahFoto.php" style="color: white; margin-left: 35px;"></a></p>
                <br>
                <div class="galery">
                    <?php
                    $query = mysqli_query($conn, 'SELECT * FROM images_work');
                    ?>
                    <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                    <img class=" foto2" src="./Images/<?php echo $row['file_gambar']; ?>" alt="">
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <div class="myteam" id="myteam">
            <div class="batas">
                hallo
            </div>
            <div class="judul-halaman">My Team</div>
            <div class="galerymyteam">
                <?php
                            $query1 = mysqli_query($conn, 'SELECT * FROM myteam');
                            ?>
                <?php while ($row1 = mysqli_fetch_assoc($query1)) : ?>
                <img class=" fotopro" src="./Images/<?php echo $row1['foto']; ?>" alt="">
                <div class="person"><br>
                    <p>
                        <?php echo $row1['nama']; ?><br>
                    <p class="person2">
                        <?php echo $row1['Skill']; ?>
                    </p>
                    </p><br><br>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div id="contact-me">
        <div class="batas">
            hallo
        </div>
        <div id="judul-halaman">Contact</div>
        <div id="container-contact">
            <div class="folow-saya">
                <h3>Folow saya</h3>
                <a href="https://www.facebook.com/yufridon.luttu.9" target="_blank">
                    <img class="media-sosial-footer" src="../Images/facebook.png" alt=" ">
                    <h4>Yufri Luttu</h4>
                </a>
                <a href="https://www.instagram.com/yufri28/" target="_blank">
                    <img class="media-sosial-footer" src="../Images/instagram.png" alt=" ">
                    <h4>yufri28</h4>
                </a>
            </div>
            <form action="" class="indeks">
                <h5 class="name">Full Name:</h5>
                <input type="text">
                <h5 class="email">Email :</h5>
                <input type="email">
                <h5 class="messages"> Messages : </h5>
                <textarea name="" id="text-area"></textarea><br>
                <input class="submit" type="submit" style="display: inline-block;" class="submit" id="submit"
                    value="Kirim">
            </form>
            <div class="contact-saya">
                <h3>Contact Saya</h3>
                <div>
                    <img src="../Images/whatsapp.png" alt=" ">
                    <h4>081353468646</h4>
                </div>
                <div>
                    <img src="../Images/telephone.png" alt="">
                    <h4>085353468646</h4>
                </div>
                <h3 style="margin-top: 50px;">Alamat</h3>
                <p>Jl. Yos Sudarso, Osmo</p>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="copyright">Copyright &copy; 2020 - yufridonluttu</div>
    </footer>
</body>

</html>