<?php
//memanggil class database
include '../classes/database.php';
//instansiasi class database
$db=new database;
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <div class = "px-3 py-3">
    <nav class="navbar navbar-expand-lg bg-body-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SIAKAD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tampil_mhs.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_dosen.php">Dosen</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class = "px-5">
<h3>Data Dosen</h3>
<a class="btn btn-primary mb-3 mt-2" href="input_dosen.php">Tambah Dosen</a>
<table class="table table-striped" style="width:70%">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIDN</th>
    <th>Alamat</th>
    <th>Matkul</th>
    <th>Aksi</th>
</tr>
<?php
$no=1;
foreach($db->tampil_dosen() as $dosen)
{
    ?>
    <tr>
        <td><?php echo$no++ ?></td>
        <td><?php echo$dosen ['nama'] ?></td>
        <td><?php echo$dosen ['nidn'] ?></td>
        <td><?php echo$dosen ['alamat'] ?></td>
        <td><?php echo$dosen ['matkul'] ?></td>
        <td>
            <a class="btn btn-warning" href="edit_dosen.php?id=<?php echo $dosen['id']; ?>&aksi=edit_dosen">Edit</a>
            <a class="btn btn-danger" href="proses_dosen.php?id=<?php echo $dosen['id']; ?>&aksi=hapus_dosen">Hapus</a>
        </td>
    </tr>
    <?php
}
?>
</table>