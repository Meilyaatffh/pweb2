<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo "Perulangan FOR bilangan genap dari 1 hingga 10 </br>";
    for($x = 2; $x <= 10; $x += 2)
    echo "$x </br>";
    echo "</br> Perulangan WHILE bilangan ganjil dari 1 hingga 10 </br>";
    $y=0;
    while($y<=10){
        if ($y==4){
            $y += 2;

            continue;
        }

        
        echo "$y </br>";
        $y += 2;
        
    }
    echo "</br> Perulangan DO WHILE bilangan prima kurang dari 20 </br>";
    $z=2;
    
    do {
        $is_prime = true;

        // Periksa apakah bilangan prima
        for ($i = 2; $i < $z; $i++) {
            if ($z % $i == 0) {
                $is_prime = false;
                break;
            }
        }
        // Jika bilangan prima, tampilkan
        if ($is_prime) {
            echo $z . " " ;
        }
        $z++;
        } while ($z < 20);
    ?>
</body>
</html>