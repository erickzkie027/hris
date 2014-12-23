<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pds_forms_model extends CI_Model 
{
	public $validation_rules; 			  // variable to hold rules from validation helper
	public $validation_settings = array(); // variable to hold specific validation rules 
	public $return_data = array();  

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('validations');
		$this->validation_rules = validations();

		$this->load->library('form_validation');
	}

	public function validate_inputs($post_data_array, $config)
	{
		$counter = 0;

		foreach($post_data_array as $post_data)
		{
			$this->return_data = $this->validate_input($post_data, $config, $counter);

	      	$counter++;
	    }

	    return $this->return_data;
	}

	public function validate_input($post_data, $config, $counter = 0)
	{
		$_POST = $post_data;

		$form_validation = new CI_Form_validation();
		$form_validation->set_rules($config);

		if($form_validation->run() === FALSE)
      	{
  			$this->return_data["errors"][$counter] = $form_validation->error_string();
  			$this->return_data["success"] = FALSE;
      	}
      	else
      		$this->return_data["success"] = TRUE;

      	return $this->return_data;
	}

	public function validate_personal_info($personal_info)
	{
		foreach($personal_info as $key => $value)
		{
			array_push($this->validation_settings, $this->validation_rules[$key]);
		}
		
		//set validation
		// array_push(
		// 	$this->validation_settings,
		// 	$this->validation_rules["surname"],
		// 	$this->validation_rules["first_name"],
		// 	$this->validation_rules["middle_name"],
		// 	$this->validation_rules["date_of_birth"],
		// 	$this->validation_rules["place_of_birth"],
		// 	$this->validation_rules["citizenship"],
		// 	$this->validation_rules["residential_address"],
		// 	$this->validation_rules["residential_zip_code"],
		// 	$this->validation_rules["permanent_address"],
		// 	$this->validation_rules["permanent_zip_code"],
		// 	$this->validation_rules["email"],
		// 	$this->validation_rules["height"]
		// );

		$run_validation = $this->validate_input($personal_info, $this->validation_settings);

		return $run_validation;
	}

}