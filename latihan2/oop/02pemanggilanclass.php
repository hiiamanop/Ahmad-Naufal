<?php
    include "4statis.php";

    // panggil nama class::$variable atau function()

    $kakiSinga = Singa::$kaki;
    $lariSinga = Singa::lari();

    echo "kaki singa : " . $kakiSinga;
    echo PHP_EOL;

    $kakiSinga = 6;
    echo "ubah kaki singa : " . $kakiSinga;
    echo PHP_EOL;

    echo "ambil function lari() : ". $lariSinga;
    PHP_EOL;
    
