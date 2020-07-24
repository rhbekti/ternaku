
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $judul; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $judul; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
          <div class="card-header">
              <button class="btn btn-success ml-4">Tambah Data</button>
          </div>
        <div class="card-body">
        <table class="table table-hover mt-3" id="mytable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Kelompok</th>
                      <th>Alamat Kelompok</th>
                      <th>No Telp</th>
                      <th>&nbsp;</th>
                    </tr>
                  </thead>
          </table>
        </>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
  </div>
  <form id="add-row-form" action="<?php echo base_url().'index.php/Kelompok/hapus'?>" method="post">
         <div class="modal fade" id="Modalhapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <h4 class="modal-title" id="myModalLabel">Hapus Pengguna</h4>
                   </div>
                   <div class="modal-body">
                      <input type="hidden" name="user_id" class="form-control" placeholder="id" required>
                      <strong>Anda yakin mau menghapus data ini?</strong>
                   </div>
                   <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="add-row" class="btn btn-success">Hapus</button>
                   </div>
                    </div>
            </div>
         </div>
     </form>