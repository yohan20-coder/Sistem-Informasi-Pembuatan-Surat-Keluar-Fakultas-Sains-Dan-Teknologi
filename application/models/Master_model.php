<?php

class Master_model extends CI_Model
{
    public function tampil()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_kode');
        return $query->result_array();
    }

    public function getUbahKode($id)
    {
    	$query =  $this->db->get_where('tb_kode',['id'=>$id]);
        return $query->row_array();
    }

    public function getUbahTTD($id)
    {
    	$query =  $this->db->get_where('tb_ttd',['id'=>$id]);
        return $query->row_array();
    }

    public function getUbahPerihal($id)
    {
    	$query =  $this->db->get_where('tb_perihal',['id'=>$id]);
        return $query->row_array();
    }

    public function hapus_kode($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_kode');
    }

    public function tampil_perihal()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_perihal');
        return $query->result_array();
    }

    public function hapus_perihal($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_perihal');
    }

    public function tampil_tembusan()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_tembusan');
        return $query->result_array();
    }

    public function hapus_tembusan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_tembusan');
    }

    public function tampil_ttd()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_ttd');
        return $query->result_array();
    }
    public function hapus_ttd($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_ttd');
    }

    public function hapus_tujuan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_tujuan');
    }

    public function tampil_tujuan()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_tujuan');
        return $query->result_array();
    }
  
}