<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Seminar_Proposal extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        }
		$this->load->model("seminar_model");
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data["seminar"] = $this->seminar_model->getAll();
		$seminar_mhs = $this->seminar_model;
        $this->load->view("seminar/v_seminar_proposal", $data);
	}

	public function isi_jadwal_sidang()
	{
	    $seminar_mhs = $this->seminar_model;
	    $validation = $this->form_validation;
	    $validation->set_rules($seminar_mhs->rules());
    
	    if ($validation->run()) {
		$seminar_mhs->save();
		$this->session->set_flashdata('success', 'Berhasil disimpan');
	    }
    
	    $this->load->view("sidang/v_isi_jadwal_sidang");
	}
}
