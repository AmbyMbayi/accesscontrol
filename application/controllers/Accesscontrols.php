<?php 
class Accesscontrols extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("Accesscontrol_model");
	}
	
	public function index(){
 		$this->load->view("accesscontrols_view", array());
	}
	public function ajax_list(){
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		$list = $this->Accesscontrol_model->get_list();

		$data = array();

		foreach($list->result() as $l){
			$data[]= array(
				$l->USERID,
				$l->username,
				$l->devicename,
				$l->date,
				$l->time
			);
		}
		$output = array(
			"draw"=> $draw,
			"recordsTotal" => $list->num_rows(),
			"recordsFiltered"=>$list->num_rows(),
			"data"=>$data
		);
		echo json_encode($output);
		exit();
	}
}
	


 ?>