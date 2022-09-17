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
    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Kota</th>
            <th>Pendapatan</th>
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
        </tr>
        <?php
            endforeach;
        ?>
    </table>
</div>