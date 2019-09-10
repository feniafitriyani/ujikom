<?php
include "koneksi.php";
$kode_transaksi=$_GET['kode_transaksi'];
$query=mysql_query("delete from transaksi where kode_transaksi='$kode_transaksi'");
if($query){
 ?><script language="javascript">document.location.href="tabel.php";</script><?php
}else{
 echo "gagal hapus data";
}
?>