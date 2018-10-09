<?php
class Users extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model("user_model","login");
		if(!empty($_SESSION['id']))
			redirect('accesscontrols');
	}
	public function login(){

		if($_POST){
			$result = $this->login->validate_user($_POST);
			if(!empty($result)){
				$data=[
					'id' => $result->id,
					'username'=>$result->username
				];
				$this->session->set_userdata($data);
				redirect('accesscontrols');
			}else{
				$this->session->set_flashdata('flash_data', 'Username or password is wrong!');
				redirect('users/login');
			}
		}
		$this->load->view("users/login");
		
		
	}
	

}

  ?>