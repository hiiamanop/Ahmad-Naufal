<?php

    include 'App/controller/DriverController.php';

    $driver = new DriverController();

    if (isset($_GET['id_Driver'])) {

        $id_Driver = $_GET['id_Driver'];

        // panggil function delete yang ada di DriverController.php
        $driver->destroy($id_Driver);
    }


?>