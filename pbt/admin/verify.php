<?php
session_start();

if (!isset($_SESSION['username'])) {
	die("Please <a href=\"login.php\">Login</a>");
	}
?>
<!DOCTYPE html>
<style>
footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}

header{
    padding: 1em;
    color: white;
    background-color: blue;
	opacity: 0.5;
    clear: left;
    text-align: center;
}
</style>
<center>
<header><h2>Status Semakan Pinjaman Alatan Sukan</h2></header>
<p>Senarai pelajar yang memohon dan status pinjaman.<br>
Sila tekan icon betul untuk lulus dan icon pangkah untuk tidak lulus</p>
<?php	

include('../dbconnect.php');

$sql = "SELECT * FROM peminjam";

$result = mysqli_query($connection,$sql);
echo "<table border=\"1\"><tr bgcolor='#FFCC00'><td>Nama Penuh</td><td>No. Pendaftaran</td><td>No. Telefon</td><td>Senarai Barang</td><td>Tarikh</td><td>Tujuan Pinjaman</td><td>Status Pinjaman</td></tr>";

while ($res = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	
	echo "<tr>
	<td>".$res['nama_penuh']."</td>
	<td>".$res['no_pendaftaran']."</td>
	<td>".$res['telefon']."</td>
	<td>".$res['senarai_barang']."</td>
	<td>".$res['tarikh']."</td>
	<td>".$res['tujuan']."</td>
	<td>".$res['status']."<br>
	<a href=\"process2.php?id={$res['no_pendaftaran']}&status=Lulus\"><img src=\"images/lulus.jpg\" alt=\"Lulus\">
</a>
	<a href=\"process2.php?id={$res['no_pendaftaran']}&status=Tidak Lulus\"><img src=\"images/xlulus.jpg\" alt=\"Lulus\"></a>
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

?>
</center>
<br>
<footer><a href="logout.php">Logout</a></footer>
</html>