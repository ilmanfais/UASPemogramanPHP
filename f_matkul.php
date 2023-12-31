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
              <li class="breadcrumb-item active">Tambah Matkul</li>
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
                <h3 class="card-title">Tambah Data Matkul</h3>
                <br>
                <a class="btn mt-2" style="background-color:#17a2b8; color:#ffffff" href="indexmatkul.php"><i class="fa fa-arrow-left nav-icon mr-2"></i>Back</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php 
                        require_once 'controllers/class_Matkul.php';
                        // ciptakan object dari class Matkul
                        $jenis_kel = ['Laki-laki','Perempuan'];
                        $obj = new Matkul($dbh);
                
                ?>
                <form method="POST" action="controllers/MatkulController.php">
                    <div class="form-group row">
                        <label for="nama_mk" class="col-4 col-form-label">Nama Matakuliah</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-paragraph"></i>
                            </div>
                            </div> 
                            <input id="nama_mk" name="nama_mk" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sks" class="col-4 col-form-label">SKS</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-tasks"></i>
                            </div>
                            </div> 
                            <input id="sks" name="sks" type="text" class="form-control">
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