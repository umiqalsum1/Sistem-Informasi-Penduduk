<?php

if(isset($_POST['input'])){
	$nik 			= $_POST['nik'];
	$nama 			= $_POST['nama'];
	$jk 			= $_POST['jk'];
	$tanggal lahir	= $_POST['tanggal lahir'];

	include 'koneksi.php';

	$sql="INSERT INTO PENDUDUK  VALUES ('$nik ', '$nama', '$jk', '$tanggal lahir')";

	if (mysqli_query($conn, $sql)) {
		echo "Data berhasil disimpan";
		echo "<br>";
		echo"<a href='../input -mhs.php'>isi data lagi<a/>";
	}
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn) ;
	}	
}



?>
