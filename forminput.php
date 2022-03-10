<!DOCTYPE html>
<html>
<head>
	<title>FORM INPUT PENDUDUK</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

	

	<div class="col-md-6 mx-auto mt-5 container"> 
		<div class="card">
			<div class="card-header bg-primary text-white">FORM INPUT DATA PENDUDUK</div>
			<div class="card-body">

				<form action="proses-simpan.php" method="POST">

					<div class="mb-3">
						<label for="exampleFormControlNim" class="form-label">nik</label>
						<input type="text" class="form-control" name="nik" id="exampleFormControlInput1" placeholder="nik">
					</div>

					<div class="mb-3">
						<label for="exampleFormControlNama" class="form-label">nama</label>
						<input type="text" class="form-control" name="nama" id="exampleFormControlnama" placeholder="nama">
					</div>

					<div class="mb-3">
						<label for="exampleFormControljk" class="form-label">jk</label>
						<select class="form-select" name="jk" aria-label="Default select example">
							
							<option value="Laki-Laki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</div>

					<div class="mb-3">
						<label for="exampleFormControl tanggal lahir" class="form-label">tanggal lahir</label>
						<input type="number" class="form-control" name="tanggal lahir " id="exampleFormControl tanggal lahir" placeholder="tanggal lahir">
					</div>
		
					<button type="submit" name="input" class="btn btn-success">Submit</button>




					
				</form>
			</div>
		</div>
	</div>


</body>
</html>