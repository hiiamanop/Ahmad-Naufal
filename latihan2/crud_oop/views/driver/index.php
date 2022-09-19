<?php
    include 'App/controller/DriverController.php';

    // buat object dari class Driver
    $driver = new DriverController();

    // buat variable yang sisinya itu adlah mengambil hasil dari function index() yang ada di DriverController
    $data = $driver->index();
?>
<h1>Halaman driver</h1>
<br>
<div class="row">
    <a href="index.php?page=driver&action=add" class="btn btn-primary">tambah</a>
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Kota</th>
            <th>Pendapatan</th>
            <th>Jumlah Order</th>
        </tr>
        <?php
            $no = 1;
            foreach($data as $dt) :
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $dt['nama_Driver']?></td>
            <td><?= $dt['kota_Driver']?></td>
            <td><?= number_format($dt['pendapatan_Driver'])?></td>
            <td><?= number_format($dt['jumlah_Order'])?></td>
            <td>
                <a href="index.php?page=driver&action=edit&id_Driver=<?= $dt['id_Driver']?>" class="btn btn-success">edit</a>
                <a href="index.php?page=driver&action=delete&id_Driver=<?= $dt['id_Driver']?>" class="btn btn-danger">hapus</a>
            </td>
        </tr>
        <?php
            endforeach;
        ?>
    </table>
</div>