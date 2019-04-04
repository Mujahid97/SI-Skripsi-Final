<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Seminar_model extends CI_Model
{
    private $_table = "seminar";

    public $nrp_mhs;
    public $nama_mhs;
    public $tema_seminar;
    public $tanggal_seminar;
    public $waktu_mulai_seminar;
    public $waktu_selesai_seminar;
    

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        $this->db->get($this->_table)->result();
    }
    
    public function getById($nrp_mhs)
    {
        return $this->db->get_where($this->_table, ["nrp_mhs" => $nrp_mhs])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nrp_mhs = $post["nrp_mhs"];
        $this->nama_mhs = $post["nama_mhs"];
        $this->tema_seminar = $post["tema_seminar"];
        $this->tanggal_seminar = $post["tanggal_seminar"];
        $this->waktu_mulai_seminar = $post["waktu_mulai_seminar"];
        $this->waktu_selesai_seminar = $post["waktu_selesai_seminar"];
        $this->db->insert($this->_table, $this);
    }

    public function edit()
    {
        $post = $this->input->post();
        $this->nrp_mhs = $post["nrp_mhs"];
        $this->nama_mhs = $post["nama_mhs"];
        $this->tema_seminar = $post["tema_seminar"];
        $this->tanggal_seminar = $post["tanggal_seminar"];
        $this->waktu_mulai_seminar = $post["waktu_mulai_seminar"];
        $this->waktu_selesai_seminar = $post["waktu_selesai_seminar"];
        $this->db->update($this->_table, $this, array('nrp_mhs' => $post['nrp_mhs']));
    }

    public function delete($nrp_mhs)
    {
		$this->db->delete($this->_table, array("nrp_mhs" => $nrp_mhs));
	}
	
}
