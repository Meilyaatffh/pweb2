<h3>Tambah Data Mahasiswa</h3>
<form action="proses_tambahMahasiswa" method="post">
<table>
    <tr>
        <td>NIM</td>
        <td><input type ="text" name="nim"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type ="text" name="nama"></td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td><input type ="text" name="tempat_lahir"></td>
    </tr>
    
    <tr>
        <td>Jenis Kelamin</td>
        <td>
            <select name="jenis_kelamin" >
                <option value="L">Laki-Laki</option>
                <option value="p">Perempuan</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>
            <select name="agama" >
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghuchu">Konghuchu</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>
            <textarea name ="alamat" cols="30" rows="5"></textarea>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Simpan" onclick="showAlert()"></td>
    </tr>
</table>
</form>