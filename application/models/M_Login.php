<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Login extends CI_Model
{
    public function proses($post)
    {
        $this->db->select('*');
        $this->db->from('web_user');
        $this->db->where('user_username',$post['username']);
        $this->db->where('user_password',sha1($post['password']));
        $hasil = $this->db->get();
        return $hasil;
    }
    function auth()
    {
        $data = [
            'user_nama' => $this->input->post('nama'),
            'user_username' => $this->input->post('username'),
            'level_id' => '5',
            'gambar' => 'default.jpg',
            'user_password' => sha1($this->input->post('pass1'))
        ];
        $this->db->insert('web_user',$data);
    }
}