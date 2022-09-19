<?php
include 'App/models/App.php';

class Driver extends App
{

    // menampilkan data

    public static function all()
    {
        $app = new App();

        $sql = "SELECT * FROM kangojek ORDER BY nama_Driver ASC";

        $result = $app->query($sql); // hasilnya ini akan berbentuk array

        // jika datanya tidak ada maka kasih kosongan
        if ($result->num_rows < 1) {
            $hasil[] = [];
        } else {
            // jika datanya ada, maka ambil datanya (fetch_array), ditampung di variable $data dan isikan

            while ($data = $result->fetch_array()) {
                // ke variable $hasil
                $hasil[] = $data;
            }
        }
        return $hasil;
    }

    public static function create(array $data)
    {
        $app = new App();

        // siapkan data yang akan diinput
        $nama_Driver = $data['nama_Driver'];
        $kota_Driver = $data['kota_Driver'];
        $pendapatan_Driver = $data['pendapatan_Driver'];
        $jumlah_Order = $data['jumlah_Order'];

        // syntax sql untuk insert data
        $sql = "INSERT INTO kangojek (nama_Driver,kota_Driver,pendapatan_Driver,jumlah_Order) VALUES ('$nama_Driver','$kota_Driver','$pendapatan_Driver','$jumlah_Order')";

        // ekesekusi query deangan memanggil fungsi query dari class App yang sudah dibuatan objectnya ($app)
        $result = $app->query($sql);

        return $result;
    }

    public static function find($id)
    {
        $app = new App();

        $sql = "SELECT * FROM kangojek WHERE id_Driver = '$id' ";

        $result = $app->query($sql); // hasilnya ini akan berbentuk array

        $hasil = $result->fetch_array();
        return $hasil;
    }

    public static function update(array $data)
    {
        $app = new App();

        // siapkan data yang akan diinput
        $id_Driver = $data['id_Driver'];
        $nama_Driver = $data['nama_Driver'];
        $kota_Driver = $data['kota_Driver'];
        $pendapatan_Driver = $data['pendapatan_Driver'];
        $jumlah_Order = $data['jumlah_Order'];

        // syntax sql untuk insert data
        $sql = "UPDATE kangojek SET nama_Driver = '$nama_Driver', kota_Driver = '$kota_Driver' , pendapatan_Driver = '$pendapatan_Driver , jumlah_Order = '$jumlah_Order' WHERE id_Driver = '$id_Driver'"; 

        // ekesekusi query deangan memanggil fungsi query dari class App yang sudah dibuatan objectnya ($app)
        $result = $app->query($sql);

        return $result;
    }

    public static function destroy($id)
    {
        $app = new App();

        $sql = "DELETE FROM kangojek WHERE id_Driver = '$id' ";

        $result = $app->query($sql); // hasilnya ini akan berbentuk array

   
        return $result;
    }
    
}

