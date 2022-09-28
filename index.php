<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Makanan</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="alert alert-primary mx-auto mt-3 col-md-12 text-center" role="alert">
                <h2>CRUD DATA BUKU</h2>
              </div>
              <button type="button" class="btn btn-primary add_data"><a href="assets/proses/add-data.php">Tambah Data</a></button>
              <button type="button" class="btn btn-secondary add_data ml-1"><a href="assets/export_pdf.php">Export PDF</a></button>
              <div class="table mt-2 mb-2 table-responsive">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Buku</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include'assets/koneksi/koneksi.php';
                      $number = 1;
                      $data = mysqli_query($koneksi,"select*from tbbuku");
                      while ($a = mysqli_fetch_array($data)) {
                        ?>
                        <tr>
                          <td><?= $number++;?></td>
                          <td><?= $a['idbuku'];?></td>
                          <td><?= $a['judulbuku'];?></td>
                          <td><?= $a['kategori']?></td>
                          <td><?= $a['pengarang'];?></td>
                          <td><?= $a['penerbit'];?></td>
                          <td><?= $a['status'];?></td>
                          <td>
                            <a href="assets/proses/edit.php?idbuku=<?php echo $a['idbuku'];?>" class="btn btn-warning">Edit</a>
                            <a href="assets/proses/hapus.php?idbuku=<?php echo $a['idbuku'];?>" class="btn btn-danger">Hapus</a>
                          </td>
                        </tr>
                        <?php
                      }
                      ?>
                    </tbody>
                  </table>
              </div>
        </div>
    </div>

    <script src="assets/bootstrap/js/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>