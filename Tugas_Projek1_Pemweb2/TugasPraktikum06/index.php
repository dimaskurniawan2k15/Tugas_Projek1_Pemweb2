<?php
require_once 'class_BMI_pasien.php';
$pasien1 = new bmiPasien(1, "P001", "Ahmad", "Bogor", "2020-09-09", "ahmad@gmail.com", "L", 69.8, 1.69, "2022-01-10");
$pasien2 = new bmiPasien(2, "P002", "Rina", "Bogor", "2020-09-09", "rina@gmail.com", "P", 55.3, 1.65, "2022-01-10");
$pasien3 = new bmiPasien(3, "P003", "Lutfi", "Bogor", "2020-09-09", "lutfi@gmail.com", "L", 45.2, 1.71, "2022-01-11");


$array = [$pasien1, $pasien2, $pasien3];

if (isset($_POST['submit'])) {

	$id = 4;
	$kode = $_POST['kode'];
	$nama = $_POST['nama'];
	$tmp_lahir = "Bogor";
	$tgl_lahir = "2000-09-09";
	$email = $_POST['nama'] . "@gmail.com";
	$gender = $_POST['gender'];
	$berat = (int)$_POST['berat'];
	$tinggi = $_POST['tinggi'] / 100;
	$tanggal = $_POST['tanggal'];

	$pasien4 = new bmiPasien($id, $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $berat, $tinggi, $tanggal);
	$array[] = $pasien4;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BMI Pasien</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<form action="" method="POST">
			<div class="form-group row">
				<label class="col-4 col-form-label" for="nama">Nama</label>
				<div class="col-8">
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
							</div>
						</div>
						<input name="nama" type="text" required="required" class="form-control">
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-4 col-form-label" for="date">Tanggal Periksa</label>
				<div class="col-8">
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
							</div>
						</div>
						<input name="tanggal" type="date" required="required" class="form-control">
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-4 col-form-label" for="pasien">Kode Pasien</label>
				<div class="col-8">
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
							</div>
						</div>
						<input name="kode" type="text" required="required" placeholder="P000" class="form-control">
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label for="berat" class="col-4 col-form-label">Berat</label>
				<div class="col-8">
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
							</div>
						</div>
						<input name="berat" type="text" class="form-control">
						<div class="input-group-append">
							<div class="input-group-text">Kg</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label>
				<div class="col-8">
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">

							</div>
						</div>
						<input name="tinggi" type="number" class="form-control">
						<div class="input-group-append">
							<div class="input-group-text">cm</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-4">Gender</label>
				<div class="col-8">
					<select name="gender">
						<option value="L">Laki-Laki</option>
						<option value="P">Perempuan</option>
					</select><br><br>
				</div>
			</div>
			<div class="form-group row">
				<div class="offset-4 col-8">
					<button name="submit" type="submit" class="btn btn-success">Kirim</button>
				</div>
			</div>
		</form>
		</form>
		<br>
		<div class="card-body table-responsive">
			<table class="table table-stripe">
				<thead class="thead-dark">
					<tr>
						<th>No</th>
						<th>Tanggal Periksa</th>
						<th>Kode Pasien</th>
						<th>Nama Pasien</th>
						<th>Gender</th>
						<th>Berat (KG)</th>
						<th>Tinggi (CM)</th>
						<th>Nilai BMI</th>
						<th>Status BMI</th>
					</tr>
				</thead>
				<?php foreach ($array as $a) : ?>
					<tr>
						<td><?php echo $a->pasien->id; ?></td>
						<td><?php echo $a->tanggal; ?></td>
						<td><?php echo $a->pasien->kode; ?></td>
						<td><?php echo $a->pasien->nama; ?></td>
						<td><?php echo $a->pasien->gender; ?></td>
						<td><?php echo $a->berat; ?></td>
						<td><?php echo ($a->tinggi * 100); ?></td>
						<td><?php echo number_format($a->nilaiBmi(), 2); ?></td>
						<td><?php echo $a->statusBmi(); ?></td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
</body>
</html>