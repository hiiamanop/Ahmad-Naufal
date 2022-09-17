<?php
    include 'App/models/App.php';

    class Driver extends App {

        // menampilkan data

        public static function all() {
            $app = new App();

            $sql = "SELECT * FROM kangojek ORDER BY nama_Driver ASC";

            $result = $app->query($sql); // hasilnya ini akan berbentuk array

            // jika datanya tidak ada maka kasih kosongan
            if($result->num_rows <1) {
                $hasil[] = [];
            } else {
                // jika datanya ada, maka ambil datanya (fetch_array), ditampung di variable $data dan isikan

                while($data = $result->fetch_array()) {
                    // ke variable $hasil
                    $hasil[] = $data;
                }
            } return $hasil;
        } 
    }
?>