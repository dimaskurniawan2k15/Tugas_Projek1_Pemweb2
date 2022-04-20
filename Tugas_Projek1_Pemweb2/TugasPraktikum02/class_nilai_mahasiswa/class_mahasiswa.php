<?php

class NilaiMahasiswa
{

  var $matakuliah;
  var $nim;
  var $nilai;

  function __construct($matkul, $nim, $nilai)
  {
    $this->matakuliah = $matkul;
    $this->nim = $nim;
    $this->nilai = $nilai;
  }

  function grade()
  {
    if ($this->nilai > 55) {
      return "LULUS";
    } else {
      return "Tidak LULUS";
    }
  }

  function Hasil()
  {
    if ($this->nilai > 100 or $this->nilai < 0) {
      return "I";
    } elseif ($this->nilai >= 85) {
      return "A";
    } elseif ($this->nilai >= 70) {
      return "B";
    } elseif ($this->nilai >= 56) {
      return "C";
    } elseif ($this->nilai >= 36) {
      return "C";
    } elseif ($this->nilai >= 0) {
      return "E";
    }
  }
}
$mahasiswa = new NilaiMahasiswa("Data Warehouse", 0, 0);

if (isset($_POST['tombol'])) {

  $mahasiswa->matakuliah = $_POST['matkul'];
  $mahasiswa->nim = $_POST['nim'];
  $mahasiswa->nilai = $_POST['nilai'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From-Get</title>
     <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid mt-2">
      <h2>Form Nilai Siswa</h2>
      <hr>
      <div class="row">
        <div class="col-12">
          <div style="width:50%; margin:auto;" class="card-body">
            <form method="post" action="">
              <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                  <input id="nama" name="nim" placeholder="Masukan NIM" required type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Pilih Mata Kuliah</label>
                <div class="col-8">
                  <select id="matkul" name="matkul" class="custom-select">
                    <option value="Dasar-dasar pemograman">Dasar-dasar pemograman</option>
                    <option value="Basis Data">Basis Data</option>
                    <option value="Pemograman Web 2">Pemograman Web 2</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai</label>
                <div class="col-8">
                  <input id="nilai_uts" required name="nilai" required placeholder="Masukan Nilai" type="number" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <div class="offset-4 col-8">
                  <button type="submit" name="tombol" class="btn btn-primary">kirim</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div>
      <hr>
      <div class="row mx-1">
        <span>Nim: <?= $mahasiswa->nim; ?> </span>
        <span>Nama Mata kuliah: <?= $mahasiswa->matakuliah; ?> </span>
        <span>Nilai : <?= $mahasiswa->nilai; ?> </span>
        <span>Hasil Ujian: <?= $mahasiswa->hasil(); ?></span>
        <span>Grade: <?= $mahasiswa->grade(); ?> </span>
      </div>
      <hr>
    </div>
    <footer style="position:relative;" class="row mx-1">
      <span style="font-weight: bold;font-size:25px">Lab Pemograman Web Lanjutan</span><br>
      <span>Dosen: Sirojul Munir S.SI,M.Kom</span><br>
      <span>STT-NF-Kampus B</span>
    </footer>

  </div>
</body>

</html>

