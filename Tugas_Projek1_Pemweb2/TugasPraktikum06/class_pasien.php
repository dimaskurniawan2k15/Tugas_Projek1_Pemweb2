<?php
class pasien 
{
    public $id, $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender;

    function __construct($id, $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender)
    {
        $this->id = $id;
        $this->kode = $kode;
        $this->nama = $nama;
        $this->tmp_lahir = $tmp_lahir;
        $this->tgl_lahir = $tgl_lahir;
        $this->email = $email;
        $this->gender = $gender;
    }
}