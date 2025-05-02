   <!-- Begin Page Content -->
   <div class="container-fluid">
 <!-- Basic Card Example -->
              <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?= $judul;?></h6>
                </div>
                <div class="card-body col-lg-12">

            <!-- konfirmasi -->
          <div class="row">
            <div class="col-md-12">
              <?= $this->session->flashdata('message'); ?>
            </div>
          </div>

                <div class="row">
                    <div class="col-lg-12">
                        <form action="<?= base_url('master/tambah_ttd') ?>" method="post">

                        <div class="form-group">
                            <label for="nama">Nama dan Gelar</label>
                            <input type="text" class="form-control" name="nama">
                            <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">NIPY</label>
                            <input type="text" class="form-control" name="nipy">
                            <?= form_error('nipy','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">NIDN</label>
                            <input type="text" class="form-control" name="nidn">
                            <?= form_error('nidn','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan">
                            <?= form_error('jabatan','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
                
        

            </div>
      <!-- End of Main Content -->
      </div>
    </div>
</div>