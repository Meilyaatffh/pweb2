<?php
include '../classes/database.php';
$db=new database();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<div class="px-4 py-3">

<h3 class="text-center mt-5">Edit Data Dosen</h3>
<div class="card px-3 py-3" style="margin: 25px auto; padding: 20px; max-width:400px">
<form action="proses_dosen.php?aksi=update" method="post">
<?php
foreach($db->edit_dosen($_GET['id']) as $dosen){
?>
<table>
<div class="row g-3 align-items-center mb-3 mt-1">
    <label class="form-label">Nama</label>
</div>
    <input type ="text" name="nama" class="form-control" style="width: 200px;" value="<?php echo $dosen['nama'] ?>">
  </div>

<div class="row g-3 align-items-center mb-3 mt-1">
    <label class="form-label">NIDN</label>
</div>
    <input type ="text" name="nidn" class="form-control" style="width: 200px;" value="<?php echo $dosen['nidn'] ?>">
</div>

<div class="row g-3 align-items-center mb-3 mt-1">
      <label class="form-label">Alamat</label>
</div>
    <textarea name ="alamat" cols="30" rows="4" class="form-control"><?php echo $dosen['alamat'] ?></textarea>
</div>

<div class="row g-3 align-items-center mb-3 mt-1">
    <label class="form-label">Matkul</label>
</div>
    <input type ="text" name="matkul" class="form-control mb-3" style="width: 200px;" value="<?php echo $dosen['matkul'] ?>">
</div>  
  <a href="tampil_dosen.php" class="btn btn-primary" style="margin-right: 10px;">Kembali</a>
  <a href="tampil_dosen.php" class="btn btn-success">Simpan</a>
</table>
</form>
<?php
}
?>
</form>
</div>