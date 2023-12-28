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
              <li class="breadcrumb-item active">Data Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>800</h3>

                <p>Jumlah Mahasiswa</p>
              </div>
              <div class="icon">
                <!-- <i class="ion ion-people"></i> -->
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>1500</h3>

                <p>Jumlah Alumni</p>
              </div>
              <div class="icon">
                <!-- <i class="ion ion-stats-bars"></i> -->
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>100</h3>

                <p>Jumlah Dosen</p>
              </div>
              <div class="icon">
                <!-- <i class="ion ion-person-add"></i> -->
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>30</h3>

                <p>Fakultas</p>
              </div>
              <div class="icon">
                <!-- <i class="ion ion-pie-graph"></i> -->
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Table Data Mahasiswa</h3>
                <br>
                <a class="btn mt-2" style="background-color:#17a2b8; color:#ffffff" href="FormMahasiswa.php"><i class="fa fa-plus nav-icon mr-2"></i>Tambah Mahasiswa</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php 
                      require_once 'controllers/class_Mahasiswa.php';
                      // ciptakan object dari class Mahasiswa
                      $obj = new Mahasiswa($dbh);
                      // panggil method tampilkan data Mahasiswa
                      $rs = $obj->getAllMahasiswa();
                ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Alamat</th>
                    <th>Jurusan</th>
                    <th>Jenis Kelamin</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                        $no = 1;
                        foreach($rs as $pro){
                    ?>
                  <tr>
                    <td align="center"><?= $no; ?></td>
                    <td><?= $pro->nim; ?></td>
                    <td><?= $pro->nama; ?></td>
                    <td><?= $pro->alamat; ?></td>
                    <td><?= $pro->jurusan; ?></td>
                    <td><?= $pro->jenis_kel; ?></td>
                    <td align="center">
                      <form action="controllers/MahasiswaController.php" method="POST">
                        <a class="btn btn-success" href="DetailMahasiswa.php?hal=detailMahasiswa&id=<?= $pro->id; ?>"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning" href="EditMahasiswa.php?hal=editMahasiswa&id=<?= $pro->id; ?>"><i class="fa fa-edit"></i></a>
                        <button name="submit" value="hapus" onclick="return confirm('Anda Yakin Data Dihapus?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        <input type="hidden" name="idx" value="<?= $pro->id; ?>" />
                      </form>
                    </td>
                  </tr>
                  <?php 
                  $no++;
                    }
                    ?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Platform(s)</th>
                  </tr>
                  </tfoot>
                </table>
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