<?php
    include "3property.php";

    // buatkan obj dari class mobil
    $mobil1A =  new Mobil();

    // mengakses property bersifat private
    // echo $mobil1A->knalpot

    // echo "ambil method terbang : " . $mobil->terbang();
    echo "ambil method terbang : " . $mobil1A->ambilnilaiknalpot();
    echo PHP_EOL;
    echo "ambil method jalan : " . $mobil1A->jalan(); 
