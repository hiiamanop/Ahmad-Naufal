<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <!-- membuat form -->
        <h1>latihan membuat form</h1>
        <p>Data Mahasiswa</p>

        <!-- form dari bootstaps -->

        <!-- method dalam form -->
        <!--
             1. get (default) => isi yang diinputkan akan terlihat di address bar browser
             2. post => isi yang diinputkan tidak akan terlihat di address bar browser 
        -->

        <!-- ACTION -->
        <!-- untuk menghubungkan ke next file.php -->

        <form action="action/action1.php" method="post">
            <!-- NIM -->
            <div class="mb-3">
                <label for="Nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="Nim" name="NIM" placeholder="Masukan NIM" required>
            </div>

            <!-- Nama -->
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Masukan nama" required>
            </div>

            <!-- Jenis Kelamin -->
            <div class="mb-3">
                <label for="Jenis_Kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-control" name="Jenis_Kelamin" id="Jenis_Kelamin" required>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <!-- button -->
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>