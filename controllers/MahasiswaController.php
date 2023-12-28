<?php 
    require_once '../models/dbkoneksi.php';
    require_once 'class_Mahasiswa.php';

    // tangkap request element form
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];
    $jenis_kel = $_POST['jenis_kel'];
    $foto = $_POST['foto'];
    $tombol = $_POST['submit'];

    // Menyimpan data diatas ke sebuah array
    $data = [
        $nim,      // ? 1 
        $nama,      // ? 2
        $alamat,   // ? 3
        $jurusan,   // ? 4
        $jenis_kel,   // ? 5
        $foto       // ? 6
    ];

    // proses
    $obj = new Mahasiswa($dbh);
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
        header('Location:http://localhost/Latihan_PHP/p16/UAS_PHP/index.php?hal=DataMahasiswa');
            break;
    }


    // Landing Page
    header('Location://localhost/Latihan_PHP/p16/UAS_PHP/index.php');

?>