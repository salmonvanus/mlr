<?php
class Data_masyarakat extends CI_Model
{
    private $table = "masyarakat";

    function show_data()
    {
        return $this->db->get($this->table)->result_array();
    }

    function save($table_name, $data = array())
    {
        $insert = $this->db->insert($table_name, $data);
        return $insert;
    }

    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }
}
