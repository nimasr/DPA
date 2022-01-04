<?php

include ("db_connect.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nim = $_POST['nim'];
    $nama_mhs = $_POST['nama_mhs'];
    $prodi = $_POST['prodi'];
    $nama_dos = $_POST['nama_dos'];

    // buat query
    $sql = "INSERT INTO mahasiswa (nim, nama_mhs, prodi, nama_dos) VALUE ('$nim', '$nama_mhs', '$prodi', '$nama_dos')";
    $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?page=bimbingan');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?page=bimbingan');
    }


} else {
    die("Akses dilarang...");
}

?>