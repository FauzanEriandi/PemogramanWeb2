<?php
class Paramedik{
    
    private $koneksi;

    public function __construct(){
        global $conn;
        $this->koneksi = $conn;
    }

    public function TampilData(){
        $sql = "SELECT k.*, u.nama AS nama_unit_kerja
        FROM paramedik k INNER JOIN unit_kerja u ON u.id = k.unit_kerja_id
        ORDER BY k.id DESC";
        $siap = $this->koneksi->prepare($sql);
        $siap->execute();
        $data = $siap->fetchALL();
        return $data;
    }
}
