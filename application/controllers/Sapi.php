<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sapi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('datatables');
        $this->load->model(array('M_Sapi'));
        $this->session->set_userdata('menu','ternak');
        $this->session->set_userdata('submenu','sapi');
    }
	public function index()
	{
        $data['judul'] = "Data Sapi";
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
		$this->load->view('Admin/sapi/v_sapi',$data);
        $this->load->view('template/footer');
        $this->load->view('Admin/sapi/dta_sapi');
    }
    function tampil_data()
    {
        header('Content-Type:application/json');
        echo $this->M_Sapi->get_json();
    }
}
