<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Pengguna extends CI_Model
{
    function get()
    {
        $id = $this->input->post('user_id');
        $this->db->where('user_id',$id);
        $hasil = $this->db->get('web_user');
        return $hasil;
        // $this->db->join('web_level lev','lev.level_id = t.level_id');
        // $this->db->get('web_user t');
    }
    function get_json()
    {
        $this->datatables->select('web_user.user_id,web_user.user_nama,web_level.level_id,web_level.level_nama');
        $this->datatables->from('web_user');
        $this->datatables->join('web_level', 'web_level.level_id = web_user.level_id');
        // $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_pengguna btn btn-warning" data-user_id="$1">Edit</a>  <a href="javascript:void(0);" class="hapus_pengguna btn btn-danger" data-user_id="$1">Delete</a>','user_id');
        $this->datatables->add_column('detail', '<form action="'.site_url('/Pengguna/cetak_pengguna').'"method="post">
                                                    <input type="hidden" value="$1" name="user_id">
                                                    <button type="submit" name="submit" class="btn btn-info">Print</button>
                                                </form>','user_id,user_nama');
        return $this->datatables->generate();
    }
    function delete_pengguna($id)
    {
        $this->db->where('user_id',$id);
        $this->db->delete('web_user');
    }
}