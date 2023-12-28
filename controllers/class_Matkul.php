<?php 
    class Matkul{
        private $dbh;
        public function __construct($dbh){
            $this->dbh = $dbh;
        }
        
        public function getAllMatkul(){
            $sql = "SELECT * FROM matakuliah";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute();
            $rs = $ps->fetchAll();
            return $rs;
        }


        public function simpan($data){
            $sql = "INSERT INTO matakuliah(nama_mk, sks)
                    VALUES (?,?)";
            // prepare statement PDO    
            $ps = $this->dbh->prepare($sql); 
            $ps->execute($data);
        }

        public function getMatkul($id){
            $sql = "SELECT matakuliah.*, matakuliah.nama_mk FROM matakuliah  WHERE matakuliah.id = ?";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute([$id]);
            $rs = $ps->fetch();
            return $rs;
        }

        public function ubah($data){
            $sql = "UPDATE matakuliah SET nama_mk=?, sks=?WHERE id=?";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute($data);
        }

        public function hapus($id){
            $sql = "DELETE FROM matakuliah WHERE id=?";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute($id);
        }

    }
?>