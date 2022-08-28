<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan Array</title>
</head>
<body>
    <?php
    // Array => tipe data yang bisa menyimpan lebih dari 1 nilai

    // Array indexing 
    $buah = ["Apel","Mangga","Jeruk"];

    var_dump($buah);
    print_r($buah);
    echo"<br>";

    echo $buah[2];
    echo"<br>";

    /* array assosiatif => terdiri dari key dan value*/
    // contoh
    $anggota = [
        "dani" => "ketua",
        "budi" => "wakil",
        "tina" => "sekretaris"
    ];

    // print salah satu contoh
    echo $anggota["dani"];
    ?>

    <!-- contoh index array -->
    <hr>
    <h4>indexted array</h4>
    <!-- list number use (ol) -->
    <ol>
        <!-- lakukan foreach di li-nya -->
        <?php
        foreach($buah as $b) :?>
            <li><?php echo "$b"?></li>
        <?php endforeach ?>
    </ol>

    <h4>associatived array</h4>
    <!-- list point use (ul) -->
    <ul>
        <!-- lakukan foreach di li-nya -->
        <?php
        foreach($anggota as $key => $value) :?>
        <li>
            <!-- $key untuk menampung key yang ada di dlam array -->
            <!-- $value untuk menampung value yang ada dalam array -->
            <?= "key : $key, value : $value"?>
        </li>
        <?php endforeach?>
    </ul>
</body>
</html>