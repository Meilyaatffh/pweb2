<h3>Tambah Data Dosen</h3>
<form action="proses_tambahDosen" method="post">
<table>
    <tr>
        <td>NIDN</td>
        <td><input type ="text" name="nidn"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type ="text" name="nama"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type ="text" name="alamat"></td>
    </tr>
    
    </tr>
    <tr>
        <td>Matkul</td>
        <td>
            <select name="matkul" >
                <option value="Pemrograman_Web">Pemrograman Web</option>
                <option value="Basis_Data">Basis Data</option>
                <option value="Jarkom">Jarkom</option>
                <option value="RPL">RPL</option>
            </select>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Simpan" onclick="showAlert()"></td>
    </tr>
</table>
</form>