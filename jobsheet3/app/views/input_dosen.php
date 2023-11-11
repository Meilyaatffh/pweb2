<head>
    <meta charset="utf-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<div class="px-4 py-3">

<h3>Tambah Data Dosen</h3>
<form action="proses_dosen.php?aksi=tambah_dosen" method= "post">
<table>
    <tr>
        <td>Nama</td>
        <td><input type ="text" name="nama"></td>
    </tr>
    <tr>
        <td>NIDN</td>
        <td><input type ="text" name="nidn"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>
            <textarea name ="alamat" cols="30" rows="5"></textarea>
        </td>
    </tr>
    <tr>
        <td>Matkul</td>
        <td><input type ="text" name="matkul"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan" onclick="showAlert()"></td>
    </tr>
</table>
</form>
