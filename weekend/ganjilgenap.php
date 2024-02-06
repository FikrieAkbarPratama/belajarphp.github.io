<!DOCTYPE html>
<html>
<head>
    <title>Mencetak bilangan ganjil dan genap</title>

    <!-- myStyle -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class = "form">
    <h3 class="color">NIS: 12309658</h3>
    <h3 class="color">Nama: Fikri Akbar Pratama</h3>
    <h3 class="color">Rombel: PPLG X-4</h3>
    <h3 class="color">Rayon: Cicurug 7</h3>
</div>
<div class="judul">
    <h2>Cui University</h2>
</div>
<?php 
//Inisialisasi nilai awal
$bilangan = 1;
?>

<div class="bg-bottom">
<?php 

// Do-While bilangan ganjil dan genap secara berurutan
echo "<div>$bilangan</div>";
do {
    // Cetak bilangan ganjil
    echo "Bilangan ganjil: $bilangan <br>";

    // Increment untuk bilangan genap
    $bilangan++;

    // Cetak bilangan genap
    echo "Bilangan genap: $bilangan <br>";

    // Increment untuk ganjil
    $bilangan++;
} while($bilangan <= 50);

?>
</div>


</body>
</html>