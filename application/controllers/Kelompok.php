<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kelompok extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('datatables');
        $this->load->model('M_Kelompok');
        $this->session->set_userdata('menu','kelompok');
    }
    public function index()
    {
        $data['judul'] = "Data Kelompok";
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Admin/kelompok/v_kelompok',$data);
        $this->load->view('template/footer');
        $this->load->view('Admin/kelompok/dta_kelompok');
    }
    public function tampil_data()
    {
        header("Content-Type: application/json");
        echo $this->M_Kelompok->get_json();
    }
}