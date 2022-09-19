<?php

    include 'App//controller/DriverController.php';

    $driver = new DriverController();

    if(isset($_POST['proses']))
    {
        // membuat variable untuk menampung isi inputan
        $data = 
        [
            'nama_Driver' => $_POST['nama_Driver'],        
            'kota_Driver' => $_POST['kota_Driver'],        
            'pendapatan_Driver' => $_POST['pendapatan_Driver'],        
            'jumlah_Order' => $_POST['jumlah_Order']   
        ]; 
        
        // panggil fungsi insert yang ada di DriverController
        $driver->insert($data);
    }
?>

<form action="" method="POST">    
        <div class="mb-3">
                <label for="nama_Driver" class="form-label">Nama Driver</label>
                <input type="text" class="form-control" id="nama_Driver" name="nama_Driver" placeholder="Masukan Nama Driver" required>
            </div>
            
            <div class="mb-3">
                <label for="kota_Driver" class="form-label">Kota Driver</label>
                <input type="text" class="form-control" id="kota_Driver" name="kota_Driver" placeholder="Masukan Kota Driver" required>
            </div>

            <div class="mb-3">
                <label for="pendapatan_Driver" class="form-label">Pendapatan Driver</label>
                <input type="number" class="form-control" id="pendapatan_Driver" name="pendapatan_Driver" placeholder="Masukan Pendapatan Driver" required>
            </div>

            <div class="mb-3">
                <label for="jumlah_Order" class="form-label">Jumlah Order</label>
                <input type="number" class="form-control" id="jumlah_Order" name="jumlah_Order" placeholder="Masukan Jumlah Order" required>
            </div>

            <button name="proses" class="btn btn-primary">Submit</button>
        </form>