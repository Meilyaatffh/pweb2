<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>

<body>
    <form method="post">
        Masukkan Panjang = <input type="text" name="panjang"><br><br>
        Masukkan Lebar = <input type="text" name="lebar"><br><br>
        Masukkan Jari-Jari Lingkaran = <input type="text" name="jari"><br><br>
        <input type="submit" value="Hitung Luas">
    </form>
    <?php
    $p = 0;
    $l = 0;
    $r = 0;
    // Periksa apakah data telah dikirimkan melalui formulir
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $p = (int)$_POST["panjang"];
        $l = (int)$_POST["lebar"];
        $r = (int)$_POST["jari"];
        
        function luaspersegipanjang($p, $l)
        {
            return $p * $l;
        }

        function luaslingkaran($r)
        {
            return 3.14 * $r * $r;
        }

        // Tampilkan hasil
        echo "Luas persegi panjang = ", luaspersegipanjang($p, $l);
        echo "</br>";
        echo "Luas lingkaran = ", luaslingkaran($r);
    }
    ?>
    </body>
    </html>
