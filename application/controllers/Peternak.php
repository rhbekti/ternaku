<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Peternak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('datatables');
        $this->load->model(array('M_Peternak'));
        $this->session->set_userdata('menu','peternak');
    }
    public function index()
    {
        $data['judul'] = "Data Peternak";
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Admin/peternak/v_peternak',$data);
        $this->load->view('template/footer');
        $this->load->view('Admin/peternak/dta_peternak');
    }
    public function tampil_data()
    {
        header("Content-Type: application/json");
        echo $this->M_Peternak->get_json();
    }
} 