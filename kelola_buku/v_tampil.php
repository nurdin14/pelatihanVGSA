<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>App Buku</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='../css/bootstrap.min.css'>
    <link rel="stylesheet" href="../css/dataTables.min.css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-3">
                    <div class="card-header">
                        List Data :
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <a href="v_add.php" class="btn btn-primary mb-4"> + Tambah Data</a>
                            </div>
                        </div>
                        <table id="example" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>Pengarang</th>
                                    <th>Tahun Terbit</th>
                                    <th>ISBN</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    require '../koneksi/koneksi.php';
                                    $no = 1;
                                    $query = mysqli_query($koneksi, "SELECT * FROM tb_buku");
                                    while($t = mysqli_fetch_assoc($query)) :
                                ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $t['judul']; ?></td>
                                    <td><?= $t['pengarang']; ?></td>
                                    <td><?= $t['tahun_terbit']; ?></td>
                                    <td><?= $t['isbn']; ?></td>
                                    <td>
                                        <a href="v_edit.php?id_buku=<?= $t['id_buku']; ?>" class="btn btn-warning">Edit</a>
                                        <a href="hapus.php?id_buku=<?= $t['id_buku']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="../js/jquery-3.7.0.js"></script>
<script src="../js/dataTables.min.js"></script>
<script src="../js/dataTables.bootstrap5.min.js"></script>
<script>
    new DataTable('#example');
</script>

</body>
</html>