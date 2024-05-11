<?php
include 'dbkoneksi.php';
include 'models/Paramedik.php';
include 'atas.php';

// buat object dari class kelas
$obj_paramedik = new Paramedik();

// panggil method tampildata untuk menampilkan seluruh data kelas
$data_paramedik = $obj_paramedik->TampilData();
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Admin</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <!-- buat table disini -->
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">TanggaL Lahir</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Unit Kerja</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1; 
                            // Periksa apakah ada data_kelas sebelum melakukan loop
                            if ($data_paramedik) {
                                foreach ($data_paramedik as $data) {
                            ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $data['nama']?></td>
                                        <td><?= $data['gender']?></td>
                                        <td><?= $data['tmp_lahir']?></td>
                                        <td><?= $data['tgl_lahir']?></td>
                                        <td><?= $data['telepon']?></td>
                                        <td><?= $data['alamat']?></td>
                                        <td><?= $data['nama_unit_kerja']?></td>
                                        <td>Edit | Hapus</td>
                                    </tr>
                            <?php
                                    $no++;
                                }
                            } else {
                                // Tampilkan pesan jika tidak ada data
                                echo "<tr><td colspan='7'>Tidak ada data yang ditemukan</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <button class="btn btn-primary">Tambah Data</button>
                </div>
            </div>
        </div>
    </main>
    <!-- panggil file bawah atau footer -->
    <?php
    include 'bawah.php';
    ?>
