<?php

    include 'App//controller/DriverController.php';

    // parameter id_Driver yang didapatkan dari driver/index.php
    $id_Driver = $_GET['id_Driver'];

    $driver = new DriverController();

    // ambil data driver yang dipilih menggunakan function edit($id) yang ada di class DriverController
    $data = $driver->edit($id_Driver);

    if(isset($_POST['proses']))
    {
        // membuat variable untuk menampung isi inputan
        $data = 
        [
            'id_Driver' => $_POST['id_Driver'],
            'nama_Driver' => $_POST['nama_Driver'],        
            'kota_Driver' => $_POST['kota_Driver'],        
            'pendapatan_Driver' => $_POST['pendapatan_Driver'],        
            'jumlah_Order' => $_POST['jumlah_Order']   
        ]; 
        
        // panggil fungsi insert yang ada di DriverController
        $driver->update($data);
    }
?>

<form action="" method="POST">
        <input type="hidden" type="text" name="id_Driver" value="<?=$data['id_Driver']?>">  
        <div class="mb-3">
                <label for="nama_Driver" class="form-label">Nama Driver</label>
                <input type="text" class="form-control" id="nama_Driver" name="nama_Driver" placeholder="Masukan Nama Driver" value="<?= $data['nama_Driver']?>" required>
            </div>
            
            <div class="mb-3">
                <label for="kota_Driver" class="form-label">Kota Driver</label>
                <input type="text" class="form-control" id="kota_Driver" name="kota_Driver" placeholder="Masukan Kota Driver" value="<?= $data['kota_Driver']?>" required>
            </div>

            <div class="mb-3">
                <label for="pendapatan_Driver" class="form-label">Pendapatan Driver</label>
                <input type="number" class="form-control" id="pendapatan_Driver" name="pendapatan_Driver" placeholder="Masukan Pendapatan Driver" value="<?= $data['pendapatan_Driver']?>" required>
            </div>

            <div class="mb-3">
                <label for="jumlah_Order" class="form-label">Jumlah Order</label>
                <input type="number" class="form-control" id="jumlah_Order" name="jumlah_Order" placeholder="Masukan Jumlah Order" value="<?= $data['jumlah_Order']?>" required>
            </div>

            <button name="proses" class="btn btn-primary">Submit</button>
        </form>