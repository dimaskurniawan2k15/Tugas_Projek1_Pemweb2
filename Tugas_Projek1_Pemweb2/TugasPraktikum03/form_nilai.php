<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div>
<h2> Form Nilai </h2>
</div>
<hr>
<br>

<form method="GET" action="Tugas_Praktikum02.php" style = "margin-left : 30%;">
  <div class="form-group row">
    <label for="text" class="col-2 col-form-label">Nama Lengkap</label> 
    <div class="col-7">
      <input id="text" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" value="" style="width: 50%">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-2 col-form-label">Mata Kuliah</label> 
    <div class="col-7">
      <select id="select" name="matkul" class="custom-select" style="width: 50%">
        <option value="DDP">Dasar-Dasar Pemograman</option>
        <option value="BD1">Basis Data 1</option>
        <option value="WEB1">Pemograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-2 col-form-label">Nilai UTS</label> 
    <div class="col-7">
      <input id="text1" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control" value="" style="width: 50%">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-2 col-form-label">Nilai UAS</label> 
    <div class="col-7">
      <input id="text2" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control" value="" style="width: 50%">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-2 col-form-label">Nilai Tugas / Praktikum</label> 
    <div class="col-7">
      <input id="text3" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control" value="" style="width: 50%">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-7">
      <button name="proses" value="Simpan" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
<br>
<br>
<hr>

<?php
$Proses = isset ($_GET['proses']) ? $_GET['proses'] : '';
$Nama_siswa = isset ($_GET['nama']) ? $_GET['nama'] : '';
$Mata_kuliah = isset ($_GET['matkul']) ? $_GET['matkul'] : '';
$Nilai_UTS = isset ($_GET['nilai_uts']) ? $_GET['nilai_uts'] : '';
$Nilai_UAS = isset ($_GET['nilai_uas']) ? $_GET['nilai_uas'] : '';
$Nilai_tugas = isset ($_GET['nilai_tugas']) ? $_GET['nilai_tugas'] : '';

    echo 'Proses : ' . $Proses;
    echo '<br>Nama Siswa : ' . $Nama_siswa;
    echo '<br>Mata Kuliah : ' . $Mata_kuliah;
    echo '<br>Nilai UTS : ' . $Nilai_UTS;
    echo '<br>Nilai UAS : ' . $Nilai_UAS;
    echo '<br>Nilai Tugas Praktikum : ' . $Nilai_tugas;
    
?>
