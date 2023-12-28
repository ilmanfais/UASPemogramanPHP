<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Mahasiswa</li>
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
                <h3 class="card-title">Detail Data Mahasiswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php 
                    include_once 'controllers/class_Mahasiswa.php';
                    // ciptakan object dari class Mahasiswa
                    $id = $_REQUEST['id'];
                    $obj = new Mahasiswa($dbh);
                    // panggil method tampilkan data Mahasiswa
                    $rs = $obj->getMahasiswa($id);
                  ?>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                            <div class="col-md-4">
                                <img src="dist/img/<?= $rs->foto; ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $rs->nama; ?></h5>
                                <p class="card-text">
                                    NIM : <?= $rs->nim; ?>
                                    <br/>Alamat : <?= $rs->alamat; ?>
                                    <br/>Jurusan : <?= $rs->jurusan; ?>
                                    <br/>Jenis Kelamin : <?= $rs->jenis_kel; ?>
                                </p>
                                <a href="index.php" class="btn btn-primary">Go Back</a>
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