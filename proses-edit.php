<?php

include ("config.php");

//cek apakah tombol simpan sudah di klik atau belum?
if(isset($_POST['simpan'])) {

     //ambil data dari formulir
     $id = $_POST['id'];
     $nama = $_POST['nama'];
     $alamat = $_POST['alamat'];
     $jk = $_POST['jenis_kelamin'];
     $agama =$_POST['agama'];
     $sk =$_POST['sekolah_asal'];
     // buat query
    $sql = "UPDATE pendaftaran SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sk' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}