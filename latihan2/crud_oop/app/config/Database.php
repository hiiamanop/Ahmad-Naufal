<?php 
    class Database {
        // buat parameter yang dibutuhkan untuk koneksi ke mysql
        private $dbHost = 'localhost';
        private $dbUser = 'root';
        private $dbPassword = '';
        private $dbName = 'ojekonline';

        // baut fungsi untuk koneksi ke database mysql
        public function koneksi() {

            $mysqli = new mysqli(
                $this->dbHost,
                $this->dbUser,
                $this->dbPassword,
                $this->dbName
            ); 

            if ($mysqli->connect_error) {
                echo 'Gagal Koneksi ('.$mysqli->concent_error.')';
            }

            return $mysqli;
        }
    }
?>