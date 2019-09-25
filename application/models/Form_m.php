<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Form_m extends CI_Model
{
    
    public function get($id = null)
    {
        $this->db->from('form');
        if($id != null){
            $this->db->where('pap_id', $id);
        }
        $query = $this->db->get();
        return $query;  

    }

    public function del($id)
    {
        $this->db->where('pap_id',$id);
        $this->db->delete('form');        
    }   

   
    public function add($post)
    {
        $params = [
            'nama_enumerator' => $post ['name_enum'],
            'nomor_enumerator' => $post ['nomor_enum'],
            'nama_kabupaten' => $post ['na_kab'],
            'kecamatan' => $post ['kecamatan'],
            'desa' => $post ['desa'],
            'kampung' => $post ['kampung'],
            'nama_kk' => $post ['name_kk'],
            'usia_kk' => $post ['usia_kk'],
            'nama_responden' => $post ['name_responden'],
            'usia_responden' => $post ['usia_responden'],
            'jenis_kelamin' => implode(',', $post['jk']),
            'nomor_res' => $post ['nomor_res'],
            'agama_res' => $post ['agama_res'],
            'lama_tinggal' => $post ['lama_tinggal']
            
        ];
        $this->db->insert('form', $params);
    }
    public function edit($post)
    {
        $params = [
            'nama_enumerator' => $post ['name_enum'],
            'nomor_enumerator' => $post ['nomor_enum'],
            'nama_kabupaten' => $post ['na_kab'],
            'kecamatan' => $post ['kecamatan'],
            'desa' => $post ['desa'],
            'kampung' => $post ['kampung'],
            'nama_kk' => $post ['name_kk'],
            'usia_kk' => $post ['usia_kk'],
            'nama_responden' => $post ['name_responden'],
            'usia_responden' => $post ['usia_responden'],            
            'jenis_kelamin' => implode(',', $post['jk']),
            'nomor_res' => $post ['nomor_res'],
            'agama_res' => $post ['agama_res']
        ];
        $this->db->where('pap_id', $post['id']);
        $this->db->update('form', $params);
    }

}