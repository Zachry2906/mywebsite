<?php 

require "function.php";

$konten = query("SELECT * FROM content");
$sum = count(query("SELECT * FROM content"));

if (isset($_POST["submit"])) {
  if(tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diperbarui');
            document.location.href = 'mywebsite.php';
        </script>
    ";
}
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--FONT AWESOMW JS-->
    <!-- Font Awesome JS -->
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="mywebsite.css" />
    <link rel="icon" type="image/x-icon" href="img/icon.png" />
    <title>Selamat Datang!</title>
  </head>
  <body>
    <div id="home"></div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: grey; transition:0.3s ease-in" id="nav1">
      <div class="container">
        <a class="navbar-brand text-white" href="#"><img src="img/icon.png" width="20px" alt="logosaya" /> Zachry</a>
        <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active text-dark" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#projek">Thoughts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#contact">Contact Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="profile.html">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
    <!-- Background image -->
    <div class="bg-image" style="background-image: url('gambar/561.png'); filter: contrast(100%); background-repeat: no-repeat; filter: brightness(60%); height: 100vh; background-size: cover">
      <div class="head">
        <div class="text-white fullscreen justify-content-center">
          <h1 class="display-3 me-3"><br /><br /><br /><br />Halooo, Perkenalkan</h1>
          <h1 class="display-3 me-3">saya Ahmad Zakaria</h1>
          <br />
          <div class="ms-1 me-5">
            <p class="mb-0">Ini merupakan website pertama saya, saya buat memakai bootstrap 5 dan belum saya masukkan javascript</p>
            <p>web ini masih jauh dari kata sempurna, akan saya update secara berkala, terimakasih</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
    <div class="jumbo text-white">
      <!-- Konten -->
      <section id="about">
        <div class="container">
          <div class="row text-center mb-md-3 mt-0">
            <div class="col">
              <h2>About Me</h2>
            </div>
          </div>
          <div class="row justify-content-center px-2 fs-6">
            <div class="col-md-5 mb-3" style="text-align: justify">Nama saya Ahmad Zakaria biasa dipanggil Arya atau Zaka. Saya merupakan mahasiswa baru (2022) di salah satu perguruan tinggi negeri di Yogyakarta.</div>
            <div class="col-md-5" style="text-align: justify">
              Website ini merupakan website pertama saya yang sementara ini saya buat menggunakan, HTML, CSS, Bootstrap5, dan sedikit Javascript. Halaman web ini berisi mengenai hal-hal yang ingin saya simpan seperti bookmark, playlist,
              bekas projek dan beberapa kali saya akan mengupload artikel
            </div>
          </div>
        </div>
      </section>
      <!-- Konten -->
      <!-- GAMBAR -->
      <section id="gambar">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="gambar/karosel1.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="gambar/karosel5.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="gambar/karosel2.jpg" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
      <!-- GAMBAR -->
      <!-- Project -->
      <section id="projek">
        <div class="container">
          <div class="row text-center">
            <div class="col">
              <h2 class="mb-4">Thoughts</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
              <a href="subpage1.html" target="_blank">
                <div class="card card-1">
                  <img src="gambar/artikel.png" class="card-img-top" alt="jendela1" />
                  <div class="card-body">
                    <p class="card-text">Berisi mengenai pikiran-pikiran saya, saya tuang disini</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4 mb-3">
              <a href="subpage2.html" target="_blank">
                <div class="card">
                  <img src="gambar/webs.png" class="card-img-top" alt="jendela2" />
                  <div class="card-body">
                    <p class="card-text">Berisi mengenai beberapa file html yang pernah dikerjakan selama saya ini</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4 mb-3">
              <a href="subpage3.html" target="_blank">
                <div class="card">
                  <img src="gambar/bkmrk.jpg" class="card-img-top" alt="jendela3" />
                  <div class="card-body">
                    <p class="card-text">Berisi bookmark mengenai web-web keren yang saya dapatkan</p>
                  </div>
                </div>
              </a>
            </div>
            <?php $j = 1; ?>
            <?php foreach ($konten as $k) : ?>
              <div class="col-md-4 mb-3">
              <a href="<?=$k["file"];?>" target="_blank">
                <div class="card">
                  <img src="img/<?=$k["gambar"];?>" class="card-img-top" alt="jendela4" />
                  <div class="card-body">
                    <p class="card-text"><?= $k["sinopsis"]; ?></p>
                  </div>
                </div>
              </a>
            </div>
            <?php $j++; ?>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
      <!-- Project -->
      <!-- Contact -->
      <section id="contact">
        <div class="container">
          <div class="row text-center px-2 mt-0">
            <div class="col">
              <h2>Contact Me</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-7">
              <form action="" method="POST">
                <div class="mb-3">
                  <label for="Nama" class="form-label">Nama</label>
                  <input placeholder="Belum aktif" type="text" name="nama" class="form-control" id="nama" aria-describedby="nama" required />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input placeholder="Belum aktif" type="email"  name="email" class="form-control" id="email" aria-describedby="email" required />
                </div>
                <div class="mb-3">
                  <label for="pesan" class="form-label">Pesan</label>
                  <textarea placeholder="Belum aktif"  name="pesan" class="form-control" id="pesan" rows="3" required></textarea>
                </div>
                <button name="submit" type="submit" class="btn btn-secondary mb-3">Kirim</button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact -->
      <!-- Footer -->
      <div class="mt-5 px-3 pt-5 pb-5 footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-xs-12 about-company">
              <h2>Heading</h2>
              <p class="pr-5 text-white-50 mb-1">Haiiii, terimakasih sudah membaca sampai akhir. Saran kritik akan sangat saya terima, untuk memajukan web ini</p>
              <p>
                <a href="https://www.facebook.com/profile.php?id=100008504131639" target="_blank"><i class="bi bi-facebook text-white"></i>&nbsp;&nbsp;</a>
                <a href="https://github.com/Zachry2906" target="_blank"><i class="bi bi-github text-white"></i>&nbsp;&nbsp;</a>
                <a href="https://www.instagram.com/zachry____/" target="_blank"><i class="bi bi-instagram text-white"></i></a><br />
              </p>
            </div>
            <div class="col-lg-3 col-xs-12 links">
              <h4 class="mt-lg-0 mt-sm-3">Links</h4>
              <ul class="m-0 p-0" style="list-style: none">
                <li style="text-decoration: none"><a href="profile.html">My Profile</a></li>
                <br />
              </ul>
            </div>
            <div class="col-lg-4 col-xs-12 location">
              <h4 class="mt-lg-0 mt-sm-4">Location</h4>
              <p class="mb-0">Ahmad Zakaria. 18, Street Kaliurang, Pakem 55582</p>
              <p class="mb-0"><i class="bi bi-telephone text-white"></i> &nbsp; +62 (856)-0135-6245</p>
              <p><i class="bi bi-envelope text-white"></i> &nbsp; aryazakaria67@gmail.com</p>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col copyright">
              <p class=""><small class="text-white-50">© 2022. All Rights Reserved.</small></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="script.js"></script>
    </div>
  </body>
</html>
