<?php

include("koneksi.php");

if(isset($_GET['nik']) ){
	$nik = $_GET['nik'];

	$sql = "DELETE FROM Penduduk WHERE nik = '$nik' ";
	$query = mysqli_query($conn, $sql);

	if ($query) {
		header('Location: tampilmhs.html');
	}
	else{
		echo "gagal Menghapus...";
	}

} else{
	echo "Akses Di larang";
}
?>