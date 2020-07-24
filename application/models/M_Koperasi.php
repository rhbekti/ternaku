<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Koperasi extends CI_Model
{
    function get_json()
    {
        $this->datatables->select('koperasi.kodekoperasi,koperasi.namakoperasi,koperasi.alamatkoperasi,wil_propinsi.namapropinsi as propinsi,wil_kabupaten.namakabupaten as kabupaten,wil_kecamatan.namakecamatan as kecamatan');
        $this->datatables->from('koperasi');
        $this->datatables->join('wil_propinsi', 'wil_propinsi.kodepropinsi = koperasi.kodepropinsi');
        $this->datatables->join('wil_kabupaten', 'wil_kabupaten.kodepropinsi = koperasi.kodepropinsi
                                                AND wil_kabupaten.kodekabupaten = koperasi.kodekabupaten');
        $this->datatables->join('wil_kecamatan', 'wil_kecamatan.kodepropinsi = koperasi.kodepropinsi
                                                AND wil_kecamatan.kodekabupaten = koperasi.kodekabupaten
                                                AND wil_kecamatan.kodekecamatan = koperasi.kodekecamatan');
        $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_pengguna btn btn-warning" data-kodekoperasi="$1">Edit</a>  <a href="javascript:void(0);" class="hapus_pengguna btn btn-danger" data-kodekoperasi="$1">Delete</a>','kodekoperasi');
        $this->datatables->add_column('detail', '<a href="javascript:void(0);" class="hapus_pengguna btn btn-info" data-kodekoperasi="$1" data-namakoperasi="$2">Detail</>','kodekoperasi,namakoperasi');
        // $data = $this->datatables->get();
        return $this->datatables->generate();
    }
    function insert()
    {
        $data = [
            'kodekoperasi' => htmlspecialchars($this->input->post('kodekoperasi')),
            'namakoperasi' => htmlspecialchars($this->input->post('namakoperasi')),
            'alamatkoperasi' => htmlspecialchars($this->input->post('alamatkoperasi')),
            'notelpkoperasi' => $this->input->post('notlp'),
            'kodepropinsi' => $this->input->post('kodeprovinsi'),
            'kodekabupaten' => $this->input->post('kodekabupaten'),
            'kodekecamatan' => $this->input->post('kodekecamatan'),
            'user_id' => $this->input->post('user_id')
        ];
        $this->db->insert('koperasi',$data);
    }
}