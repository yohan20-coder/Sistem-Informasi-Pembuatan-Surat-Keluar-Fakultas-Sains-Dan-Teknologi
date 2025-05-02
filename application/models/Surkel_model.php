<?php

class Surkel_model extends CI_Model
{

    public function tampil()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_surat');
        return $query->result_array();
    }

    public function get_next_nomor() {
        // Ambil nomor terakhir
        $query = $this->db->get('tb_nomor_surat')->row();
        $next_nomor = $query->nomor;

        // Update nomor di tabel nomor_surat
        $this->db->update('tb_nomor_surat', ['nomor' => $next_nomor + 1], ['id' => $query->id]);

        // Format ke 3 digit, misal 001, 002
        return str_pad($next_nomor, 3, '0', STR_PAD_LEFT);
    }



    public function get_perihal($id_perihal) {
        $this->db->where('id', $id_perihal);
        return $this->db->get('tb_perihal')->row();
    }

    public function get_perihall($id)
    {
        $this->db->from('tb_perihal');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_ttd($id)
    {
        $this->db->from('tb_ttd');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }
   
    public function get_nomor_urut() {
        $this->db->select_max('id');
        $result = $this->db->get('tb_surat')->row();

        // Jika belum ada data, mulai dari 1
        if (!$result->id) {
            return '001';
        }

        $last_number = (int) $result->id;
        $new_number = $last_number + 1;

        // Format nomor urut menjadi empat digit, misalnya: 0002
        return str_pad($new_number, 3, '0', STR_PAD_LEFT);
    }

    public function cetak($id)
    {
    	$query =  $this->db->get_where('tb_surat',['id'=>$id]);
        return $query->row_array();
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_surat');
    }

    public function jmlkeluarr()
    {
        $query = $this->db->get('tb_surat');
        if($query->num_rows() > 0)
        {
            return $query->num_rows();
        }else {
           return 0;
        }
    }

    public function tampil_nomor_surat()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_nomor_surat');
        return $query->row_array();
    }


}