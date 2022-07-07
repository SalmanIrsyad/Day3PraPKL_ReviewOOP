<?php
class Database
{
    public $host = "localhost", $user = "root", $pass = "", $db = "bd1";
    public $koneksi;

    public function __construct()
    {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        if ($this->koneksi) {
            //echo "koneksi berhasil";
        } else {
            echo "Koneksi Database Gagal";
        }
    }
}
// Data Tabel Guru
include 'guru.php';

// data tabel A
// include ''

// koneksi DB
$db = new Database();