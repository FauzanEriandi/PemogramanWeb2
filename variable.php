<?php
$nama = "Anies";
$jurusan = " Sistem Informasi";
$semester = 2;

$nama = "Prabowo";
$jurusan = " Sistem Informasi";
$semester = 2;

$nama = "Ganjar";
$jurusan = " Sistem Informasi";
$semester = 2;

$mahasiswas = 
[["Anies","TI","8"],
["Prabowo","SI","9"],
["Ganjar","BD","16"]];

foreach ($mahasiswas as $mahasiswa) {
    echo 'Nama Saya : '.$mahasiswa[0] ."<br>";
    echo 'Jurusan : '.$mahasiswa[1] ."<br>";
    echo 'Semester : '.$mahasiswa[2] ."<br>";
    echo "<br>";
}

?>