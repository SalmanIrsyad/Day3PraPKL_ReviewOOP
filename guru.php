<?php

class Guru extends Database{

    //menampilkan data Guru ke index.php
    public function index(){

        $dataguru = mysqli_query($this->koneksi, "select * from guru");
        return $dataguru;

    }

    //Membuat Data Guru
    public function create($nip,$nama,$alamat){

        mysqli_query($this->koneksi, "insert into guru values (null,'$nip','$nama','$alamat')");

    }

    //Memiliih Data Guru Yang Akan Dirubah
    public function edit($no){
        
        $dataguru = mysqli_query($this->koneksi, "select * from guru where no='$no'");
        return $dataguru;
        
    }

    //Merubah Data Guru
    public function update($no,$nip,$nama,$alamat){

        mysqli_query($this->koneksi, "update guru set nip='$nip', nama='$nama' ,alamat='$alamat' where no='$no'");

    }

    //Menampilkan Data Guru Berdasarkan Isi
    public function show($no){

        $dataguru = mysqli_query($this->koneksi, "select * from guru where no='$no'");
        return $dataguru;

    }

    //Menghapus Data Guru
    public function delete($no){

        mysqli_query($this->koneksi, "delete from guru where no='$no'");

    }
}
?>