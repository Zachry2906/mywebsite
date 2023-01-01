<?php
//koenksi ke database
$dbms = mysqli_connect("localhost", "root","", "form");


function query($query){
    global $dbms;

    $result = mysqli_query ($dbms, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah ($data){
    global $dbms;

    $nama = $data["nama"];
    $email = $data["email"];
    $pesan = $data["pesan"];

    $queryy = "INSERT INTO form VALUES ('', '$nama', '$email', '$pesan')";
    mysqli_query($dbms, $queryy);
    return mysqli_affected_rows($dbms);
}

function isi ($konten){
    global $dbms;

    $sinopsis = $konten["sinopsis"];
    $gambar = $konten["gambar"];

    $queryy = "INSERT INTO content VALUES ('', '$gambar', '$sinopsis')";
    mysqli_query($dbms, $queryy);
    return mysqli_affected_rows($dbms);
}

function hapus ($id){
    global $dbms;
    if(isset($_GET["card"])){
        mysqli_query($dbms, "DELETE FROM content WHERE id = $id");
    } else {
        mysqli_query($dbms, "DELETE FROM form WHERE id = $id");
    }
    return mysqli_affected_rows($dbms);
}