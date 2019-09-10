<?php
include "koneksi.php";
$nama_mainan=$_POST['nama_mainan'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];
$subtotal=$_POST['subtotal'];
$pajak=$_POST['pajak'];
$total=$_POST['total'];

$subtotal = $harga*$jumlah;

$pajak = $subtotal*0.1;

$total = $subtotal + $pajak;


$query=mysql_query("insert into transaksi(nama_mainan, harga, jumlah, subtotal, pajak, total) value('$nama_mainan','$harga','$jumlah','$subtotal','$pajak','$total')");
if($query){
 echo "Berhasil input data ke database ";
 ?><a href="tabel.php">Lihat data di Tabel</a><?php
}else{
 echo "Gagal input data";
 echo mysql_error();
}
?> 
