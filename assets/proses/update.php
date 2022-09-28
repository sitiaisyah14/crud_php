    <?php 
    // koneksi database
    include '../koneksi/koneksi.php';
    
    // menangkap data yang di kirim dari form
    $idbuku = $_POST['idbuku'];
    $judulbuku = $_POST['judulbuku'];
    $kategori = $_POST['kategori'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $status = $_POST['status'];
    
    // update data ke database
    $sql = "update tbbuku SET 
    idbuku='$idbuku',
    judulbuku='$judulbuku',
    kategori='$kategori',
    pengarang='$pengarang',
    penerbit='$penerbit',
    status = '$status'
    where idbuku = '$idbuku'";
    $buku = mysqli_query($koneksi,$sql);
    
    // mengalihkan halaman kembali ke index.php
    header("location:../../index.php");
    
    ?>