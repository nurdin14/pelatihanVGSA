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
        <div class="card mt-3">
            <div class="card-header">
                Form Tambah
            </div>
            <div class="card-body">
                <form action="proses_add.php" method="post" onsubmit="return validateForm()">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="id_buku">
                            <input type="text" class="form-control" name="judul" id="judulInput">
                            <small id="judulError" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Pengarang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="pengarang" id="pengarangInput">
                            <small id="pengarangError" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Tahun Terbit</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="tahun_terbit" id="tahunTerbitInput">
                            <small id="tahunTerbitError" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">ISBN</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="isbn" id="isbnInput">
                            <small id="isbnError" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                            <a href="v_tampil.php" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="../js/jquery-3.7.0.js"></script>
<script src="../js/dataTables.min.js"></script>
<script src="../js/dataTables.bootstrap5.min.js"></script>
<script>
    new DataTable('#example');
</script>

<script>
    function validateForm() {
        // Menghapus pesan error sebelumnya
        resetErrorMessages();

        // Mengambil nilai input
        var judul = document.getElementById('judulInput').value.trim();
        var pengarang = document.getElementById('pengarangInput').value.trim();
        var tahunTerbit = document.getElementById('tahunTerbitInput').value.trim();
        var isbn = document.getElementById('isbnInput').value.trim();

        // Flag untuk validasi
        var isValid = true;

        // Validasi judul
        if (judul === '') {
            document.getElementById('judulError').textContent = 'Judul harus diisi';
            isValid = false;
        }

        // Validasi pengarang
        if (pengarang === '') {
            document.getElementById('pengarangError').textContent = 'Pengarang harus diisi';
            isValid = false;
        }

        // Validasi tahun terbit
        if (tahunTerbit === '') {
            document.getElementById('tahunTerbitError').textContent = 'Tahun terbit harus diisi';
            isValid = false;
        } else if (isNaN(tahunTerbit)) {
            document.getElementById('tahunTerbitError').textContent = 'Tahun terbit harus angka';
            isValid = false;
        }

        // Validasi ISBN
        if (isbn === '') {
            document.getElementById('isbnError').textContent = 'ISBN harus diisi';
            isValid = false;
        } else if (isNaN(isbn)) {
            document.getElementById('isbnError').textContent = 'ISBN harus angka';
            isValid = false;
        }

        return isValid;
    }

    function resetErrorMessages() {
        var errorElements = document.getElementsByClassName('text-danger');
        for (var i = 0; i < errorElements.length; i++) {
            errorElements[i].textContent = '';
        }
    }
</script>

</body>
</html>