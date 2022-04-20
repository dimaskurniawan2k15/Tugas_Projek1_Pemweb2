<?php
require_once 'class_BMI.php';
require_once 'class_pasien.php';
class bmiPasien extends bmi
{   
    public $pasien;
    function __construct($id, $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $b, $t, $tanggal)
    {
        parent::__construct($b, $t);
        $this->tanggal = $tanggal;
        $this->pasien = new pasien($id, $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender);
        
    }
}