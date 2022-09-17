<?php

    // class ini difungsikan untuk memanggil koneski database
    class App {

        // panggil file config/database.php

        // fungsi yang pertama kali dieksekusi saat class ini di panggil
        public function __construct()
        {
            include 'app/config/Database.php';
        }

        protected function query($query) {

            // membuat object dari class Database
            $db = new Database();

            // panggil function koneksi() yang ada di class Database
            // tarok di dalam variable
            $mysqli = $db->koneksi();

            // hasil dari query.an
            $result = $mysqli->query($query);

            return $result;
        }
    }

?>