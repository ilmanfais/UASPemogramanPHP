<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">EditMahasiswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit Data Mahasiswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php 
                    require_once 'controllers/class_Mahasiswa.php';
                    // ciptakan object dari class Mahasiswa
                    $jenis_kel = ['Laki-laki','Perempuan'];
                    $obj = new Mahasiswa($dbh);
                    // panggil method tampilkan data Mahasiswa
                    $rs = $obj->getAllMahasiswa();
                    // tangkap request id, di url
                    $id = $_REQUEST['id'];
                    $data_edit = $obj->getMahasiswa($id);
                ?>
                <form class="container form mt-3" action="controllers/MahasiswaController.php" method="POST">
                        <div class="form-group row">
                            <label for="nim"  class="col-3 col-form-label">NIM</label> 
                            <div class="col-8">
                            <input id="nim" name="nim" value="<?= $data_edit->nim; ?>" type="text" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-3 col-form-label">Nama Mahasiswa</label> 
                            <div class="col-8">
                            <input id="nama" name="nama" value="<?= $data_edit->nama; ?>" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-3 col-form-label">Alamat</label> 
                            <div class="col-8">
                            <input id="alamat" name="alamat" value="<?= $data_edit->alamat; ?>" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jurusan" class="col-3 col-form-label">Jurusan</label> 
                            <div class="col-8">
                            <input id="jurusan" name="jurusan" value="<?= $data_edit->jurusan; ?>" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3">Jenis Kelamin</label> 
                            <div class="col-8">
                            <?php 
                                $no = 0;
                                foreach($jenis_kel as $jk){
                                // edit jenis_kel
                                $cek = ($data_edit->jenis_kel == $jk) ? "checked" : "";
                             ?>
                                <div class="custom-control custom-radio custom-control-inline">
                                <input name="jenis_kel" id="jenis_kel_<?= $no ?>" type="radio" class="custom-control-input" value="<?= $jk ?>" <?= $cek ?> required="required"> 
                            <label for="jenis_kel_<?= $no ?>" class="custom-control-label"><?= $jk ?></label>
                                </div>
                            <?php 
                                $no++;
                                }
                            ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="foto" class="col-3 col-form-label">Foto</label> 
                            <div class="col-8">
                            <input id="foto" name="foto" value="<?= $data_edit->foto; ?>" type="text" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="offset-3 col-8">
                            <button name="submit" type="submit" value="ubah" class="btn btn-primary">Update</button>
                            <input type="hidden" name="idx" value="<?= $id ?>" />
                        </div>
                        </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- 834 - 1746 -->