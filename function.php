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

//MENERIMA DATA DARI MYWEBSITE.PHP
function tambah ($data){
    global $dbms;

    $nama = $data["nama"];
    $email = $data["email"];
    $pesan = $data["pesan"];

    $queryy = "INSERT INTO form VALUES ('', '$nama', '$email', '$pesan')";
    mysqli_query($dbms, $queryy);
    return mysqli_affected_rows($dbms);
}

//MENERIMA DATA DARI TAMBAHARTIKEL
function isi ($konten){
    global $dbms;

    $sinopsis = $konten["sinopsis"];
    $gambar = $konten["gambar"];
    $file = $konten["file"];
    $judul = $konten["judul"];
    $queryy = "INSERT INTO content VALUES ('', '$gambar', '$sinopsis', '$file', '$judul')";
    mysqli_query($dbms, $queryy);
    return mysqli_affected_rows($dbms);
}

//MENERIMA DATA DARI ADMIN
function hapus ($id){
    global $dbms;
    //MENGHAPUS KARTU PARAMETER CARD
    if(isset($_GET["card"])){
        mysqli_query($dbms, "DELETE FROM content WHERE id = $id");
        //MENGHAPUS FEEDBACK PARAMETER ID
    } else {
        mysqli_query($dbms, "DELETE FROM form WHERE id = $id");
    }
    return mysqli_affected_rows($dbms);
}