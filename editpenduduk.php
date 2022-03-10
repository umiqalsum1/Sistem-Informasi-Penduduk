<?php
include("koneksi.php");

if(!isset($_GET['nik']) ){
	header('Location: tampilmhs.php');
}

$Nim = $_GET['Nim'];

$sql = "SELECT * FROM penduduk WHERE nik = '$nik'";
$query = mysqli_query($conn, $sql);

if(mysqli_num_rows($query) > 0){
	$data = mysqli_fetch_array($query);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Edit</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>

	<div class="col-md-6 mx-auto mt-5 container"> 
		<div class="card">
			<div class="card-header bg-primary text-white">Form Input Data Penduduk</div>
			<div class="card-body">				

				<form action="proses-edit.php" method="POST">	

					<div class="mb-3">
						<label for="exampleFormControlnik" class="form-label">nik</label>
						<input type="text" class="form-control" name="nik" id= "<?php echo ($data['nik']); ?>" >
					</div>
					<div class="mb-3">
						<label for="exampleFormControlnama" class="form-label">nama</label>
						<input type="text" class="form-control" name="nama" id= "<?php echo ($data['nama']); ?>"
					</div>

				<label for="jk">jk: </label>
				<br>
				<?php $jk = $data['jk']; ?>

				<div class="form-check">
					<label><input type="radio" name="Jenis_Kelamin" value="Laki-Laki" <?php if($data['Jenis_Kelamin']=='L') echo 'checked'?>>Laki-laki</label>
					<br>
					<label><input type="radio" name="Jenis_Kelamin" value="Perempuan" <?php if($data['Jenis_Kelamin']=='P') echo 'checked'?>>Perempuan</label>
				</div>

				<div class="mb-3">
					<label for="exampleFormControltanggal lahir" class="form-label">tanggal lahir</label>
					<input type="number" class="form-control" name="tanggal lahir" id="exampleFormControl tanggal lahir" value="<?php echo ($data['tanggal lahir']); ?>">
				</div>


				
				<button type="submit" name="Simpan"  class="btn btn-succes">Update</button>

			</form>
		</div>
	</div>
</div>


</body>
</html>