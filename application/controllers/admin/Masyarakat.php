<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masyarakat extends CI_Controller
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
        $data['title']      = 'Data Mayarakat';
        $data['title_name'] = 'Data Masyarakat';
        $data['user']       = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['footer']     = ' <span class="text-muted d-none d-sm-inline-block float-right"></span>';
        $data['id']         = $this->session->userdata('id');
        $id_admin           = $data['id'];
        $data['profile']    = $this->Data_admin->show_profile($id_admin);

        $data['masyarakat'] = $this->Data_masyarakat->show_data();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/side_bar');
        $this->load->view('admin/masyarakat', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah_data()
    {
        $data['usia']       = $this->input->post('add_usia');
        $data['jenis_kelamin']   = $this->input->post('add_jenis_kelamin');
        $data['pekerjaan']  = $this->input->post('add_pekerjaan');
        $data['x1']  = $this->input->post('add_x1');
        $data['x2']  = $this->input->post('add_x2');
        $data['x3']  = $this->input->post('add_x3');
        $data['x4']  = $this->input->post('add_x4');
        $data['x5']  = $this->input->post('add_x5');

        $y = $data['x1'] + $data['x2'] + $data['x3'] + $data['x4'] + $data['x5'];
        $data['y'] = $y / 5;
        if ($data['y'] >= 1 && $data['y'] <= 1.7) {
            $data['y'] = 1;
        } else if ($data['y'] >= 1.8 && $data['y'] <= 2.5) {
            $data['y'] = 2;
        } else if ($data['y'] >= 2.6 && $data['y'] <= 3.3) {
            $data['y'] = 3;
        } else if ($data['y'] >= 3.4 && $data['y'] <= 4.1) {
            $data['y'] = 4;
        } else if ($data['y'] >= 4.2 && $data['y'] <= 5) {
            $data['y'] = 5;
        }

        $y_value = $data['y'];
        $x1      = $data['x1'];
        $x2      = $data['x2'];
        $x3      = $data['x3'];
        $x4      = $data['x4'];
        $x5      = $data['x5'];

        // echo "<br />" . $x1 . "<br />";
        // echo $x2 . "<br />";
        // echo $x3 . "<br />";
        // echo $x4 . "<br />";
        // echo $x4 . "<br />";
        // echo $x5 . "<br />";
        // echo $y_value;

        $data['x1y']        = $y_value * $x1;
        $data['x2y']        = $y_value * $x2;
        $data['x3y']        = $y_value * $x3;
        $data['x4y']        = $y_value * $x4;
        $data['x5y']        = $y_value * $x5;
        $data['x1x2']       = $x1 * $x2;
        $data['x1x3']       = $x1 * $x3;
        $data['x1x4']       = $x1 * $x4;
        $data['x1x5']       = $x1 * $x5;
        $data['x2x3']       = $x2 * $x3;
        $data['x2x4']       = $x2 * $x4;
        $data['x2x5']       = $x2 * $x5;
        $data['x3x4']       = $x3 * $x4;
        $data['x3x5']       = $x3 * $x5;
        $data['x4x5']       = $x4 * $x5;
        $data['x1_kuadrat'] = pow($x1, 2);
        $data['x2_kuadrat'] = pow($x2, 2);
        $data['x3_kuadrat'] = pow($x3, 2);
        $data['x4_kuadrat'] = pow($x4, 2);
        $data['x5_kuadrat'] = pow($x5, 2);
        // var_dump($data['x1_kuadrat']);
        // die;

        $this->Data_masyarakat->insert($data);
        redirect('admin/Masyarakat');
    }
}
