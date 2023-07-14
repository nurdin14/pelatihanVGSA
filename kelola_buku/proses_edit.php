<?php

require '../koneksi/koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id_buku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $isbn = $_POST['isbn'];

    $query = mysqli_query($koneksi, "UPDATE tb_buku SET id_buku ='$id', judul ='$judul', pengarang ='$pengarang', tahun_terbit ='$tahun_terbit', isbn ='$isbn' where id_buku ='$id' ");
    if ($query) {
        echo "<script>
                alert('Berhasil Diubah');
                window.location.href = 'v_tampil.php';
               </script>";
    } else {
        echo "<script>
                alert('Gagal Diubah');
                window.location.href = 'v_edit.php';
              </script>";
    }
}