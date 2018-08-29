<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Session_checking {
	public function __construct() {
		$CI =& get_instance();
		$this->session= $CI->session;
	}
	
	public function cek_user(){
		if($this->session->userdata('username') == ""){
			redirect(base_url(''));
		}
		
	}
	
	public function getSession(){
		$this->trans['username']		=$this->session->userdata('username');
		$this->trans['namaUser']		=$this->session->userdata('nama_user');
		$this->trans['codeGroupAktif']	=$this->session->userdata('group_userAktif');
		$this->trans['namaGroupAktif']	=$this->session->userdata('group_nameAktif');
		return $this->trans;
	}
	
	
	
}

?>
