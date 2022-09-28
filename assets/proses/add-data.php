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
        <!-- <link rel="stylesheet" href="../proses/add-action.php"> -->
        <form action="../proses/add-action.php" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="formGroupExampleInput">ID Buku</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="cth BK001"
                            name="idbuku">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Judul Buku</label>
                        <input type="text" class="form-control" placeholder="Judul Buku"
                            name="judulbuku">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Kategori</label>
                        <input type="text" class="form-control" placeholder="Kategori"
                            name="kategori">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Pengarang</label>
                        <input type="text" class="form-control" placeholder="Pengarang"
                            name="pengarang">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Penerbit</label>
                        <input type="text" class="form-control" placeholder="Penerbit"
                            name="penerbit">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select class="form-control" name="status">
                            <option>Pilih Status</option>
                            <option value="Diterima">Diterima</option>
                            <option value="Tersedia">Tersedia</option>
                        </select>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary float-right col-md-3" value="Simpan"></input>
        
        </form>
    </div>
    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>