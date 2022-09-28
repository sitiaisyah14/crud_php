<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Makanan</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <div class="alert alert-primary mx-auto mt-3 col-md-12 text-center" role="alert">
            <h2>CRUD DATA MENU MAKANAN</h2>
        </div>

        <?php
        include '../koneksi/koneksi.php';
        $idbuku = $_GET['idbuku'];
        $sql = "select*from tbbuku where idbuku='$idbuku'";
        // echo "$sql";
        $data = mysqli_query($koneksi,$sql);

        while ($a = mysqli_fetch_array($data)) {
        // print_r($a);
        // exit;
            ?>
        <form action="../proses/update.php" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        
                        <label for="formGroupExampleInput">ID Buku</label>
                        <input type="text" class="form-control" id="idbuku" name="idbuku" value="<?= $a['idbuku']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Judul Buku</label>
                        <input type="text" class="form-control" id="judulbuku" name="judulbuku" value="<?= $a['judulbuku'];?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $a['kategori'];?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Pengarang</label>
                        <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= $a['pengarang'];?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $a['penerbit'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select class="form-control" id="status" name="status" value="<?= $a['status'];?>">
                            <option>Pilih Status</option>
                            <option value="Diterima">Diterima</option>
                            <option value="Tersedia">Tersedia</option>
                        </select>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary float-right col-md-3" value="Simpan"></input>
        </form>
        <?php
        }
        ?>

    </div>
    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>