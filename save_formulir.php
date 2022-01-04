<?php

include ("db_connect.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nim = $_POST['nim'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $semester = $_POST['semester'];
    $judul_bimbingan = $_POST['judul_bimbingan'];
    $nama_dosen = $_POST['nama_dosen'];
    $status_formulir = $_POST['status_formulir'];
    

    // buat query
    $sql = "INSERT INTO formulir_bimbingan (nim, nama_mahasiswa, semester, judul_bimbingan, nama_dosen, status_formulir) VALUE ('$nim', '$nama_mahasiswa', '$semester', '$judul_bimbingan', '$nama_dosen', '$status_formulir')";
    $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?page=formulir');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?page=formulir');
    }


} else {
    die("Akses dilarang...");
}

?>