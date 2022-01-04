<?php

include ("db_connect.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nim = $_POST['nim'];
    $waktu_mulai = $_POST['waktu_mulai'];
    $waktu_selesai = $_POST['waktu_selesai'];
    $status_jadwal = $_POST['status_jadwal'];
    

    // buat query
    $sql = "INSERT INTO jadwal (nim, waktu_mulai, waktu_selesai, status_jadwal) VALUE ('$nim', '$waktu_mulai', '$waktu_selesai', '$status_jadwal')";
    $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?page=add');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?page=add');
    }


} else {
    die("Akses dilarang...");
}

?>