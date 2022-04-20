<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div>
<h2> Belanja Online </h2>
</div>
<hr>
<table class="table table-sm " style="width:30%; float: right; border:1px solid black;">
  <thead>
    <tr>
        <th class="table-primary">Daftar Harga</th>
    </tr>
  </thead>
    <tr>
        <td>Laptop : 6.700.000</td>
    </tr>
    <tr>
        <td>Kamera : 5.020.000</td>
    </tr>
    <tr>
        <td>PC : 8.000.000</td>        
    </tr>
        <td class="table-primary"><b>Harga Dapat Berubah Setiap Saat</td>
    </tr>   
</table>
<br>
<br>
<form method="POST" action="Tugas_Praktikum02.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Costumer</label> 
    <div class="col-8">
      <input id="text" name="nama" placeholder="Nama Costumer" type="text" class="form-control" value="" style="width: 50%;">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="Laptop"> 
        <label for="radio_0" class="custom-control-label">Laptop</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="Kamera"> 
        <label for="radio_1" class="custom-control-label">Kamera</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="PC"> 
        <label for="radio_2" class="custom-control-label">PC</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="text1" name="jumlah" placeholder="Jumlah" type="text" class="form-control" value="" style="width: 50%;">
    </div>
  </div> 
  <div class="form-group row">
    <div class="col-8" style="margin-left: 10px;">
      <button name="kirim" type="submit" class="btn btn-primary" value="">Kirim</button>
      <button name="reset" type="reset" class="btn btn-primary" value="">Reset</button>
    </div>
  </div>
</form>
<br>
<br>
<br>
<hr>
<?php
$Nama_costumer = isset ($_POST['nama']) ? $_POST['nama'] : '';
$Produk = isset ($_POST['produk']) ? $_POST['produk'] : '';
$Jumlah = isset ($_POST['jumlah']) ? $_POST['jumlah'] : '';

    echo '<br>Costumer : ' . $Nama_costumer;
    echo '<br>Produk : ' . $Produk;
    echo '<br>Jumlah : ' . $Jumlah;

define('Laptop', 6700000);
define('Kamera', 5020000);
define('PC', 8000000);

$Laptop = Laptop * intval($Jumlah);
$Kamera = Kamera * intval($Jumlah);
$PC = PC * intval($Jumlah);

    switch($Produk){
      case 'Laptop' :
        echo '<br>Total Bayar : '. 'Rp.' . $Laptop;
        break;
      
      case 'Kamera' :
        echo '<br>Total Bayar : ' . 'Rp.' . $Kamera;
        break;
      
      case 'PC' :
        echo '<br>Total Bayar : ' . 'Rp.'. $PC;
        break;
    }

?>
</body>
</html>