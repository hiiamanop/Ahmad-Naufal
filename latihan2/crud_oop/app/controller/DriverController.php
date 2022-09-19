<?php

    class DriverController {
        
        public function __construct()
        {
            include 'App/models/Driver.php';
        }

        // function menampilkan data pertama kali
        public function index() 
        {    
            // variable yang menyimpan data
            $data = Driver::all();
            return $data;
        }
        
        // function insert data ke database
        public function insert(array $inputan) //inputan di dapat dari form yang memanggil function ini
        {
            // panggil function create yang ada di driver model
            $insertData = Driver::create(
                [
                    'nama_Driver' => $inputan['nama_Driver'],
                    'kota_Driver' => $inputan['kota_Driver'],
                    'pendapatan_Driver' => $inputan['pendapatan_Driver'],
                    'jumlah_Order' => $inputan['jumlah_Order'],
                ]
            );

            if($insertData == TRUE) {
                // redirect to driver page
                echo "<script> window.location.href = '?page=driver';</script>";
            } else {
                // redirect ke page driver dan actionnya add
                echo "<script> window.location.href = '?page=driver&action=add';</script>"; 
            }
        }

        public function edit($id) 
        {
            $data = Driver::find($id);
            return $data;
        }

        public function update(array $inputan) //inputan di dapat dari form yang memanggil function ini
        {
            // panggil function update yang ada di driver model
            $updateData = Driver::create(
                [
                    'id_Driver' => $inputan['id_Driver'],
                    'nama_Driver' => $inputan['nama_Driver'],
                    'kota_Driver' => $inputan['kota_Driver'],
                    'pendapatan_Driver' => $inputan['pendapatan_Driver'],
                    'jumlah_Order' => $inputan['jumlah_Order'],
                ]
            );

            if($updateData == TRUE) {
                // redirect to driver page
                echo "<script> window.location.href = '?page=driver';</script>";
            } else {
                // redirect ke page driver dan actionnya add
                echo "<script> window.location.href = '?page=driver&action=add';</script>"; 
            }
        }

        public function destroy($id) 
        {
            // panggil function delete yang ada di driver model
            $deleteData = Driver::destroy($id);

            if($deleteData == TRUE) {
                // redirect to driver page
                echo "<script> window.location.href = '?page=driver';</script>";
            } else {
                // redirect ke page driver dan actionnya add
                echo "<script> window.location.href = '?page=driver&action=add';</script>"; 
            }
        }
    }
?>