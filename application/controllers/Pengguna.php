<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('datatables');
		$this->load->model(array('M_Pengguna'));
		$this->session->set_userdata('menu','pengguna');
	}
	public function index()
	{
		//mengecek user apakah sudah login
		belum_login();
		// $data['rs'] = $this->M_Pengguna->get_all();
		// $data['rs_level'] = $this->M_userLevel->get_all();
		$data['judul'] = "Data Pengguna";
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('Admin/pengguna/v_pengguna',$data);
		$this->load->view('template/footer');
		$this->load->view('Admin/Pengguna/dta_pengguna');
	}
	public function tampil_data()
	{
		header('Content-Type: application/json');
		echo $this->M_Pengguna->get_json();
	}
	public function simpan()
	{
		$this->M_Pengguna->insert_pengguna();
		redirect('/Pengguna');
	}
	public function update()
	{
		$this->M_Pengguna->update_pengguna();
		redirect('/Pengguna');
	}
	public function hapus()
	{
		$id = $this->input->post('user_id');
		$this->M_Pengguna->delete_pengguna($id);
		redirect('/Pengguna');
	}
	public function cetak_pengguna()
	{
		$id = $this->input->post('user_id');
		$data['row'] = $this->M_Pengguna->get($id)->row();
		$html = $this->load->view('Admin/pengguna/cetak_pengguna',$data,true);
		$this->pdf->PDFprint($html,'kartu pengguna'.$data['row']->user_id,'A4','landscape');
	}
}
