<?php
namespace App\Admin;
class Pegawai
{
    public int $nip;
    public string $nama;
    protected int $no_hp;
    public string $alamat;

    public function  cekIn(){
    }
    public function cekOut(){
    }
    public function getNoHp(){
    }
    public function setNoHp(): void{
    } 
}