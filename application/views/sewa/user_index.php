<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sewa Mobil</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Merek Mobil</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="mb-3 d-flex justify-content-end">
          <a href="../sewa/create" class="btn btn-primary">Sewa Mobil</a>
        </div>
        <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="example1" class="table table-bordered table-striped table-hover">
                  <thead class="table-dark">
                  <tr>
                    <th>#</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Akhir</th>
                    <th>Tujuan</th>
                    <th>Nama Mobil</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; foreach($sewa_data as $s) :?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $s->tanggal_mulai; ?></td>
                        <td><?= $s->tanggal_akhir; ?></td>
                        <td><?= $s->tujuan; ?></td>
                        <td><?= $s->nopol; ?></td>
                        <td>
                          <!-- <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a> -->
                          <a href="../sewa/user_edit?id=<?= $s->id; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                          <a href="../sewa/delete?id=<?= $s->id; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

