<?php
session_start();
if (!isset($_SESSION['username'])) {
	die("Please <a href=\"login.php\">Login</a>");
	}

include("../dbconnect.php");

$id = $_GET['id'];
$status = $_GET['status'];

$sql = "UPDATE peminjam SET status='{$status}' WHERE no_pendaftaran='{$id}'";

if (mysqli_query($connection, $sql)) {
    echo "Status dikemaskini";
} else {
    echo "Status tidak dikemaskini";
}

echo "<meta http-equiv=\"refresh\" content=\"3;url=verify.php\" />";

mysqli_close($connection);


?>