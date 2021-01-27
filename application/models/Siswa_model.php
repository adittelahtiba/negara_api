<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{

    function getSiswaAll()
    {
        return $this->db->query('select * from siswa limit 10')->result_array();
    }

    function deleteSiwa($id)
    {
        $this->db->delete('siswa', ['id' => $id]);
        return $this->db->affected_rows();
    }

    function addSiswa($data)
    {
        $this->db->insert('siswa', $data);
        return $this->db->affected_rows();
    }

    function updateSiswa($data, $id)
    {
        $this->db->update('siswa', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}
