<?php
//membuat class mahasiswa
class mahasiswa
{
    //property public dan private
    public $nama;
    private $nim = "220302059";

    //public method
    function tampilkan_nama()
    {
        //nilai kembalian
        return "Nama Saya Meilya </br>"; 
    }
    //membuat private method
    function tampilkan_nim()
    {
        return "NIM saya " .$this->nim;
    }
}
//instansiasi objek mahasiswa kedalam variabel $mahasiswa
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();

//memanggil method tampilkan nama
echo $mahasiswa->tampilkan_nama();
echo $nim->tampilkan_nim();