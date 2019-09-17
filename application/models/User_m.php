<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_m extends CI_Model
{

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }

    
    public function get($id = null)
    {
        $this->db->from('user');
        if($id != null){
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;  

    }

    public function add($post){
        $params['username'] = $post['username'];
        $params['name'] = $post['fullname'];
        $params['password'] = sha1($post['password']);
        $params['level'] = $post['level'];
        $this->db->insert('user',$params);
    }

    
    public function edit($post){
        $params['username'] = $post['username'];
        $params['name'] = $post['fullname'];
        if(!empty($post['password'])){
            $params['password'] = sha1($post['password']);
        }
        $params['password'] = sha1($post['password']);
        $params['level'] = $post['level'];
        $this->db->where('user_id',$post['user_id']);
        $this->db->update('user',$params);
    }

    public function del($id)
    {
        $this->db->where('user_id',$id);
        $this->db->delete('user');
    }
}
