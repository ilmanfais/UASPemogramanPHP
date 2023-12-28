<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Matkul</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">EditMatkul</li>
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
                <h3 class="card-title">Edit Data Matkul</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php 
                    require_once 'controllers/class_Matkul.php';
                    // ciptakan object dari class Matkul
                    $obj = new Matkul($dbh);
                    // panggil method tampilkan data Matkul
                    $rs = $obj->getAllMatkul();
                    // tangkap request id, di url
                    $id = $_REQUEST['id'];
                    $data_edit = $obj->getMatkul($id);
                ?>
                <form class="container form mt-3" action="controllers/MatkulController.php" method="POST">
                        <div class="form-group row">
                            <label for="nama_mk"  class="col-3 col-form-label">Nama Matakuliah</label> 
                            <div class="col-8">
                            <input id="nama_mk" name="nama_mk" value="<?= $data_edit->nama_mk; ?>" type="text" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sks" class="col-3 col-form-label">SKS</label> 
                            <div class="col-8">
                            <input id="sks" name="sks" value="<?= $data_edit->sks; ?>" type="text" class="form-control" required="required">
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