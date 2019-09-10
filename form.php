<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Form</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>
<br>
<br>
 <form action="proses.php" method="post">
 <table>
 <tr>
 <td>
 <h1>Toko Mainan Aman Sejahtera</h1>
Jl. Sekeloa No. 56 No telepon 1234567890
 </td>
 </tr>
 </table>
 <table>
 <tr>
 <td>
 Nama Mainan
 </td>
 <td>
 <select name="nama_mainan" id="nama_mainan" class="form-control">
                <option value="">Pilih Mainan</option>
                <option value="mobil">Mobil</option>
				<option value="motor">Motor</option>
              </select></td>
 </tr>
 <tr>
 <td>
 Harga
 </td>
 <td>
 <input name="harga" id="harga" class="form-control">
 </td>
 </tr>
  <tr>
 <td>
 Jumlah
 </td>
 <td>
 <input name="jumlah" id="jumlah" class="form-control">
 </td>
 </tr>
 <tr>
 <td><input type="submit" name="proses" value="Proses" class="btn btn-primary"></td>
 <td><input type="reset" value="Batal" class="btn btn-danger"></td>
 </tr>
 </table>
 </form>
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