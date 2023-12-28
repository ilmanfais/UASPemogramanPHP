<?php 
    require_once '../models/dbkoneksi.php';
    require_once 'class_Matkul.php';

    // tangkap request element form
    $nama_mk = $_POST['nama_mk'];
    $sks = $_POST['sks'];
    $tombol = $_POST['submit'];

    // Menyimpan data diatas ke sebuah array
    $data = [
        $nama_mk,      // ? 1 
        $sks,      // ? 2
        
    ];

    // proses
    $obj = new Matkul($dbh);
    // $obj->simpan($data);

     //proses edit & hapus
     switch ($tombol) {
        case 'simpan';
            $obj->simpan($data);
            break;
        case 'ubah';
            $data[] = $_POST['idx']; //tangkap hidden field u/ ? ke-8
            $obj->ubah($data);
            break;
        case 'hapus';
        $id[] = $_POST['idx']; //tangkap ke-1 where id=?
        $obj->hapus($id);
        break;  
        default://tombol batal
        header('Location:http://localhost/Latihan_PHP/p16/UAS_PHP/indexmatkul.php?hal=DataMatkul');
            break;
    }


    // Landing Page
    header('Location://localhost/Latihan_PHP/p16/UAS_PHP/indexmatkul.php');

?>