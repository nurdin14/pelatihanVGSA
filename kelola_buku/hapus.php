<?php 

require '../koneksi/koneksi.php';

$id = $_GET['id_buku'];
$query = mysqli_query($koneksi, "DELETE FROM tb_buku where id_buku = '$id' ");

if ($query) {
    echo "<script>
            alert('Berhasil Dihapus');
            window.location.href = 'v_tampil.php';
          </script>";
} else {
    echo "<script>
            alert('Gagal Dihapus');
            window.location.href = 'v_tampil.php';
          </script>";
}

?>