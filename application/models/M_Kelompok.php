<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Kelompok extends CI_Model
{
    function get_json()
    {
        $this->datatables->select('kodekelompok,namakelompok,alamatkelompok,notelpkelompok');
        $this->datatables->from('kelompok');
        $this->datatables->add_column('view','<a class="edit_data btn btn-warning" data-kodekelompok="$1">Edit</a> <a class="edit_data btn btn-danger" data-kodekelompok="$1">Hapus</a>','kodekelompok');
        return $this->datatables->generate();
    }
}