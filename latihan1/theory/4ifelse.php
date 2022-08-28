<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If & else</title>
</head>
<body>
    <h1>nilai</h1>
    <?php

    $nilai = 70;
    $nUTS = 90;
    $nUAS = 76;
    $nAverage = ($nUAS + $nUTS)/2;

    if($nilai > 80) {
        $keterangan  = "lulus";
    } else {
        $keterangan = "tidak lulus";
    }

    // jika antara 90 - 100
    if($nAverage >=90 && $nAverage<=100){
        $keterangan = "A";
    } 

    // jika antara 80 - 89
    elseif($nAverage >=80 && $nAverage<90){
        $keterangan = "B";    
    }
    
    // jika antara 70 - 79
    elseif($nAverage >=70 && $nAverage<80){
        $keterangan = "C";    
    }

    // fungsi OR
    if($nAverage >=70 || $nAverage<80){
        $keterangan2 = "YA";    
    }else{
        $keterangan2 = "TIDAK";
    }

    // fungsi AND
    if($nAverage >=70 && $nAverage<80){
        $keterangan2 = "YA";    
    }else{
        $keterangan2 = "TIDAK";
    }
    ?>

    <p>Nilai : <?php echo $nAverage?></p>
    <p>keterangan : <?php echo $keterangan?></p>
    <p>keterangan : <?php echo $keterangan2?></p>
    
</body>
</html>