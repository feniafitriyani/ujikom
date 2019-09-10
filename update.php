<?php
include "koneksi.php";
$kode_transaksi=$_GET['kode_transaksi'];
$query=mysql_query("select * from transaksi where kode_transaksi='$kode_transaksi'");
?>
<form action="simpan.php" method="post">
<table border="1">
<?php
while($row=mysql_fetch_array($query)){
 ?>
 <input type="hidden" name="kode_transaksi" value="<?php echo $kode_transaksi;?>"/>
 <tr>
 <td>Nama Mainan</td><td>
 <select name="nama_mainan" id="nama_mainan">
                <option value=""><?php echo $row['nama_mainan'];?></option>
				<option value="mobil">Mobil</option>
				<option value="motor">Motor</option>
              </select></td></td>
 </tr>
 <tr><td>Harga</td><td><input type="text" name="harga" value="<?php echo $row['harga'];?>" /></td>
 </tr>
 <tr><td>Jumlah</td><td><input type="text" name="harga" value="<?php echo $row['jumlah'];?>" /></td>
 </tr>
 <tr><td><input type="submit" value="Simpan" name="simpan" /></td>
 </tr>
 <?php
}
?>
</table>
</form> 