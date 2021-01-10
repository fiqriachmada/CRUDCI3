<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tamu_model extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    public function getTamu()
    {
        $results = array();
        $query = $this->db->get("tamu");
        if ($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
    }

    public function insert($nama, $alamat)
    {
        $field = array(
            'nama' => $nama,
            'alamat' => $alamat
        );
        $this->db->insert('tamu', $field);
    }

    public function edit($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tamu');
        return $query->result();
    }

    public function update($id, $nama, $alamat)
    {
        $field = array(
            'nama' => $nama,
            'alamat' => $alamat
        );

        $this->db->where('id', $id);
        $this->db->update('tamu', $field);
    }


    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tamu');
    }
}
