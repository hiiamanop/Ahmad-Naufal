<?php

class Inputan {
    
    // fungsi untuk menerima inputan dari form
    function getInputan(array $inputanDariForm){

        // isinya adalah mengembalikan/return apa yang di inputkan dari form
        $data = [
            "NIM" => $inputanDariForm ["NIM"],
            "Nama" => $inputanDariForm ["Nama"],
            "Jenis_Kelamin" => $inputanDariForm ["Jenis_Kelamin"],
        ];

        // kembalikan nilai nya
        return $data;
    }

}

    