<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this -> jari_jari = $jari_jari;
    }

    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }

    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct ($jari_jari) {
        $this -> jari_jari = $jari_jari;
    }

    public function volume() : float {
        return (4/3)*self::PHI*pow($this->jari_jari,3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct ($jari_jari,$tinggi) {
        $this -> jari_jari = $jari_jari;
        $this -> tinggi = $tinggi;
    }


    public function volume() : float {
        return self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari,$tinggi){
        $this -> jari_jari = $jari_jari;
        $this -> tinggi = $tinggi;
    }

    public function volume() : float 
    {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}

$lingkaran = new Lingkaran(7);
echo "Keliling lingkarannya adalah ". $lingkaran->keliling()."\n";
echo "Luas lingkarannya adalah ". $lingkaran->luas()."\n";

$bola = new Bola(7);
echo "Volume bolanya adalah ". $bola->volume()."\n";

$tabung = new Tabung(7,4);
echo "Volume tabungnya adalah ". $tabung->volume()."\n";

$kerucut = new Kerucut(7,4);
echo "Volume kerucutnya adalah ". $kerucut->volume()."\n";