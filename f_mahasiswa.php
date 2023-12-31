<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- /.row -->
        <!-- Main row -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Mahasiswa</h3>
                <br>
                <a class="btn mt-2" style="background-color:#17a2b8; color:#ffffff" href="index.php"><i class="fa fa-arrow-left nav-icon mr-2"></i>Back</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php 
                        require_once 'controllers/class_Mahasiswa.php';
                        // ciptakan object dari class Mahasiswa
                        $jenis_kel = ['Laki-laki','Perempuan'];
                        $obj = new Mahasiswa($dbh);
                        // panggil method tampilkan data Mahasiswa
                        $rs = $obj->getAllJeniskel();
                
                ?>
                <form method="POST" action="controllers/MahasiswaController.php">
                    <div class="form-group row">
                        <label for="nim" class="col-4 col-form-label">NIM</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-sort-numeric-asc"></i>
                            </div>
                            </div> 
                            <input id="nim" name="nim" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Mahasiswa</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-group"></i>
                            </div>
                            </div> 
                            <input id="nama" name="nama" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="alamat" class="col-4 col-form-label">Alamat</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </div>
                            </div> 
                            <input id="alamat" name="alamat" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jurusan" class="col-4 col-form-label">Jurusan</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            </div> 
                            <input id="jurusan" name="jurusan" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Jenis Kelamin</label> 
                        <div class="col-8">
                        <?php 
                            $no = 0;
                            foreach($jenis_kel as $jk){
                        ?>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jenis_kel" id="jenis_kel_<?= $no ?>" type="radio" class="custom-control-input" value="<?= $jk ?>" required="required"> 
                                <label for="jenis_kel_<?= $no ?>" class="custom-control-label"><?= $jk ?></label>
                            </div>
                        <?php 
                            $no++;
                            }
                        ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-4 col-form-label">Foto</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-image"></i>
                            </div>
                            </div> 
                            <input id="foto" name="foto" type="text" class="form-control">
                        </div>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" value="simpan" class="btn btn-primary">Submit</button>
                        <input type="hidden" name="idx" value="<?= $id ?>" />
                        </div>
                    </div>
                </form>             
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->