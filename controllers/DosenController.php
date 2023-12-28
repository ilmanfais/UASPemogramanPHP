<?php 
    require_once '../models/dbkoneksi.php';
    require_once 'class_Dosen.php';

    // tangkap request element form
    $nip = $_POST['nip'];
    $nama_dosen = $_POST['nama_dosen'];
    $alamat = $_POST['alamat'];
    $jenis_kel = $_POST['jenis_kel'];
    $foto = $_POST['foto'];
    $tombol = $_POST['submit'];

    // Menyimpan data diatas ke sebuah array
    $data = [
        $nip,      // ? 1 
        $nama_dosen,      // ? 2
        $alamat,   // ? 3
        $jenis_kel,   // ? 4
        $foto   // ? 5
        
    ];

    // proses
    $obj = new Dosen($dbh);
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
        header('Location:http://localhost/Latihan_PHP/p16/UAS_PHP/indexdosen.php?hal=DataDosen');
            break;
    }


    // Landing Page
    header('Location://localhost/Latihan_PHP/p16/UAS_PHP/indexdosen.php');

?>