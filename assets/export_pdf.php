<?php
    include('koneksi/koneksi.php');
    require('../vendor/autoload.php');
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    $data = mysqli_query($koneksi,"select*from tbbuku");
    $kodeHtml = '<style>th,td {
        padding : 5px; } </style>
    <table class="table table-striped" border=1>
    <thead>
    <tr>
    <th scope="col">No</th>
    <th scope="col">ID Buku</th>
    <th scope="col">Judul Buku</th>
    <th scope="col">Kategori</th>
    <th scope="col">Pengarang</th>
    <th scope="col">Penerbit</th>
    <th scope="col">Status</th>
    </tr>
    </thead>';
    $number = 1;
    $kodeHtml .="<tbody>";
        while ($a = mysqli_fetch_array($data)) {
                $kodeHtml.="<tr>
                <td>".$number++."</td>
                <td>".$a['idbuku']."</td>
                <td>".$a['judulbuku']."</td>
                <td>".$a['kategori']."</td>
                <td>".$a['pengarang']."</td>
                <td>".$a['penerbit']."</td>
                <td>".$a['status']."</td>
                </tr>";
            }
        $kodeHtml .="</tbody>";
        $kodeHtml .="</table>";
        // print_r($kodeHtml);
        // exit;
    $dompdf->loadHtml($kodeHtml);
    $dompdf->setPaper('A4','landscape');
    $dompdf->render(); //tadi gini
    $dompdf->stream('Data Buku Perpustakaan.pdf');
?>
