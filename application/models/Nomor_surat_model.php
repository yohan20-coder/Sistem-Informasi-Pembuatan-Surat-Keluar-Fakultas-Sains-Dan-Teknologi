<?php
class Nomor_surat_model extends CI_Model {

    public function get_last_number()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_nomor_surat', 1);
        if ($query->num_rows() > 0) {
            $last_number = $query->row()->nomor;
            return (int) $last_number;
        } else {
            return 0;
        }
    }

    public function insert_new_number($nomor)
    {
        $data = ['nomor' => $nomor];
        return $this->db->insert('tb_nomor_surat', $data);
    }

    public function generate_number()
    {
        $last = $this->get_last_number();
        $new_number = $last + 1;
        $formatted = str_pad($new_number, 3, '0', STR_PAD_LEFT); // Format ke 3 digit
        $this->insert_new_number($formatted);
        return $formatted;
    }
}
