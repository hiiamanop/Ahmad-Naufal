<?php
    // untuk memberikan identitas pada class yang mempunyai nama sama
    namespace APP\Models;

    class User {
        // method menampilkan data user
        public static function getData(){

            $data = [
                "name" => "Mahasiswa Satu",
                "nim" => "1231414",
                "email" => "naufalmuzakki@gmail.com"
            ];

            return $data;
        }
    }