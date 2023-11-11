<?php

class Manusia {
    public $nama_saya;
    private $nim_saya;

    public function panggil_nama($saya){
        $this->nama_saya = $saya;
    }
    // Menambahkan metode untuk mengatur properti nim_saya
    public function setNim($nim)
    { 
        $this->nim_saya = $nim;
    }
    // Menambahkan metode untuk mengambil properti nim_saya
    public function getNim() { 
        return $this->nim_saya;
    }
}

class Mahasiswa extends Manusia {
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa) {
        $this->nama_mahasiswa = $mahasiswa;
    }
    // Menambahkan metode untuk mengatur properti nim_saya
    function setNim($nim)
    { 
        // Memanggil metode setNim dari kelas induk
        parent::setNim($nim); 
    }
    // Menambahkan metode untuk mengambil properti nim_saya
    function getNim()
    { 
        // Memanggil metode getNim dari kelas induk
        return parent::getNim(); 
    }
}

$informatika = new Mahasiswa();

$informatika->panggil_nama("Meilya");
$informatika->panggil_mahasiswa("Atiffah");
$informatika->setNim("220302059");

echo "Nama depan saya: " . $informatika->nama_saya . "<br/>";
echo "Nama belakang saya: " . $informatika->nama_mahasiswa . "<br/>";
echo "NIM saya: " . $informatika->getNim();