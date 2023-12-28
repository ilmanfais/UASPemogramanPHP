<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Matkul</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Matkul</li>
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
                <h3 class="card-title">Detail Data Matkul</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php 
                    include_once 'controllers/class_Matkul.php';
                    // ciptakan object dari class Matkul
                    $id = $_REQUEST['id'];
                    $obj = new Matkul($dbh);
                    // panggil method tampilkan data Matkul
                    $rs = $obj->getMatkul($id);
                  ?>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                            <!-- <div class="col-md-4">
                                <img src="dist/img/<?= $rs->foto; ?>" class="img-fluid rounded-start" alt="...">
                            </div> -->
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $rs->nama_mk; ?></h5>
                                <p class="card-text">
                                    SKS : <?= $rs->sks; ?>
                                </p>
                                <a href="indexmatkul.php" class="btn btn-primary">Go Back</a>
                            </div>
                        </div>
                     </div>
                </div>
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
  <!-- 834 - 1746 -->