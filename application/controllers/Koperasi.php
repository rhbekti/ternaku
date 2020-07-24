<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koperasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('datatables');
        $this->load->model('M_Koperasi');
        $this->session->set_userdata('menu','koperasi');
    }
	public function index()
	{
        $data['judul'] = "Data koperasi";
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Admin/koperasi/v_koperasi',$data);
        $this->load->view('template/footer');
        $this->load->view('Admin/koperasi/dta_koperasi');
    }
    public function tampil_data()
	{
		header('Content-Type: application/json');
		echo $this->M_Koperasi->get_json();
    }
    public function tambahdata()
    {
        $data['judul'] = "Tambah Data koperasi";
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Admin/koperasi/v_tambah',$data);
        $this->load->view('template/footer');
        $this->load->view('template/ender');
    }
    public function simpan()
    {
        $this->M_Koperasi->insert();
        redirect('/Koperasi');
    }
}
