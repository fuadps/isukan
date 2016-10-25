<html>
<center>
<h2>Status Semakan Pinjaman Alatan Sukan</h2>
<p>Senarai pelajar yang memohon dan status pinjaman.</p>
<?php
session_start();	
if (isset($_SESSION['username'])) {

include('dbconnect.php');

$sql = "SELECT * FROM peminjam";

$result = mysqli_query($connection,$sql);
echo "<table border=\"1\"><tr><td>Nama Penuh</td><td>No. Pendaftaran</td><td>No. Telefon</td><td>Senarai Barang</td><td>Tarikh</td><td>Tujuan Pinjaman</td><td>Status Pinjaman</td></tr>";

while ($res = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	
	echo "<tr>
	<td>".$res['nama_penuh']."</td>
	<td>".$res['no_pendaftaran']."</td>
	<td>".$res['telefon']."</td>
	<td>".$res['senarai_barang']."</td>
	<td>".$res['tarikh']."</td>
	<td>".$res['tujuan']."</td>
	<td>".$res['status']."<br>
	<a href=\"process2.php?id={$res['no_pendaftaran']}&status=Lulus\">Lulus</a>
	<a href=\"process2.php?id={$res['no_pendaftaran']}&status=Tidak Lulus\">Tidak-Lulus</a>
	</td>
	</tr>";
	}
echo "</table>";
/*
if(isset($_POST['ubah'])) {
	//UPDATE peminjam SET status='Lulus' WHERE nama_penuh='setan'
	}
*/
mysqli_close($connection);

}
else {
	echo "Please <a href=\"login.php\">Login</a>";
}
?>
</center>
</html>