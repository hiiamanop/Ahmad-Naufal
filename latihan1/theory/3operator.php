<!DOCTYPE html>

<?php 
// deklarasi varible
$a = 7;
$b = 3;

$penjumlahan = $a + $b;
$pengurangan = $a - $b;
$perkalian = $a * $b;
$pembagian = $a / $b;
$perpangkatan = $a ** $b;
$modulo = $a % $b;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> a + b <?php echo "penjumlahan : $penjumlahan"  ?> </p>
    <p> a - b <?php echo "pengurangan : $pengurangan"  ?> </p>
    <p> a x b <?php echo "perkalian : $perkalian"  ?> </p>
    <p> a / b <?php echo "pembagian : $pembagian"  ?> </p>
    <p> a ^ b <?php echo "perpangkatan : $perpangkatan"  ?> </p>
    <p> a % b <?php echo "modulo : $modulo"  ?> </p>
</body>
</html>