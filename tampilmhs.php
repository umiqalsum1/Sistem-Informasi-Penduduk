<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>

	<div class="col-md-6 mx-auto mt-5 container">
		<div class="card">
			<div class="card-header bg-primary text-white">Daftar Hp Terbaru</div>

			<div class="card-body">
				<div class="col-md-12 text-right">
					<a class="btn btn-primary btn-sm" href="index.php"> Beranda </a>
					<a class="btn btn-primary  btn-sm" href="form_input.php"> Tambah Data </a>
				</div>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Merek_Hp</th>
							<th>Deskripsi</th>
							<th>Harga</th>
							<th>Stok</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>


						<?php

						$sql = "SELECT * FROM smartphone_tb";
						$query = mysqli_query($conn, $sql);
						if (mysqli_num_rows($query) > 0) {
							while ($data = mysqli_fetch_assoc($query)) { ?>
								<tr>
									<td><?php echo $data['ID'] ?></td>
									<td><?php echo $data['Merek_Hp'] ?></td>
									<td><?php echo $data['Deskripsi'] ?></td>
									<td><?php echo $data['Harga'] ?></td>
									<td><?php echo $data['Stok'] ?></td>

									<td>
										<a class="btn btn-success" href="edit_datahp.php?ID=<?php echo $data["ID"] ?>">Edit</a>
										<a class="btn btn-danger" href="hapus.php?ID=<?php echo $data["ID"] ?> ">Hapus</a>
									</td>
								</tr>
						<?php }
						} else ?>

					</tbody>
				</table>
				<p>Total Data: <?php echo mysqli_num_rows($query) ?> </p>
			</div>



		</div>
	</div>

</body>

</html>