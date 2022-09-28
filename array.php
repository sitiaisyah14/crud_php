<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <?php
// membuat array asosiatif
$tbbuku = array(
    "idbuku" => "BK014",
    "judulbuku" => "Dasar-Dasar JavaScript",
    "kategori" => "Ilmu Komputer",
    "pengarang" => "Dea",
    "penerbit" => "Media Kata",
    "status" => "Diterima"
    
);
echo"Mencetak Isi Array"."<br>";
// mencetak isi array assosiatif
echo "<p>ID Buku : ".$tbbuku["idbuku"]."</p>";
echo "<p>Judul Buku : ".$tbbuku["judulbuku"]."</p>";
echo "<p>Kategori Buku : ".$tbbuku["kategori"]."</p>";
echo "<p>Pengarang Buku : ".$tbbuku["pengarang"]."</p>";
echo "<p>Penerbit Buku : ".$tbbuku["penerbit"]."</p>";
echo "<p>Status : ".$tbbuku["status"]."</p>";


// menghapus isi array 
echo"Menghapus Isi Array"."<br>";
unset($tbbuku['idbuku']);

foreach($tbbuku as $data){
    echo "$data"."<br>";
}

echo "<br>";
print_r($tbbuku);
echo "<br>";
echo "<br>";

// menambahkan isi array
echo"Menambahkan Isi Array"."<br>";
$tbbuku['idbuku'] = "BK014";

foreach ($tbbuku as $data) {
    echo "$data"."<br>";
}
?>


</body>

</html>