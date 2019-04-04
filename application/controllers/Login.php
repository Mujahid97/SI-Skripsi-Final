<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=FALSE){
			$url=base_url(home);
			redirect($url);
	}
		$this->load->model('login_model');
	}

	function index(){
		$this->load->view('v_login_1');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_dosen=$this->login_model->auth_dosen($username,$password);

        if($cek_dosen->num_rows() > 0){ //jika login sebagai dosen
						$data=$cek_dosen->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level']=='1'){ //Akses kaprodi
		            $this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_id',$data['nip']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('home');

						 }
						 elseif ($data['level']=='2') { //Akses Dosen
							$this->session->set_userdata('akses','2');
							$this->session->set_userdata('ses_id',$data['nip']);
							$this->session->set_userdata('ses_nama',$data['nama']);
							redirect('home');
						 }
						 else { //Akses TIM RMK
							$this->session->set_userdata('akses','3');
							$this->session->set_userdata('ses_id',$data['nip']);
							$this->session->set_userdata('ses_nama',$data['nama']);
							redirect('home');
						 }

				}
				else{ //jika login sebagai mahasiswa
					$cek_mahasiswa=$this->login_model->auth_mahasiswa($username,$password);
					if($cek_mahasiswa->num_rows() > 0){
							$data=$cek_mahasiswa->row_array();
        			$this->session->set_userdata('masuk',TRUE);
							$this->session->set_userdata('akses','4');
							$this->session->set_userdata('ses_id',$data['nim']);
							$this->session->set_userdata('ses_nama',$data['nama']);
							redirect('home');
					}else{  // jika username dan password tidak ditemukan atau salah
							$url=base_url();
							echo $this->session->set_flashdata('msg','Username Atau Password Salah');
							redirect($url);
					}
        }

    }

}
