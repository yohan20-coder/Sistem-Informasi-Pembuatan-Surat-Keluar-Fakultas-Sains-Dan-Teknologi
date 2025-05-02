<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrasi extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //memanggil model arsipMasuk
    //   $this->load->model('Arsip_model');
      //user akses
      $this->load->model('Surkel_model');
   
     is_log_in();
  }

    public function suratKeluar()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //   $data['nomor_urut'] = $this->Surkel_model->get_nomor_urut();

    //   if (!$this->session->userdata('nomor_urut')) {
    //     $this->session->set_userdata('nomor_urut', '001');
    // }

    // $data['nomor_urut'] = $this->session->userdata('nomor_urut');

    // $nomor = $this->Surkel_model->tampil_nomor_surat();
    // $data['nomor_surat'] = $nomor;

    $this->load->model('Surkel_model','arsip');
    $data['nomorr'] = $this->arsip->tampil_nomor_surat();
    // $no_surat = $this->arsip->get_next_nomor();

      //memanggil model arsip
    //   $this->load->model('Arsip_model','arsip');
    //   $data['tampil'] = $this->arsip->tampil();

    $data['tam'] = $this->db->get('tb_perihal')->result_array();
    $data['tamp'] = $this->db->get('tb_kode')->result_array();
    $data['tujuan'] = $this->db->get('tb_tujuan')->result_array();
    $data['ttd'] = $this->db->get('tb_ttd')->result_array();
    $data['tembusan'] = $this->db->get('tb_tembusan')->result_array();

    $this->form_validation->set_rules('kode1','Kode1','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);


    if($this->form_validation->run()==false){
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Pembuatan Surat';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('administrasi/surat-keluar',$data);
      $this->load->view('template/footer');
    }else{

      $kepada = $this->input->post('kepada');
      $tembusan = $this->input->post('tembusan');

      if (!empty($tembusan)) {
        // Tambahkan nomor urut
        foreach ($tembusan as $key => $value) {
            $tembusan[$key] = ($key + 1) . ". " . trim($value);
        }

      // $com_kepada = implode('<br>', $kepada);
      $com_tembusan = implode('<br>', $tembusan);
      }

 
      // if (!empty($kepada)) {
      //   // Tambahkan nomor urut
      //   foreach ($kepada as $key => $value) {
      //       $kepada[$key] = ($key + 1) . ". " . trim($value);
      //   }

      //     $com_kepada = implode('<br>', $kepada);
      // }

      if (!empty($kepada)) {
        // Cek jumlah data
        $total = count($kepada);
        
        foreach ($kepada as $key => $value) {
            // Hanya beri nomor jika data lebih dari satu
            if($total > 1) {
                $kepada[$key] = ($key + 1) . ". " . trim($value);
            } else {
                $kepada[$key] = trim($value);
            }
        }
    
        $com_kepada = implode('<br>', $kepada);
    }

    // $current_number = $this->session->userdata('nomor_urut');



    $current_number = $this->input->post('kode1');

    $this->load->model('Surkel_model','arsip');
    $no_surat = $this->arsip->get_next_nomor();

    $text = $this->input->post('isi');
    

      $data = [
        'kode1' =>  $no_surat,
        'kode2' => $this->input->post('kode2'),
        'kode3' => $this->input->post('kode3'),
        'kode4' => $this->input->post('kode4'),
        'kode5' => $this->input->post('kode5'),
        'kode6' => $this->input->post('kode6'),
        'kode7' => $this->input->post('kode7'),
        'perihal' => $this->input->post('perihal1'),
        'lampiran' => $this->input->post('lampiran'),
        'tgl_surat' => $this->input->post('tgl_surat'),
        'kepada' =>  $com_kepada,
        'ttd' => $this->input->post('ttd'),
        'jabatan' => $this->input->post('jabatan'),
        'nipy' => $this->input->post('nipy'),
        'nidn' => $this->input->post('nidn'),
        'tembusan' =>  $com_tembusan,
        'isi' => '<div style ="margin-right: 45px;">' . $text . '</div>'
      ];

      $this->db->insert('tb_surat',$data);
      // $new_number = str_pad((int) $current_number + 1, 3, '0', STR_PAD_LEFT);
      // $this->session->set_userdata('nomor_urut', $new_number);

      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
      redirect('administrasi/master');


    }
  }

    public function get_perihal()
    {
      $id_perihal = $this->input->post('id_perihal');
      $data = $this->Surkel_model->get_perihal($id_perihal);
      echo json_encode($data);
    }

    public function get_ttd()
    {
      $id = $this->input->post('id');
      $data = $this->Surkel_model->get_ttd($id);
      echo json_encode($data);
    }

    public function get_perihall()
    {
      $id = $this->input->post('id');
      $data = $this->Surkel_model->get_perihall($id);
      echo json_encode($data);
    }

    // Reset nomor urut ke 001
    public function reset() {
      $this->db->update('tb_nomor_surat', ['nomor' => 1]);
      // $this->session->set_flashdata('message', 'Nomor urut telah direset!');
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Nomor Urut Berhasil Di reset</div>');
      redirect('administrasi/suratKeluar');
  }

  public function resetke() {

    $nomorr = $this->input->post('nomor');

    $this->db->update('tb_nomor_surat', ['nomor' => $nomorr]);
    // $this->session->set_flashdata('message', 'Nomor urut telah direset!');
    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Nomor Urut Berhasil Di reset</div>');
    redirect('administrasi/suratKeluar');
}

    public function master()
    {

      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


      $this->load->model('Surkel_model','arsip');
      $data['tampil'] = $this->arsip->tampil();

      $data['judul'] = 'Halaman Surat Keluar';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar');
      $this->load->view('template/topbar',$data);
      $this->load->view('administrasi/surkel',$data);
      $this->load->view('template/footer');
    }

public function cetak($id)
 {
    //mengambil data dari session di controller auth
   $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

   //memanggil model layanan
   $this->load->model('Surkel_model','surat');
   $data['sm'] = $this->surat->cetak($id);
   
 //  var_dump($data['tampil']);die;
   $this->load->view('administrasi/cetak/index',$data);
 }

 public function cetak_nidn($id)
 {
    //mengambil data dari session di controller auth
   $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

   //memanggil model layanan
   $this->load->model('Surkel_model','surat');
   $data['sm'] = $this->surat->cetak($id);
   
 //  var_dump($data['tampil']);die;
   $this->load->view('administrasi/cetak/index_nidn',$data);
 }

 public function cetakk($id)
 {
    //mengambil data dari session di controller auth
   $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

   //memanggil model layanan
   $this->load->model('Surkel_model','surat');
   $data['sm'] = $this->surat->cetak($id);
   
 //  var_dump($data['tampil']);die;
   $this->load->view('administrasi/cetak/index_cetak',$data);
 }

 public function cetakk_nidn($id)
 {
    //mengambil data dari session di controller auth
   $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

   //memanggil model layanan
   $this->load->model('Surkel_model','surat');
   $data['sm'] = $this->surat->cetak($id);
   
 //  var_dump($data['tampil']);die;
   $this->load->view('administrasi/cetak/index_cetak_nidn',$data);
 }

 public function hapus($id)
 {
   $this->Surkel_model->hapus($id);
   $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
   redirect('administrasi/master');
 }

  

}