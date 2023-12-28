<?php 
    class Mahasiswa{
        private $dbh;
        public function __construct($dbh){
            $this->dbh = $dbh;
        }
        
        public function getAllMahasiswa(){
            $sql = "SELECT * FROM mahasiswa";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute();
            $rs = $ps->fetchAll();
            return $rs;
        }

        public function getAllJeniskel(){
            $sql="SELECT * FROM mahasiswa";
            // prepare statement PDO
            $rs = $this->dbh->query($sql);
            return $rs;
        }

        public function simpan($data){
            $sql = "INSERT INTO mahasiswa(nim,nama,alamat,jurusan,jenis_kel,foto)
                    VALUES (?,?,?,?,?,?)";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute($data);
        }

        public function getMahasiswa($id){
            $sql = "SELECT mahasiswa.*, mahasiswa.nama  AS jenis_kel FROM mahasiswa  WHERE mahasiswa.id = ?";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute([$id]);
            $rs = $ps->fetch();
            return $rs;
        }

        public function ubah($data){
            $sql = "UPDATE mahasiswa SET nim=?, nama=?, alamat=?, jurusan=?, jenis_kel=?, foto=? WHERE id=?";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute($data);
        }

        public function hapus($id){
            $sql = "DELETE FROM mahasiswa WHERE id=?";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute($id);
        }

    }
?>