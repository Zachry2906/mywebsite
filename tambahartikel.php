<?php 

session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'function.php';

if (isset($_POST["submit"])){
    if(isi($_POST) > 0) {
        echo "<script>
                alert('data berhasil diperbarui');
                document.location.href = 'admin.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plu.css">
    <title>Tambah</title>
</head>
<body>
    <div class="img">
    <a href="admin.php">Kembali</a>
    <div class="tambah">
        <h1 style="color: white; text-align: center;">Tambah Artikel</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
        <div class="form-group">
            <label for="formGroupExampleInput">Sinopsis</label>
            <input name="sinopsis" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Gambar</label>
            <input name="gambar" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
        <br>
        <div class="form-group">
                <button type="submit" name="submit"> Tambah Data </button>
        </div>
        </ul>
    </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>