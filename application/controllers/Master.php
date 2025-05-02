<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //memanggil model arsipMasuk
      $this->load->model('Master_model');
      //user akses
     is_log_in();
  }

    public function index()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model arsip
      $this->load->model('Master_model','arsip');
      $data['tampil'] = $this->arsip->tampil();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Kode Surat Keluar';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('master/index_kode',$data);
      $this->load->view('template/footer');
    }

    public function tambah_kode()
    {
      $data['judul'] = 'Tambah Kode';
      //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      
   
      //validasi
      $this->form_validation->set_rules('kode','Kode','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('keterangan','Keterangan','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

      if($this->form_validation->run()==false){
        
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('master/tambah_kode',$data);
        $this->load->view('template/footer');
      }else{
        $data = [
            'kode' => $this->input->post('kode'),
            'keterangan' => $this->input->post('keterangan')
        ];

        $this->db->insert('tb_kode',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
        redirect('master');
      }
      
    }

  public function ubah_kode($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['ubah'] = $this->Master_model->getUbahKode($id);

      $this->form_validation->set_rules('kode','Kode','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('keterangan','keterangan','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

    if($this->form_validation->run()==false){
        $data['judul'] = 'Kode Edit';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('master/ubah_kode',$data);
        $this->load->view('template/footer');
      }else{

        $data = [
          'kode' => $this->input->post('kode'),
          'keterangan' => $this->input->post('keterangan')
        ];

         $this->db->where('id', $this->input->post('id'));
         $this->db->update('tb_kode', $data);
          $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiUbah</div>');
        redirect('master');
      }
    
    } 

public function hapus_kode($id)
 {
   $this->Master_model->hapus_kode($id);
   $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
   redirect('master');
 }

 public function perihal()
 {
    //mengambil data dari session di controller auth
   $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

   //memanggil model arsip
   $this->load->model('Master_model','arsip');
   $data['tampil'] = $this->arsip->tampil_perihal();
   
 //  var_dump($data['tampil']);die;
   $data['judul'] = 'Halaman Perihal Surat Keluar';
   $this->load->view('template/header',$data);
   $this->load->view('template/sidebar',$data);
   $this->load->view('template/topbar',$data);
   $this->load->view('master/index_perihal',$data);
   $this->load->view('template/footer');
 }

 public function tambah_perihal()
 {
   $data['judul'] = 'Tambah Kode';
   //mengambil data dari session di controller auth
   $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
   

   //validasi
   $this->form_validation->set_rules('perihal','Perihal','required',[
     'required' => 'Data Tidak Boleh Kosong !'
   ]);
   $this->form_validation->set_rules('isi','Isi','required',[
     'required' => 'Data Tidak Boleh Kosong !'
   ]);

   if($this->form_validation->run()==false){
     
    $data['judul'] = 'Halaman Tambah Perihal';
     $this->load->view('template/header',$data);
     $this->load->view('template/sidebar',$data);
     $this->load->view('template/topbar',$data);
     $this->load->view('master/tambah_perihal',$data);
     $this->load->view('template/footer');
   }else{
     $data = [
         'perihal' => $this->input->post('perihal'),
         'isi' => $this->input->post('isi')
     ];

     $this->db->insert('tb_perihal',$data);
     $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
     redirect('master/perihal');
   }
   
 }

 public function ubah_perihal($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['ubah'] = $this->Master_model->getUbahPerihal($id);

      $this->form_validation->set_rules('perihal','Perihal','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('isi','Isi','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

    if($this->form_validation->run()==false){
        $data['judul'] = 'Perihal Edit';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('master/ubah_perihal',$data);
        $this->load->view('template/footer');
      }else{

        $data = [
          'perihal' => $this->input->post('perihal'),
          'isi' => $this->input->post('isi')
        ];

         $this->db->where('id', $this->input->post('id'));
         $this->db->update('tb_perihal', $data);
          $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiUbah</div>');
        redirect('master/perihal');
      }
    
    } 

public function hapus_perihal($id)
 {
   $this->Master_model->hapus_perihal($id);
   $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
   redirect('master/perihal');
 }

 public function tembusan()
 {
    //mengambil data dari session di controller auth
   $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

   //memanggil model arsip
   $this->load->model('Master_model','arsip');
   $data['tampil'] = $this->arsip->tampil_tembusan();
   
 //  var_dump($data['tampil']);die;
   $data['judul'] = 'Halaman Tembusan Surat Keluar';
   $this->load->view('template/header',$data);
   $this->load->view('template/sidebar',$data);
   $this->load->view('template/topbar',$data);
   $this->load->view('master/index_tembusan',$data);
   $this->load->view('template/footer');
 }

 public function tambah_tembusan()
 {
   $data['judul'] = 'Tambah Kode';
   //mengambil data dari session di controller auth
   $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
   

   //validasi
   $this->form_validation->set_rules('tembusan','Tembusan','required',[
     'required' => 'Data Tidak Boleh Kosong !'
   ]);
   

   if($this->form_validation->run()==false){
     
    $data['judul'] = 'Halaman Tambah Tembusan';
     $this->load->view('template/header',$data);
     $this->load->view('template/sidebar',$data);
     $this->load->view('template/topbar',$data);
     $this->load->view('master/tambah_tembusan',$data);
     $this->load->view('template/footer');
   }else{
     $data = [
         'tembusan' => $this->input->post('tembusan')
     ];

     $this->db->insert('tb_tembusan',$data);
     $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
     redirect('master/tembusan');
   }
   
 }

 public function hapus_tembusan($id)
 {
   $this->Master_model->hapus_tembusan($id);
   $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
   redirect('master/tembusan');
 }

 

    public function ttd()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model arsip
      $this->load->model('Master_model','arsip');
      $data['tampil'] = $this->arsip->tampil_ttd();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman TTD';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('master/index_ttd',$data);
      $this->load->view('template/footer');
    }


    public function tambah_ttd()
    {
      $data['judul'] = 'Tambah Kode';
      //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      
   
      //validasi
      $this->form_validation->set_rules('nama','Nama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('nipy','Nipy','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('nidn','Nidn','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('jabatan','Jabatan','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      
   
      if($this->form_validation->run()==false){
        
       $data['judul'] = 'Halaman Tambah TTD';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('master/tambah_ttd',$data);
        $this->load->view('template/footer');
      }else{
        $data = [
            'nama' => $this->input->post('nama'),
            'nipy' => $this->input->post('nipy'),
            'nidn' => $this->input->post('nidn'),
            'jabatan' => $this->input->post('jabatan')
        ];
   
        $this->db->insert('tb_ttd',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
        redirect('master/ttd');
      }
      
    }

    public function ubah_ttd($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['ubah'] = $this->Master_model->getUbahTTD($id);

      $this->form_validation->set_rules('nama','Nama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('nipy','Nipy','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('nidn','Nidn','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('jabatan','Jabatan','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      

    if($this->form_validation->run()==false){
        $data['judul'] = 'TTD Edit';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('master/ubah_ttd',$data);
        $this->load->view('template/footer');
      }else{

        $data = [
          'nama' => $this->input->post('nama'),
          'nipy' => $this->input->post('nipy'),
          'nidn' => $this->input->post('nidn'),
          'jabatan' => $this->input->post('jabatan')
        ];

         $this->db->where('id', $this->input->post('id'));
         $this->db->update('tb_ttd', $data);
          $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiUbah</div>');
        redirect('master/ttd');
      }
    
    } 

    public function hapus_ttd($id)
    {
      $this->Master_model->hapus_ttd($id);
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
      redirect('master/ttd');
    }

    public function tujuan()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model arsip
      $this->load->model('Master_model','arsip');
      $data['tampil'] = $this->arsip->tampil_tujuan();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data Tujuan';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('master/index_tujuan',$data);
      $this->load->view('template/footer');
    }

    public function hapus_tujuan($id)
    {
      $this->Master_model->hapus_tujuan($id);
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
      redirect('master/tujuan');
    }

public function tambah_tujuan()
 {
   $data['judul'] = 'Tambah Kode';
   //mengambil data dari session di controller auth
   $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
   

   //validasi
   $this->form_validation->set_rules('tujuan','Tujuan','required',[
     'required' => 'Data Tidak Boleh Kosong !'
   ]);
   

   if($this->form_validation->run()==false){
     
    $data['judul'] = 'Halaman Tambah Tujuan';
     $this->load->view('template/header',$data);
     $this->load->view('template/sidebar',$data);
     $this->load->view('template/topbar',$data);
     $this->load->view('master/tambah_tujuan',$data);
     $this->load->view('template/footer');
   }else{
     $data = [
         'tujuan' => $this->input->post('tujuan')
     ];

     $this->db->insert('tb_tujuan',$data);
     $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
     redirect('master/tujuan');
   }
   
 }

 

}