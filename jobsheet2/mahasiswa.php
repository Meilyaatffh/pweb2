<?php
//membuat class
class mahasiswa
{
//menuliskan property
var $nim;
var $nama = "Meilya";
var $alamat;


//method untuk menampilkan nama
function tampil_nama()
{
return "Nama saya adalah " .$this->nama . "</br>";
}
//method untuk menampilkan alamat
function tampil_alamat()
{
//isi method
}
}

class dosen{
    //menuliskan property
    var $nidn ="123456778";
    var $nama="Cha Eunwo";
    var $prodi="Teknik Informatika";

    //method untuk menampilkan nidn
    function tampil_nidn()
    {
        return "NIDN = " . $this->nidn . "</br>";
    }

    //method untuk menampilkan nama
    function tampil_namadosen()
    {
        return "Nama Dosen = " . $this->nama . "</br>";
    }

    //method untuk menampilkan prodi
    function tampil_prodi()
    {
        return "Prodi = " . $this->prodi;
    }

}

//membuat objek nama mahasiswa
$nama_mahasiswa = new mahasiswa();

//menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama();

//menampilkan objek nama dose
$nama_dosen = new dosen();

//menampilkan objek ke layar
echo $nama_dosen->tampil_nidn();
echo $nama_dosen->tampil_namadosen();
echo $nama_dosen->tampil_prodi();

?>
