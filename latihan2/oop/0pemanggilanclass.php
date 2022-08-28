<?php
    // gabungkan file yang dipakai
    include "3property.php";

    // buat object agar class Mobil yang ada di file 3property.php bisa dipakai
    $mobil1 = new Mobil();
    $mobil2 = new Mobil();

    // setelah membua object dari class, maka kita bisa memanggil apa2 yang ada di class tersebut
    echo "roda awal : $mobil1->roda ";
    
    // ganti nilai pada propery roda
    $mobil1->roda = 6;

    PHP_EOL;

    $mobil1->warna = "black ";
    
    echo "warna : $mobil1->warna";
    echo "roda setelah diubah nilainya : $mobil1->roda";

    $mobil2->nos();
    $mobil2->jalan();


?>
