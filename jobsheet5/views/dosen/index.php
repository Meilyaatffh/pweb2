<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php'; 
//instansiasi class database
$database=new database;
$db = $database->getKoneksi();

$dosenController = new DosenController($db);
$dosen= $dosenController->getAllDosen();
?>

  
    
<div class = "px-5">
<h3>Data Dosen</h3>
<a class="btn btn-primary mb-3 mt-2" href="tambahDosen">Tambah Dosen</a>
<?php 
if(isset($_GET['success']) && $_GET['success'] == "tambah"){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Data Mahasiswa Berhasil Ditambahkan!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
elseif(isset($_GET['success']) && $_GET['success'] == "update"){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Data Mahasiswa Berhasil Diedit!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
elseif(isset($_GET['success']) && $_GET['success'] == "hapus"){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Data Mahasiswa Berhasil Dihapus!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
<table class="table table-striped" style="width:100%">
<tr>
    <th>No</th>
    <th>NIDN</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Matkul</th>
    <th>Aksi</th>
</tr>
<?php
$no=1;
foreach($dosen as $x)
{
    ?>
    <tr>
        <td><?php echo$no++ ?></td>
        <td><?php echo$x ['nidn'] ?></td>
        <td><?php echo$x ['nama'] ?></td>
        <td><?php echo$x ['alamat'] ?></td>
        <td><?php echo$x ['matkul'] ?></td>
        <td>
            <a class="btn btn-warning" href="editDosen?id=<?php echo $x['id']; ?>">Edit</a>
            <a class="btn btn-danger" href="hapusDosen?id=<?php echo $x['id']; ?>"onclick="return confirm('Apakah yakin akan menghapus..?')">Hapus</a>
        </td>
    </tr>
    <?php
}
?>
</table>
</div>
</div>