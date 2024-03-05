<?php
// ambil value yang diinput user dan simpan ke dalam variable
$proses = $_POST['proses'];
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$praktikum = $_POST['praktikum'];
$rata_rata = ($uts+$uas+$praktikum)/3;
$keterangan = keterangan($rata_rata);

function keterangan ($rata_rata){
    if($rata_rata >= 55 && $rata_rata <=100){
        return 'Anda Lulus';
}else {
    return 'Anda tidak Lulus';
}
}
// panggil variable yang memiliki value kolom, tampilkan menggunakan echo
echo "Proses : $proses";
echo "<br>Nama Lengkap : $nama";
echo "<br>Mata Kuliah : $matkul";
echo "<br>Nilai UTS : $uts";
echo "<br>Nilai UAS : $uas";
echo "<br>Nilai Praktikum : $praktikum";
echo "<br>Rata-Rata Nilai : $rata_rata";
echo "<br>Keterangan : $keterangan";
?>