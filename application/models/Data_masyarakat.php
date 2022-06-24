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

    function sum_x1()
    {
        $this->db->select_sum('x1');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x2()
    {
        $this->db->select_sum('x2');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x3()
    {
        $this->db->select_sum('x3');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x4()
    {
        $this->db->select_sum('x4');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x5()
    {
        $this->db->select_sum('x5');
        return $this->db->get($this->table)->row_array();
    }

    function sum_y()
    {
        $this->db->select_sum('y');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x1y()
    {
        $this->db->select_sum('x1y');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x2y()
    {
        $this->db->select_sum('x2y');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x3y()
    {
        $this->db->select_sum('x3y');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x4y()
    {
        $this->db->select_sum('x4y');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x5y()
    {
        $this->db->select_sum('x5y');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x1x2()
    {
        $this->db->select_sum('x1x2');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x1x3()
    {
        $this->db->select_sum('x1x3');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x1x4()
    {
        $this->db->select_sum('x1x4');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x1x5()
    {
        $this->db->select_sum('x1x5');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x2x3()
    {
        $this->db->select_sum('x2x3');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x2x4()
    {
        $this->db->select_sum('x2x4');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x2x5()
    {
        $this->db->select_sum('x2x5');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x3x4()
    {
        $this->db->select_sum('x3x4');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x3x5()
    {
        $this->db->select_sum('x3x5');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x4x5()
    {
        $this->db->select_sum('x4x5');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x1_kuadrat()
    {
        $this->db->select_sum('x1_kuadrat');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x2_kuadrat()
    {
        $this->db->select_sum('x2_kuadrat');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x3_kuadrat()
    {
        $this->db->select_sum('x3_kuadrat');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x4_kuadrat()
    {
        $this->db->select_sum('x4_kuadrat');
        return $this->db->get($this->table)->row_array();
    }

    function sum_x5_kuadrat()
    {
        $this->db->select_sum('x5_kuadrat');
        return $this->db->get($this->table)->row_array();
    }
}
