<!-- Footer -->
<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Web Andi <?= date('Y');?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Anda Yakin Ingin Logout...!</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('auth/logout');?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/');?>vendor/jquery/jquery.min.js"></script>

<script>

  // Inisialisasi TinyMCE pada textarea
  tinymce.init({
            selector: '#isi'
        });
        function tampilkanDeskripsi() {
            // Ambil nilai yang dipilih di select
            var id_perihal = $('#id').val();

            if (id_perihal) {
                $.ajax({
                    url: "<?= site_url('administrasi/get_perihal') ?>",
                    type: "POST",
                    data: { id_perihal: id_perihal },
                    dataType: "json",
                    success: function(data) {
                    // Tampilkan data di console jika berhasil
                    console.log("Data yang diterima:", data);

                    // Tampilkan deskripsi di TinyMCE
                    if (data.isi) {
                        tinymce.get('isi').setContent(data.isi);
                    } else {
                        tinymce.get('isi').setContent("Deskripsi tidak tersedia.");
                    }
                    },
                    error: function() {
                    console.log("Terjadi kesalahan dalam mengambil data.");
                    tinymce.get('isi').setContent("Terjadi kesalahan dalam mengambil data.");
                    }
                });
            } else {
              tinymce.get('deskripsi').setContent("");
            }
        }
    </script>


<script>
    $(document).ready(function(){
      $('#ttdd').change(function(){
        var id = $(this).val();
        $.ajax({
          url : "<?= base_url();?>/administrasi/get_ttd",
          method : "POST",
          dataType : "JSON",
          data : {
               id : id
          },
          success: function(array){
            var nama = '';
            var jabatan = '';
            var nipy = '';
            var nidn = '';
            for(let index = 0; index < array.length; index++){
              nama += "<option>" + array[index].nama + "</option>"
              jabatan += "<option>" + array[index].jabatan + "</option>"
              nipy += "<option>" + array[index].nipy + "</option>"
              nidn += "<option>" + array[index].nidn + "</option>"
             }
            $('#ttd').html(nama);
            $('#jabatan').html(jabatan);
            $('#nipy').html(nipy);
            $('#nidn').html(nidn);
          }

        })
      })
    })
</script>

<script>
    $(document).ready(function(){
      $('#id').change(function(){
        var id = $(this).val();
        $.ajax({
          url : "<?= base_url();?>/administrasi/get_perihall",
          method : "POST",
          dataType : "JSON",
          data : {
               id : id
          },
          success: function(array){
            var perihal = '';
          
            for(let index = 0; index < array.length; index++){
              perihal += "<option>" + array[index].perihal + "</option>"
             
            }
            $('#perihal1').html(perihal);
           
          }

        })
      })
    })
</script>



  <script src="<?= base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="<?= base_url('assets/');?>select/dist/js/select2.min.js"></script>
      <script>
         $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
      </script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/');?>js/sb-admin-2.min.js"></script>
  <script src="<?= base_url('assets/');?>ckeditor/ckeditor.js"></script>
  <script src="<?= base_url('assets/');?>tinymce/js/tinymce/tinymce.min.js"></script>
  <!-- <script>
      CKEDITOR.replace( 'editor1' );
  </script> -->
  <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    ClassicEditor
      .create(document.querySelector('#editor1'))
      .then(function (editor) {
        // The editor instance
      })
      .catch(function (error) {
        console.error(error)
      })

    // bootstrap WYSIHTML5 - text editor

    $('.textareaku').wysihtml5({
      toolbar: { fa: true }
    })
  })
</script>


<script>
tinymce.init({
  selector: '#isi',
  height: 600,
  plugins: 'print preview paste searchreplace autolink directionality visualblocks visualchars code fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools colorpicker textpattern help',
  toolbar: 'formatselect | fontsizeselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | image | table | removeformat',
  visual_table_class: 'tiny-table',
   fontsize_formats: "8px 10px 12px 14px 18px 24px 36px"
 });

</script>
<script>
tinymce.init({
  selector: '.textareatengah',
  height: 500,
  plugins: 'print preview paste searchreplace autolink directionality visualblocks visualchars code fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools colorpicker textpattern help',
  toolbar: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | image | table | removeformat',
  visual_table_class: 'tiny-table'
 });
 </script>
  <!-- Page level plugins -->
  <script src="<?= base_url('assets/');?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/');?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- fancybox -->
  <script src="<?= base_url('assets/');?>fancybox/js/jquery.fancybox.js"></script>
  

<!-- Page level custom scripts -->
  <script src="<?= base_url('assets/');?>js/demo/datatables-demo.js"></script>

  <!-- membuat fungsi jquery ajax untuk nangkap dan simpan data dari checked -->
  <script>

     $('.custom-file-input').on('change', function() {
                    let fileName = $(this).val().split('\\').pop();
                    $(this).next('.custom-file-label').addClass("selected").html(fileName);
                });

    $('.form-check-input').on('click', function(){
      const menuid = $(this).data('menu');      //variabel utk nankap data id menu dan role_id
      const roleid = $(this).data('role');

      $.ajax({
        url : "<?= base_url('admin/ubahaccess') ?>",
        type :'post',
        data :{
          menuid:menuid,        //fungsi ajax ini bertugas mngirim parameter menuid dan role id ke function ubah access
          roleid:roleid
        },
        success:function(){
          document.location.href="<?= base_url('admin/roleaccess/') ?>" + roleid;
        }
      })
    })
  </script>

</body>

</html>