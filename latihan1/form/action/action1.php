<?php
// file ini untuk action dari form yang menggunakannya

// masukan file function.php ke file ini
// untuk memanggil function" yang ada di file function.php
include "../library/function.php";

// variable yang berisi inputan dari form inputan sebelumnya
$inputan = [
    // dapatkan atau menerima isi dari inputan. ambil berdasarkan method form dan atribut name dari inputan masing"
    "NIM" => $_POST["NIM"],
    "Nama" => $_POST["Nama"],
    "Jenis_Kelamin" => $_POST["Jenis_Kelamin"]
];

// panggil method/function getInputan yang ada di fule library/function.php
// masukan dalam satu variable

$getInputan = getInputan($inputan);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<body>
    <div class="container">
        <h1>Ini adalah hasil dari form sebelumnya</h1>
        <p>NIM : <?php echo $getInputan['NIM'] ?></p>
        <p>Nama : <?= $getInputan['Nama'] ?></p>
        <p>Jenis Kelamin : <?= $getInputan['Jenis_Kelamin'] ?></p>
    </div>
</body>

</html>