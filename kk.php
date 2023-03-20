
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
    <link rel="stylesheet" href="arti.css" />
    <style>
      body {
        background-color: #000000;
      }
    </style>
    <link rel="icon" type="image/x-icon" href="img/icon.png" />
    <title>Selamat Datang!</title>
  </head>
  <body>
    <div class="header">
      <div id="home"></div>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top" id="nav1">
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
              <a class="nav-link text-white" id="but" href="#about">ubah</a>
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
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->
      <!-- HEADING -->
      <br /><br /><br />
      <div class="text-center px-2 text-white">
        <p class="text-white mb-1">Published 7 September 2022</p>
        <h1 class="mb-3 display-5">Andre</h1>
        <p class="text-white">Published 7 September 2022</p>
        <br />
      </div>
      <!-- Gambar -->
      <img src="img/rrr.png" class="img-fluid mx-auto d-block" alt="galaxy" />

      <div class="w-75 p-3 mx-auto">
        <p class="lead px-1 mt-5 text-white" style="text-align: justify">
          ufheuifhhewuf
        </p>
      </div>
    </div>
    <div class="edit" id="edit"  style=" color: white; width: 600px; left: 0; right: 0; margin: auto;">
    <form action="" method="post" enctype="multipart/form-data">
      <h1 style="color: white; text-align: center;">Ubah Artikel</h1>
        <ul>
        <div class="form-group">
            <label for="formGroupExampleInput2">Gambar</label>
            <input name="gambar" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Judul Konten</label>
            <input name="judul" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Isi Artikel</label>
            <textarea class="form-control" name="isi" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <br>
        <div class="form-group">
                <button type="submit" name="submit"> Tambah Data </button>
        </div>
        </ul>
    </form>
  </div>
  <script>
    const button = document.getElementById("but");
    const edit = document.getElementById("edit");
    button.addEventListener("click", function() {
      edit.classList.toggle("active");
    })
  </script>
  </body>
</html>