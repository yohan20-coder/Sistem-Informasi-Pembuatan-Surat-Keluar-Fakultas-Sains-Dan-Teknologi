
<!-- Begin Page Content -->
<div class="container-fluid">
              <!-- Basic Card Example -->
              <div class="col-12 text-right">
                  <!-- <a href="<?= base_url();?>administrasi/reset" class="btn btn-danger btn-sm mb-2" onclick="return confirm('Yakin Reset Nomor Urut Surat ! Tindakan Anda Dapat Merubah Nomor Surat Kembali Ke Awal 001');">Reset Nomor Surat</a> -->
</div>
              <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?= $judul;?></h6>
                
                </div>
                <div class="card-body col-lg-12">
               
          <!-- Page Heading -->
         <!--  <h1 class="h3 mb-4 text-gray-800"><?= $judul;?></h1> -->

         <div class="row">
         	<div class="col-lg-12">
         		 <!-- <form action="" method="post"> -->

              <?= $this->session->flashdata('message');?>
              <form action="<?= base_url('administrasi/suratKeluar') ?>" method="post">

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">No.Surat</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" name="kode1" value="<?= $nomorr['nomor'] ?>" readonly>
                  <?= form_error('kode1','<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="col-sm-1">
                  <input type="text" class="form-control" name="kode2" value="115" readonly>
                </div>

                <div class="col-sm-1.5">
                <select name="kode3" class="form-control" required>
                <option value="F1">F1</option>
                <option value="F2">F2</option>
                <option value="F3">F3</option>
                <option value="F4">F4</option>
                <option value="F5">F5</option>
                <option value="F6">F6</option>
                <option value="F7">F7</option>
                <option value="F8">F8</option>
              </select>
                 
                </div>
                <div class="col-sm-1">
                <input type="text" class="form-control" name="kode4" value="72" readonly>
                
                </div>
                <div class="col-sm-1.5">
                <select name="kode5" class="form-control">
              
                            <?php foreach($tamp as $tm): ?>
                                <option value="<?= $tm['kode'] ?>"><?= $tm['kode'] ?></option>
                            <?php endforeach; ?>
              </select>
              </select>
                 
                </div>

            <div class="col-sm-2">
                <select name="kode6" class="form-control">
                <option value="I">Januari</option>
                <option value="II">Februari</option>
                <option value="III">Maret</option>
                <option value="IV">April</option>
                <option value="V">Mei</option>
                <option value="VI">Juni</option>
                <option value="VII">Juli</option>
                <option value="VIII">Agustus</option>
                <option value="IX">September</option>
                <option value="X">Oktober</option>
                <option value="XI">November</option>
                <option value="XII">Desember</option>
              </select>
                
                </div>

                <div class="col-sm-2">
                <select name="kode7" class="form-control">
                <?php
                    $currentYear = date("Y");  // Mendapatkan tahun saat ini
                    $startYear = 2000;         // Tahun mulai

                    for ($year = $currentYear; $year >= $startYear; $year--) {
                        echo "<option value=\"$year\">$year</option>";
                    }
                    ?>
              </select>
                </div>
                

              </div>

           
              <!-- <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Kode Surat</label>
                <div class="col-sm-10">
                <select name="status_berita" class="form-control">
                <option value="A">A</option>
                <option value="C">C</option>
              </select>
                  
                </div>
              </div> -->

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Perihal</label>
                <div class="col-sm-10">
                <select name="perihal" class="form-control" id="id" onchange="tampilkanDeskripsi()" required>
                <option value="">Pilih</option>
                            <?php foreach($tam as $tm): ?>
                                <option value="<?= $tm['id'] ?>"><?= $tm['perihal'] ?></option>
                            <?php endforeach; ?>
              </select>
               
                </div>
              </div>

              <select hidden name="perihal1" id="perihal1" class="form-control">
                            <option value="0"></option>                             
                        </select>


             
      

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Lampiran</label>
                <div class="col-sm-10">
                <select name="lampiran" class="form-control" required>
                <option value="1 Jepitan">1 Jepitan</option>
                <option value="2 Jepitan">2 Jepitan</option>
                <option value="3 Jepitan">3 Jepitan</option>
              </select>
                  
                </div>
              </div>


              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Tanggal Surat</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" name="tgl_surat" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Kepada/Tujuan</label>
                <div class="col-sm-10">
                <select name="kepada[]" multiple="multiple" class="js-example-basic-multiple form-control" required>
                <?php foreach($tujuan as $tm): ?>
                                <option value="<?= $tm['tujuan'] ?>"><?= $tm['tujuan'] ?></option>
                            <?php endforeach; ?>
              </select>
              </div>
              </div>

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Penanda Tangan</label>
                <div class="col-sm-10">
                <select name="ttdd" id="ttdd" class="form-control" required>
                <option value="">Pilih</option> 
                <?php foreach($ttd as $tm): ?>
                                <option value="<?= $tm['id'] ?>"><?= $tm['jabatan'] ?></option>
                            <?php endforeach; ?>
              </select>
                 
                </div>
              </div>


              <select hidden  name="ttd" id="ttd" class="form-control">
                            <option value="0"></option>                             
                        </select>

                        <select hidden  name="jabatan" id="jabatan" class="form-control">
                            <option value="0"></option>                             
                        </select>

                        <select hidden name="nipy" id="nipy" class="form-control">
                            <option value="0"></option>                             
                        </select>

                        <select hidden name="nidn" id="nidn" class="form-control">
                            <option value="0"></option>                             
                        </select>
          
           
              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Tembusan</label>
                <div class="col-sm-10">
                <select class="js-example-basic-multiple form-control" name="tembusan[]" multiple="multiple" required>
                <?php foreach($tembusan as $tm): ?>
                                <option value="<?= $tm['tembusan'] ?>"><?= $tm['tembusan'] ?></option>
                            <?php endforeach; ?>
                </select>
             
                </div>
              </div>

              <!-- <input type="text" class="form-control" id = "isi"> -->

                    
                     <div class="form-group row">
                        <label for="ringkas" class="col-sm-2 col-form-label">Isi Surat</label>
                        <div class="col-sm-10">
                        <textarea class="form-control" name="isi" id="isi" rows="14" col="10"></textarea>
                     
                        </div>
                    </div>
                  


                <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="Submit" class="btn btn-primary">Simpan</button>
                            </div>
                         </div>
         		
              </form>
             
         	</div>
         </div>       
      </div>

       </div>       
      </div>  

      <!-- End of Main Content -->

</div>