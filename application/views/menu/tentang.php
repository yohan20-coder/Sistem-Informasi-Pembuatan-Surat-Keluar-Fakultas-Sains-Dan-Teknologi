
    

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $judul;?></h1>

          <!-- konfirmasi -->
          <div class="row">
            <div class="col-md-6">
              <?= $this->session->flashdata('message'); ?>
            </div>
          </div>

          <!-- <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="<?= base_url('assets/foto-login.JPG');?>" class="card-img" width="625" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title"><?= $user['nama'];?></h5>
                            <p class="card-text"><?= $user['email'];?></p>
                            <p class="card-text"><small class="text-mutted">Member Since <?= date('d F Y', $user['date_created']) ?></small></p>
                        </div>
                    </div>
                </div>
          </div> -->

          <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="<?= base_url('assets/foto-login.JPG');?>" class="card-img" width="625" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Aplikasi Pembuatan Surat Keluar V.1.0</h5>
                            <p class="card-text">Setting Nomor Surat</p>
                            <a href="<?= base_url();?>administrasi/reset" class="btn btn-danger btn-sm mb-2" onclick="return confirm('Yakin Reset Nomor Urut Surat ! Tindakan Anda Dapat Merubah Nomor Surat Kembali Ke Awal 001');">Reset Nomor Surat</a>
                        </div>
                    </div>
                </div>
          </div>

          <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="<?= base_url('assets/foto-login.JPG');?>" class="card-img" width="625" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <!-- <h5 class="card-title">Aplikasi Pembuatan Surat Keluar V.1.0</h5> -->
                    <form action="<?= base_url('administrasi/resetke') ?>" method="post">

                        <div class="form-group">
                            <label for="nama">Nomor Ke</label>
                            <input type="number" class="form-control" name="nomor" required>
                            <?= form_error('nomor','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                  

                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
                        </div>
                        </form>

                            <!-- <a href="<?= base_url();?>administrasi/reset" class="btn btn-danger btn-sm mb-2" onclick="return confirm('Yakin Reset Nomor Urut Surat ! Tindakan Anda Dapat Merubah Nomor Surat Kembali Ke Awal 001');">Reset Nomor Surat</a> -->
                        </div>
                    </div>
                </div>
          </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      