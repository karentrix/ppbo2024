<?php

class Hitung
{
    public $jari;
    public $tinggi;

    public function luasLingkaran($jari) : float 
    {
        $luas = 3.14*$jari*$jari;
        return $luas;
    }
    
    public function kelilingLingkaran($jari) : float 
    {
        $keliling = 3.14*2*$jari;
        return $keliling;
    }

    public function volumeBola($jari) : float 
    {
        $volumebola = (4/3)*3.14*$jari**3;
        return $volumebola;
    }

    public function volumeTabung($jari, $tinggi) : float 
    {
        $volumetabung = 3.14*$jari**2*$tinggi;
        return $volumetabung;
    }

    public function volumeKerucut($jari, $tinggi) : float 
    {
        $volumekrucut = (1/3)*3.14*$jari**2*$tinggi;
        return $volumekrucut;
    }
}

$hitungbangun = new Hitung ();
$hitungbangun -> jari=7;
echo "Luas lingkarannya adalah ". $hitungbangun -> luasLingkaran(7)."\n";
echo "Keliling lingkarannya adalah ". $hitungbangun -> kelilingLingkaran(7)."\n";
echo "Volume bolanya adalah ". $hitungbangun -> volumeBola(7)."\n";
$hitungbangun->tinggi = 10;
echo "Volume tabungnya adalah ". $hitungbangun -> volumeTabung(7,5)."\n";
echo "Volume kerucutnya adalah ". $hitungbangun -> volumeKerucut(7,5)."\n";