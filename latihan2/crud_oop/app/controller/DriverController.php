<?php

    class DriverController {
        
        public function __construct()
        {
            include 'App/models/Driver.php';
        }

        // function menampilkan data pertama kali
        public function index() {
            
            // variable yang menyimpan data
            $data = Driver::all();
            return $data;
        }
    }
?>