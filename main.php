<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<h2>Aplikasi Harga Barang</h2>
<hr>
<a class="btn btn-info" href="tambah.php">Tambah Data</a>

<?php
include "koneksi.php";
$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->ambilKoneksi();

if  ($koneksi->connect_error) {
    die("Koneksi gagal : " . $koneksi->connect_error);    
} //else {
  //  echo "Koneksi ke basis data SUKSES!";
//}

$qry = "select * from harga_barang";
$data = $koneksi->query($qry);

?>

<table border="1" class="table">
<thead>
    <tr>
        <th>KODE</th>
        <th>NAMA BARANG</th>
        <th>HARGA</th>
    </tr>
</thead>
<tbody>
<?php
if($data->num_rows <= 0) {
    echo "<tr><td>";
    echo "DATA NIHIL";
    echo "</td></tr>";
} else {
    while($row = $data->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["kode"] . "</td>";
        echo "<td>" . $row["nama_barang"] . "</td>";
        echo "<td>" . $row["harga"] . "</td>";
        echo '<td><a href="edit-form.php?kode=' . 
            $row["kode"] . '">Edit</a>';
        echo '<td><a href="hapus.php?kode=' . 
            $row["kode"] . '">Hapus</a>';
        echo "</tr>";
    }
}
?>
</tbody>
</table>
</div>
</body>
</html>