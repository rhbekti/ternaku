<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Peternak extends CI_Model
{
    function get_json()
    {
        $this->datatables->select('idfarm,namafarm,alamatfarm,notelpfarm,nosiup,koperasi.namakoperasi,kelompok.namakelompok');
        $this->datatables->from('farm');
        $this->datatables->join('koperasi','farm.kodekoperasi = koperasi.kodekoperasi',);
        $this->datatables->join('kelompok','kelompok.kodekelompok = farm.kodekelompok','left');
        $this->datatables->add_column('detail','<a href="javascript:void(0);" class="detail_data btn btn-info" data-idfarm="$1">Detail</a>','idfarm');
        return $this->datatables->generate();
    }
    
}