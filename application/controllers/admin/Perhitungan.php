<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perhitungan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('Data_admin');
        $this->load->model('Data_masyarakat');

        $this->load->helper(array('file', 'url', 'form'));
        $this->load->library(array('form_validation'));

        if (!($this->session->userdata('username'))) {
            redirect('Login');
        }
    }

    // Menampilkan Halaman Awal Admin
    public function index()
    {
        $data['username']   = $this->session->userdata('username');
        $data['title']      = 'Perhitungan';
        $data['title_name'] = 'Perhitungan';
        $data['user']       = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['footer']     = ' <span class="text-muted d-none d-sm-inline-block float-right"></span>';
        $data['id']         = $this->session->userdata('id');
        $id_admin           = $data['id'];
        $data['profile']    = $this->Data_admin->show_profile($id_admin);

        $data['masyarakat'] = $this->Data_masyarakat->show_data();

        $count_all_data = count($data['masyarakat']);
        $row_col = $count_all_data + 1;

        $sum_x1 = $this->Data_masyarakat->sum_x1();
        $sum_x2 = $this->Data_masyarakat->sum_x2();
        $sum_x3 = $this->Data_masyarakat->sum_x3();
        $sum_x4 = $this->Data_masyarakat->sum_x4();
        $sum_x5 = $this->Data_masyarakat->sum_x5();

        $sum_y    = $this->Data_masyarakat->sum_y();
        $sum_x1_y = $this->Data_masyarakat->sum_x1y();
        $sum_x2_y = $this->Data_masyarakat->sum_x2y();
        $sum_x3_y = $this->Data_masyarakat->sum_x3y();
        $sum_x4_y = $this->Data_masyarakat->sum_x4y();
        $sum_x5_y = $this->Data_masyarakat->sum_x5y();

        $sum_x1x2 = $this->Data_masyarakat->sum_x1x2();
        $sum_x1x3 = $this->Data_masyarakat->sum_x1x3();
        $sum_x1x4 = $this->Data_masyarakat->sum_x1x4();
        $sum_x1x5 = $this->Data_masyarakat->sum_x1x5();
        $sum_x2x3 = $this->Data_masyarakat->sum_x2x3();
        $sum_x2x4 = $this->Data_masyarakat->sum_x2x4();
        $sum_x2x5 = $this->Data_masyarakat->sum_x2x5();
        $sum_x3x4 = $this->Data_masyarakat->sum_x3x4();
        $sum_x3x5 = $this->Data_masyarakat->sum_x3x5();
        $sum_x4x5 = $this->Data_masyarakat->sum_x4x5();

        $sum_x1_kuadrat = $this->Data_masyarakat->sum_x1_kuadrat();
        $sum_x2_kuadrat = $this->Data_masyarakat->sum_x2_kuadrat();
        $sum_x3_kuadrat = $this->Data_masyarakat->sum_x3_kuadrat();
        $sum_x4_kuadrat = $this->Data_masyarakat->sum_x4_kuadrat();
        $sum_x5_kuadrat = $this->Data_masyarakat->sum_x5_kuadrat();

        $matriks_a = array(
            array($count_all_data, $sum_x1['x1'], $sum_x2['x2'], $sum_x3['x3'], $sum_x4['x4'], $sum_x5['x5']),
            array($sum_x1['x1'], $sum_x1_kuadrat['x1_kuadrat'], $sum_x1x2['x1x2'], $sum_x1x3['x1x3'], $sum_x1x4['x1x4'], $sum_x1x5['x1x5']),
            array($sum_x2['x2'], $sum_x1x2['x1x2'], $sum_x2_kuadrat['x2_kuadrat'], $sum_x2x3['x2x3'], $sum_x2x4['x2x4'], $sum_x2x5['x2x5']),
            array($sum_x3['x3'], $sum_x1x3['x1x3'], $sum_x2x3['x2x3'], $sum_x3_kuadrat['x3_kuadrat'], $sum_x3x4['x3x4'], $sum_x3x5['x3x5']),
            array($sum_x4['x4'], $sum_x1x4['x1x4'], $sum_x2x4['x2x4'], $sum_x3x4['x3x4'], $sum_x4_kuadrat['x4_kuadrat'], $sum_x4x5['x4x5']),
            array($sum_x5['x5'], $sum_x1x5['x1x5'], $sum_x2x5['x2x5'], $sum_x3x5['x3x5'], $sum_x4x5['x4x5'], $sum_x5_kuadrat['x5_kuadrat'])
        );

        $matriks_a1 = array(
            array($sum_y['y'], $sum_x1['x1'], $sum_x2['x2'], $sum_x3['x3'], $sum_x4['x4'], $sum_x5['x5']),
            array($sum_x1_y['x1y'], $sum_x1_kuadrat['x1_kuadrat'], $sum_x1x2['x1x2'], $sum_x1x3['x1x3'], $sum_x1x4['x1x4'], $sum_x1x5['x1x5']),
            array($sum_x2_y['x2y'], $sum_x1x2['x1x2'], $sum_x2_kuadrat['x2_kuadrat'], $sum_x2x3['x2x3'], $sum_x2x4['x2x4'], $sum_x2x5['x2x5']),
            array($sum_x3_y['x3y'], $sum_x1x3['x1x3'], $sum_x2x3['x2x3'], $sum_x3_kuadrat['x3_kuadrat'], $sum_x3x4['x3x4'], $sum_x3x5['x3x5']),
            array($sum_x4_y['x4y'], $sum_x1x4['x1x4'], $sum_x2x4['x2x4'], $sum_x3x4['x3x4'], $sum_x4_kuadrat['x4_kuadrat'], $sum_x4x5['x4x5']),
            array($sum_x5_y['x5y'], $sum_x1x5['x1x5'], $sum_x2x5['x2x5'], $sum_x3x5['x3x5'], $sum_x4x5['x4x5'], $sum_x5_kuadrat['x5_kuadrat'])
        );

        $matriks_a2 = array(
            array($count_all_data, $sum_y['y'], $sum_x2['x2'], $sum_x3['x3'], $sum_x4['x4'], $sum_x5['x5']),
            array($sum_x1['x1'], $sum_x1_y['x1y'], $sum_x1x2['x1x2'], $sum_x1x3['x1x3'], $sum_x1x4['x1x4'], $sum_x1x5['x1x5']),
            array($sum_x2['x2'], $sum_x2_y['x2y'], $sum_x2_kuadrat['x2_kuadrat'], $sum_x2x3['x2x3'], $sum_x2x4['x2x4'], $sum_x2x5['x2x5']),
            array($sum_x3['3'], $sum_x3_y['x3y'], $sum_x2x3['x2x3'], $sum_x3_kuadrat['x3_kuadrat'], $sum_x3x4['x3x4'], $sum_x3x5['x3x5']),
            array($sum_x4['x4'], $sum_x4_y['x4y'], $sum_x2x4['x2x4'], $sum_x3x4['x3x4'], $sum_x4_kuadrat['x4_kuadrat'], $sum_x4x5['x4x5']),
            array($sum_x5['x5'], $sum_x5_y['x5y'], $sum_x2x5['x2x5'], $sum_x3x5['x3x5'], $sum_x4x5['x4x5'], $sum_x5_kuadrat['x5_kuadrat'])
        );

        $matriks_a3 = array(
            array($count_all_data, $sum_x1['x1'], $sum_y['y'], $sum_x3['x3'], $sum_x4['x4'], $sum_x5['x5']),
            array($sum_x1['x1'], $sum_x1_kuadrat['x1_kuadrat'], $sum_x1_y['x1y'], $sum_x1x3['x1x3'], $sum_x1x4['x1x4'], $sum_x1x5['x1x5']),
            array($sum_x2['x2'], $sum_x1x2['x1x2'], $sum_x2_y['x2y'], $sum_x2x3['x2x3'], $sum_x2x4['x2x4'], $sum_x2x5['x2x5']),
            array($sum_x3['x3'], $sum_x1x3['x1x3'], $sum_x3_y['x3y'], $sum_x3_kuadrat['x3_kuadrat'], $sum_x3x4['x3x4'], $sum_x3x5['x3x5']),
            array($sum_x4['x4'], $sum_x1x4['x1x4'], $sum_x4_y['x4y'], $sum_x3x4['x3x4'], $sum_x4_kuadrat['x4_kuadrat'], $sum_x4x5['x4x5']),
            array($sum_x5['x5'], $sum_x1x5['x1x5'], $sum_x5_y['x5y'], $sum_x3x5['x3x5'], $sum_x4x5['x4x5'], $sum_x5_kuadrat['x5_kuadrat'])
        );

        $matriks_a4 = array(
            array($count_all_data, $sum_x1['x1'], $sum_x2['x2'], $sum_y['y'], $sum_x4['x4'], $sum_x5['x5']),
            array($sum_x1['x1'], $sum_x1_kuadrat['x1_kuadrat'], $sum_x1x2['x1x2'], $sum_x1_y['x1y'], $sum_x1x4['x1x4'], $sum_x1x5['x1x5']),
            array($sum_x2['x2'], $sum_x1x2['x1x2'], $sum_x2_kuadrat['x2_kuadrat'], $sum_x2_y['x2y'], $sum_x2x4['x2x4'], $sum_x2x5['x2x5']),
            array($sum_x3['x3'], $sum_x1x3['x1x3'], $sum_x2x3['x2x3'], $sum_x3_y['x3y'], $sum_x3x4['x3x4'], $sum_x3x5['x3x5']),
            array($sum_x4['x4'], $sum_x1x4['x1x4'], $sum_x2x4['x2x4'], $sum_x4_y['x4y'], $sum_x4_kuadrat['x4_kuadrat'], $sum_x4x5['x4x5']),
            array($sum_x5['x5'], $sum_x1x5['x1x5'], $sum_x2x5['x2x5'], $sum_x5_y['x5y'], $sum_x4x5['x4x5'], $sum_x5_kuadrat['x5_kuadrat'])
        );

        $matriks_a5 = array(
            array($count_all_data, $sum_x1['x1'], $sum_x2['x2'], $sum_x3['x3'], $sum_y['y'], $sum_x5['x5']),
            array($sum_x1['x1'], $sum_x1_kuadrat['x1_kuadrat'], $sum_x1x2['x1x2'],  $sum_x1x3['x1x3'], $sum_x1_y['x1y'], $sum_x1x5['x1x5']),
            array($sum_x2['x2'], $sum_x1x2['x1x2'], $sum_x2_kuadrat['x2_kuadrat'],  $sum_x2x3['x2x3'], $sum_x2_y['x2y'], $sum_x2x5['x2x5']),
            array($sum_x3['x3'], $sum_x1x3['x1x3'], $sum_x2x3['x2x3'],  $sum_x3_kuadrat['x3_kuadrat'], $sum_x3_y['x3y'], $sum_x3x5['x3x5']),
            array($sum_x4['x4'], $sum_x1x4['x1x4'], $sum_x2x4['x2x4'], $sum_x3x4['x3x4'], $sum_x4_y['x4y'], $sum_x4x5['x4x5']),
            array($sum_x5['x5'], $sum_x1x5['x1x5'], $sum_x2x5['x2x5'],  $sum_x3x5['x3x5'], $sum_x5_y['x5y'], $sum_x5_kuadrat['x5_kuadrat'])
        );

        $matriks_a6 = array(
            array($count_all_data, $sum_x1['x1'], $sum_x2['x2'], $sum_x3['x3'], $sum_x4['x4'], $sum_y['y']),
            array($sum_x1['x1'], $sum_x1_kuadrat['x1_kuadrat'], $sum_x1x2['x1x2'], $sum_x1x3['x1x3'], $sum_x1x4['x1x4'], $sum_x1_y['x1y']),
            array($sum_x2['x2'], $sum_x1x2['x1x2'], $sum_x2_kuadrat['x2_kuadrat'], $sum_x2x3['x2x3'], $sum_x2x4['x2x4'], $sum_x2_y['x2y']),
            array($sum_x3['x3'], $sum_x1x3['x1x3'], $sum_x2x3['x2x3'],  $sum_x3_kuadrat['x3_kuadrat'],  $sum_x3x4['x3x4'], $sum_x3_y['x3y']),
            array($sum_x4['x4'], $sum_x1x4['x1x4'], $sum_x2x4['x2x4'], $sum_x3x4['x3x4'], $sum_x4_kuadrat['x4_kuadrat'], $sum_x4_y['x4y']),
            array($sum_x5['x5'], $sum_x1x5['x1x5'], $sum_x2x5['x2x5'],  $sum_x3x5['x3x5'], $sum_x4x5['x4x5'], $sum_x5_y['x5y'])
        );

        // for ($row = 0; $row < 6; $row++) {
        //     for ($col = 0; $col < 6; $col++) {
        //         echo "<tr>";
        //         echo "<td>" . $matriks_a[$row][$col] . "</td>";
        //         echo "</tr>";
        //     }
        //     echo "<br />";
        // }

        // $matriks_H = array($sum_y, $sum_x1_y, $sum_x2_y, $sum_x3_y, $sum_x4_y, $sum_x5_y);


        var_dump($matriks_a6);
        die;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/side_bar');
        $this->load->view('admin/perhitungan', $data);
        $this->load->view('templates/footer', $data);
    }
}
