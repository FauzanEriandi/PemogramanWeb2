<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['program_studi'];
$keahlian = $_POST['skill'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

?>

<h1> Terima kasih telah mendaftarkan di IT club </h1>

<h5>Nim : <?php echo $nim ?></h5>
<h5>Nama Lengkap :  <?php echo $nama ?></h5>
<h5>Jenis Kelamin : <?php echo $jeniskelamin ?></h5>
<h5>Prodi : <?php echo $prodi ?></h5>
<h5>Skil Web & keahlian : <?php echo $keahlian ?></h5>
<h5>Alamat Domisili : <?php echo $domisili ?></h5>
<h5>Email : <?php echo $email?></h5>