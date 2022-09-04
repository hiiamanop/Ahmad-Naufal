<?php
    // untuk memberikan identitas pada class yang mempunyai nama sama
    namespace APP;

    class User {
        // method menampilkan data user
        public static function getData(){

            $data = [
                "name" => "Mahasiswa Satu",
                "nim" => "1231414"
            ];

            return $data;
        }
    }