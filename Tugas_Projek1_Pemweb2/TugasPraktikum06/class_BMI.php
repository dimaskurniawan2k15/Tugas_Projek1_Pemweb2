<?php
class bmi {
    public $berat, $tinggi;
    function __construct($b, $t)
    {
        $this->berat = $b;
        $this->tinggi = $t;
    }

    function nilaiBmi()
    {
        $hasil = $this->berat / ($this->tinggi * $this->tinggi);
        return $hasil;
    }

    function statusBmi()
    {
        if($this->nilaiBmi() < 18.5){
            return 'Kekurangan berat badan';
        }elseif ($this->nilaiBmi() >= 18.5 && $this->nilaiBmi() <= 24.9 ) {
            return 'Normal (Ideal)';
        }elseif ($this->nilaiBmi() >= 25.0 && $this->nilaiBmi() <= 29.9 ) {
            return 'Kelebihan berat badan';
        }elseif ($this->nilaiBmi() >= 30.0) {
            return 'Kegemukan (Obesitas)';
        }
    }
}