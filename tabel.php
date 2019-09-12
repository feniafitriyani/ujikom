<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tabel</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>

<h1 align="center">Tabel Transaksi Barang</h1>

<?php
include "koneksi.php";
$query=mysql_query("select * from transaksi");
$jumlah=mysql_num_rows($query);
echo "Jumlah data ada : ".$jumlah;
?>
<div id="content-wrapper" class="d-flex flex-column">
<table border="1">
<tr align="center">
 <th>Kode</th>
 <th>Nama Mainan</th>
 <th>Harga</th>
 <th>Jumlah</th>
 <th>Subtotal</th>
 <th>Pajak</th>
 <th>Total</th>
 <th>Aksi</th>
</tr> 
<?php
while($row=mysql_fetch_array($query)){
?>
<tr>
 <td align="center"><?php echo $row['kode_transaksi'];?></td>
 <td><?php echo $row['nama_mainan'];?></td>
 <td><?php echo $row['harga'];?></td>
 <td><?php echo $row['jumlah'];?></td>
 <td><?php echo $row['subtotal'];?></td>
 <td><?php echo $row['pajak'];?></td>
 <td><?php echo $row['total'];?></td>
 <td align="center">
 <a href="delete.php?kode_transaksi=<?php echo $row['kode_transaksi']; ?>" onclick="return confirm('Apakah anda
yakin?')" class = "btn btn-warning">Delete</a>
 </td>
<?php
}
?>
</table><br />
<a href="form.php">Input data form</a> 
</div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>