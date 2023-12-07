<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <form method="post">
        Masukkan Nilai x = <input type="text" name="bilangan">
        <input type="submit" value="cek">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil bilangan dari input
        $x = $_POST["bilangan"];
       
    if($x > 0 ){
        echo "$x adalah Bilangan Positif";
    } else if($x < 0){
        echo "$x adalah Bilangan Negatif";
    } else {
        echo "$x adalah Bilangan Nol";
    }
}
    ?>
</body>
</html>