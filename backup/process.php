<?php

include('dbconnect.php');

// passing values to variable from pinjam.php
$nama = $_POST['nama'];
$nopendaftaran = $_POST['nopendaftaran'];
$telefon = $_POST['telefon'];
$brg1 = $_POST['brg1'];
$brg2 = $_POST['brg2'];
$brg3 = $_POST['brg3'];
$tarikh = $_POST['tarikh'];
$pinjam = $_POST['tujuanpinjaman'];

$sql = "
INSERT INTO peminjam(nama_penuh,no_pendaftaran,telefon,senarai_barang,tarikh,tujuan,status)
VALUES('$nama','$nopendaftaran','$telefon','$brg1,$brg2,$brg3','$tarikh','$pinjam','pending')";

if (mysqli_query($connection, $sql)) {
    echo "Permohonan telah dihantar.<br>Permohanan akan disemak oleh pengurusan";
} else {
    echo "Permohonan tidak direkod.<br>Sila isi semula.";
}
echo "<meta http-equiv=\"refresh\" content=\"3;url=main.php\" />";

mysqli_close($connection);

?>