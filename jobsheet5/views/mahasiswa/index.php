<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php'; 
//instansiasi class database
$database=new database;
$db = $database->getKoneksi();

$mahasiswaController = new MahasiswaController($db);
$mahasiswa= $mahasiswaController->getAllMahasiswa();
?>

  
    
<div class = "px-5">
<h3>Data Mahasiswa</h3>
<a class="btn btn-primary mb-3 mt-2" href="tambahMahasiswa">Tambah Mahasiswa</a>
<table class="table table-striped" style="width:100%">
<tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Tempat Lahir</th>
    <th>Jenis Kelamin</th>
    <th>Agama</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>
<?php
$no=1;
foreach($mahasiswa as $x)
{
    ?>
    <tr>
        <td><?php echo$no++ ?></td>
        <td><?php echo$x ['nim'] ?></td>
        <td><?php echo$x ['nama'] ?></td>
        <td><?php echo$x ['tempat_lahir'] ?></td>
        <td><?php echo$x ['jenis_kelamin'] ?></td>
        <td><?php echo$x ['agama'] ?></td>
        <td><?php echo$x ['alamat'] ?></td>
        <td>
            <a class="btn btn-warning" href="editMahasiswa?id=<?php echo $x['id']; ?>">Edit</a>
            <a class="btn btn-danger" href="hapusMahasiswa?id=<?php echo $x['id']; ?>"onclick="return confirm('Apakah yakin akan menghapus..?')">Hapus</a>
        </td>
    </tr>
    <?php
}
?>
</table>
</div>
</div>