<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("main.php");

class Pds_forms extends Main {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pds_model');
	}

	public function process_personal_info()
	{
		//var_dump($this->input->post()); 	

		$validate_data = $this->pds_model->validate_personal_info($this->input->post());

		if ($validate_data['success'] === FALSE) 
		{
		 		print_r($validate_data['errors']);
	 	} 	
	 	else
	 		$this->pds_model->insert_data('employees', $this->input->post());
	 		$this->pds_model->insert_data('addresses', $this->input->post());
	}
}