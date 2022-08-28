<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan looping</title>
</head>
<body>
    <?php
    echo "Latihan dasar Looping <br>";
    echo "<br>";

    // definisi looping => menampilkan data yang lebih dari satu secara berurutan dan berulang sesuai logika yang dibuat
     // example case : mencetak halo sebnyak 10x 

    echo "Perulangan for <br>";
    echo "<br>";

    /* 
    looping for => perulangan  yang diketahui nilai awal dan akhirnya

    for($nilaiAwal; $nilaiAkhir <= 10; $variable++) {}
    */

    // syntax contoh kasus
    $i = 0;
    for($i;$i < 10; $i ++){ 
        // ++ increment +1 d tiap perulangan
        // input instruksi yang akan di lakukan
        $data = $i + 1;
        echo "Hello ke - $data <br>";
    }

    echo "<hr>";
    echo "berulangan while <br>";
    echo "<br>";

    /*
    looping while => perulangan yang tidak di ketahui nilai akhirnya

    $nilaiAwal = 1
    while ($nilaiAwal <=10) {$nilaiAwal++;}
    */

    // syntax contoh kasus
    $i = 1;
    while ($i <=10) {
        // input intruksi yang akan di lakukan
        echo "hello ke - $i <br>";
        $i++;
    }

    echo "<hr>";
    echo "berulangan for but decrement <br>";
    echo "<br>";

    /* looping for decrement (--)

    for($nilaiAkhir = 10; $nilaiAwal>=1; $nilai--){}
    */

    // syntax contoh kasus
    for($j = 10; $j>=1; $j--){
        echo "hello ke - $j <br>";
    }
    
    echo "<hr>";
    echo "berulangan foreach <br>";
    echo "<br>";

    /* 
    looping foreach => perulangan yang bertipe data array

    $data = array();
    foreach($data as $dt){}
    */

    // syntax contoh kasus
    $Nama_siswa = ["budi","tono","wati"];
    
    foreach($Nama_siswa as $nama){
        echo "$nama<br>";
    }

    echo"<br>";
    echo "perulangan array bersangkar (array assosiatif)";
    echo "<br>";

    $dataMahasiswa = array (
        array(
            // kery =>  value
            "id" => 1,
            "nama" => "budi",
            "nim" => "1234"
        ),
        array(
            // kery =>  value
            "id" => 2,
            "nama" => "tono",
            "nim" => "1235"
        )
        );
    ?>
    <p>menampilkan hasil table <br></p>
    <table border="2">

        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
            </tr>
        </thead>

        <tbody>
        <?php 
        $no = 1;
        foreach($dataMahasiswa as $dtM) :
        ?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $dtM["id"]?></td>
                <td><?php echo $dtM["nim"]?></td>
                <td><?php echo $dtM["nama"]?></td>
            </tr>
            <?php endforeach;?>
        </tbody>

    </table>
</body>
</html>