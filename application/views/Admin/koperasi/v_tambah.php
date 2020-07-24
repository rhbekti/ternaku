
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
        <div class="card-body">
        <div class="container">
        <div class="row">
            <div class="col-md-6">

                <form action="<?php echo site_url('/Koperasi/simpan'); ?>" method="post">
                    <div class="form-group mb-3">
                        <label for="nama">Nama Koperasi</label>
                        <input type="text" name="namakoperasi" id="nama" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="alamat">Alamat Koperasi</label>
                        <input type="text" name="alamatkoperasi" id="alamat" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="notlp">Telp/Kontak</label>
                        <input type="number" name="notlp" id="notelp" class="form-control">
                    </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                        <label for="kecamatan">Kecamatan</label>
                        <select name="kecamatan" id="kecamatan" class="form-control">
                            <option value="0">-Pilih-</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="kabupaten">Kabupaten</label>
                        <select name="kabupaten" id="kabupaten" class="form-control">
                            <option value="0">-Pilih-</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="Provinsi">Provinsi</label>
                        <select name="provinsi" id="provinsi" class="form-control">
                            <option value="0">-Pilih-</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success float-right">Simpan</button>
                    <a href="<?= site_url('/Koperasi'); ?>" class="btn btn-danger float-right mx-2">Batal</a>
                    </form>
            </div>
        </div>
        </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
