<?php

class database
{
    var $host="localhost";
    var $username="root";
    var $password="";
    var $db="akademik";
    var $koneksi;

    function __construct()
    {
       $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        
    }

    function tampil_mahasiswa()
    {
        $data = mysqli_query($this->koneksi,"select * from mahasiswa");
        while($d = mysqli_fetch_array($data))
        {
            $hasil[]=$d;
        }
        return $hasil;
    }

    function tambah_mhs($nim, $nama, $alamat)
    {
        mysqli_query($this->koneksi,"insert into mahasiswa (nim, nama, alamat) values('$nim','$nama', '$alamat')");
    }
    function edit($id)
    {
        $data = mysqli_query($this->koneksi,"select * from mahasiswa where id='$id'");
        while ($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
            return $hasil;
        }
    }

    function update($id, $nim, $nama, $alamat)
    {
        mysqli_query($this->koneksi,"update mahasiswa set nim='$nim', nama='$nama',alamat='$alamat' where id='$id'");
    }

    function hapus($id)
    {
        mysqli_query($this->koneksi,"delete from mahasiswa where id='$id'");
    }

//tabel dosen
    function tampil_dosen()
    {
        $hasil = [];
        $data_dosen = mysqli_query($this->koneksi,"select * from dosen");
        while($dosen = mysqli_fetch_array($data_dosen))
        {
            $hasil[]=$dosen;
        }
        return $hasil;
    }

    function tambah_dosen($nama, $nidn, $alamat, $matkul)
    {
        mysqli_query($this->koneksi,"insert into dosen (nama, nidn, alamat, matkul) values('$nama','$nidn', '$alamat', '$matkul')");
    }
    function edit_dosen($id)
    {
        $data = mysqli_query($this->koneksi,"select * from dosen where id='$id'");
        while ($dosen=mysqli_fetch_array($data)){
            $hasil[]=$dosen;
            return $hasil;
        }
    }

    function update_dosen($id, $nama, $nidn, $alamat, $matkul)
    {
        mysqli_query($this->koneksi,"update dosen set nama='$nama', nidn='$nidn',alamat='$alamat', matkul='$matkul' where id='$id'");
    }

    function hapus_dosen($id)
    {
        mysqli_query($this->koneksi,"delete from dosen where id='$id'");
    }

}