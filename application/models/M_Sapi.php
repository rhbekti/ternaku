<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Sapi extends CI_Model
{
    function get_json()
    {
        $this->datatables->select('idsapi,tagsapi,namasapi,farm.namafarm as nmfarm,bangsasapi.namabangsa as nmbangsa,status.statusnama as nmstatus,kelaminternak.nmkelamin');
        $this->datatables->from('sapi');
        $this->datatables->join('farm','farm.idfarm = sapi.idfarm');
        $this->datatables->join('bangsasapi','bangsasapi.idbangsa = sapi.idbangsa');
        $this->datatables->join('status','status.statusid = sapi.status');
        $this->datatables->join('kelaminternak','kelaminternak.idkelamin = sapi.kelamin');
        $this->datatables->add_column('detail','<a href="javascript:void(0);" class="detail_data btn btn-info" data-idsapi="$1">Detail</a>','idsapi');
        return $this->datatables->generate();
    }
    
}