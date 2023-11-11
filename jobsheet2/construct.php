<?php
//membuat class
class mahasiswa
{
//menuliskan property
var $nim;
var $nama = "Meilya";
var $alamat;

//method untuk menampilkan nama
function __construct()
{
    echo "Saya Mahasiswa Teknik Informatika";
    echo "<br>";
}

function __destruct()
{
    echo "Politeknik Negeri Cilacap";
}
function tampil_nama()
{
return "Nama saya adalah " .$this->nama . "<br>";
}

function tampil_mahasiswa()
{
    return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah </br>";
}
//method untuk menampilkan alamat
function tampil_alamat()
{
//isi method
}
}

//membuat objek nama mahasiswa
$nama_mahasiswa = new mahasiswa();

//menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_mahasiswa();
?>