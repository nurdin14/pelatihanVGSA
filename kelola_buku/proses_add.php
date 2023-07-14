<?php

require '../koneksi/koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id_buku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $isbn = $_POST['isbn'];

    $query = mysqli_query($koneksi, "INSERT INTO tb_buku values('$id', '$judul', '$pengarang', '$tahun_terbit', '$isbn')");
    if ($query) {
        echo "<script>
                alert('Berhasil Ditambahkan');
                window.location.href = 'v_tampil.php';
               </script>";
    } else {
        echo "<script>
                alert('Gagal Ditambahkan');
                window.location.href = 'v_add.php';
              </script>";
    }
}