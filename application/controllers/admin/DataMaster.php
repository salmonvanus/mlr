<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataMaster extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('Data_admin');
        $this->load->model('Data_masyarakat');

        $this->load->helper(array('file', 'url', 'form'));
        $this->load->library(array('form_validation', 'Csvimport'));

        if (!($this->session->userdata('username'))) {
            redirect('Login');
        }
    }

    // Menampilkan Halaman Awal Admin
    public function index()
    {
        $data['username']   = $this->session->userdata('username');
        $data['title']      = 'Data Master';
        $data['title_name'] = 'Data Master';
        $data['user']       = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['footer']     = ' <span class="text-muted d-none d-sm-inline-block float-right"></span>';
        $data['id']         = $this->session->userdata('id');
        $id_admin           = $data['id'];
        $data['profile']    = $this->Data_admin->show_profile($id_admin);

        $data['masyarakat'] = $this->Data_masyarakat->show_data();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/side_bar');
        $this->load->view('admin/datamaster', $data);
        $this->load->view('templates/footer', $data);
    }

    public function import_csv()
    {
        // $this->load->library('Csvimport');
        //Check file is uploaded in tmp folder
        if (is_uploaded_file($_FILES['file']['tmp_name'])) {
            //validate whether uploaded file is a csv file
            $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
            $mime = get_mime_by_extension($_FILES['file']['name']);
            $fileArr = explode('.', $_FILES['file']['name']);
            $ext = end($fileArr);
            if (($ext == 'csv') && in_array($mime, $csvMimes)) {
                $file = $_FILES['file']['tmp_name'];
                $csvData = $this->csvimport->get_array($file);

                $headerArr = array("Usia", "Jenis Kelamin", "Pekerjaan", "X1", "X2", "X3", "X4", "X5");
                if (!empty($csvData)) {
                    //Validate CSV headers
                    $csvHeaders = array_keys($csvData[0]);
                    $headerMatched = 1;
                    foreach ($headerArr as $header) {
                        if (!in_array(trim($header), $csvHeaders)) {
                            $headerMatched = 0;
                        }
                    }
                    if ($headerMatched == 0) {
                        $this->session->set_flashdata("error_msg", "CSV headers are not matched.");
                        redirect('admin/DataMaster');
                    } else {
                        foreach ($csvData as $row) {
                            $employee_data = array(
                                "usia" => $row['Usia'],
                                "jenis_kelamin" => $row['Jenis Kelamin'],
                                "pekerjaan" => $row['Pekerjaan'],
                                "x1" => $row['X1'],
                                // "x1" => $row['X1'] = str_replace(",", ".", $row['X1']),
                                "x2" => $row['X2'],
                                "x3" => $row['X3'],
                                "x4" => $row['X4'],
                                "x5" => $row['X5']

                            );
                            var_dump($employee_data);
                            $table_name = "masyarakat";
                            $this->Data_masyarakat->save($table_name, $employee_data);
                        }
                        $this->session->set_flashdata("success_msg", "CSV File imported successfully.");
                        redirect('admin/DataMaster');
                    }
                }
            } else {
                $this->session->set_flashdata("error_msg", "Please select CSV file only.");
                redirect('admin/DataMaster');
            }
        } else {
            $this->session->set_flashdata("error_msg", "Please select a CSV file to upload.");
            redirect('admin/DataMaster');
        }
    }
}
