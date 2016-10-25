<html>
<center>
<h2>Status Semakan Pinjaman Alatan Sukan</h2>
<p>Senarai pelajar yang memohon dan status pinjaman.</p>
<?php

include('dbconnect.php');

$sql = "SELECT `nama_penuh`,`no_pendaftaran`,`status` FROM peminjam";

$result = mysqli_query($connection,$sql);
echo "<table border=\"1\"><tr><td>Nama Penuh</td><td>No. Pendaftaran</td><td>Status Pinjaman</td></tr>";
while ($res = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	echo "<tr>
	<td>".$res['nama_penuh']."</td>
	<td>".$res['no_pendaftaran']."</td>
	<td>".$res['status']."</td>
	</tr>";
	}
echo "</table>";
mysqli_close($connection);

?>
</center>
</html>