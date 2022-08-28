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
        <h1>luas persegi panjang</h1>
        <form action="" method="POST">
            
        <div class="mb-3">
                <label for="Panjang" class="form-label">Panjang</label>
                <input type="number" class="form-control" id="Panjang" name="Panjang" placeholder="Masukan Panjang" required>
            </div>
            
            <div class="mb-3">
                <label for="Lebar" class="form-label">Lebar</label>
                <input type="number" class="form-control" id="Lebar" name="Lebar" placeholder="Masukan Lebar" required>
            </div>

            <button name="proses" class="btn btn-primary">Submit</button>
        </form>
        
        <!-- tampilkan hasil pengolahan data luas persegi panjang saat button di click -->
        <?php
            // saat button dengan name proses di click
            if(isset($_POST['proses'])) :

                include 'class/Perhitungan.php';

                // siapkan variable panjang dan lebar untuk dikirimkan ke function luasPersegiPanjang yang ada di file function.php
                $panjang = $_POST['Panjang'];
                $lebar = $_POST['Lebar'];

                // buatkan obj dari class perhitungan
                $perhitungan = new Perhitungan();

                // siapkan variable untuk hasil perhitungan luas
                $luas = $perhitungan->luasPersegiPanjang($panjang,$lebar);
        ?>
            <br>
            <p>
                Panjang : <?= $panjang?>
            </p>
            
            <p>
                Lebar : <?= $lebar?>
            </p>
            
            <p>
                Luas : <?= $luas?>
            </p>
    </div>
    <?php
        endif;
    ?>

</body>
</html>


