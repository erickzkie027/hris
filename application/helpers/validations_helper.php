<?php

if ( ! function_exists('validations'))
{
	function validations()
	{
		$validations = array(
		   	"surname" => array(
		         'field'   => 'surname', 
		         'label'   => 'Surname', 
		         'rules'   => 'required|alpha'
		     ),
		   	"first_name" => array(
		         'field'   => 'first_name', 
		         'label'   => 'First Name', 
		         'rules'   => 'required|alpha'
		    ),
		   	"middle_name" => array(
		         'field'   => 'middle_name', 
		         'label'   => 'Middle Name', 
		         'rules'   => 'required|alpha'
		    ),
		   	"name_extension" => array(
		         'field'   => 'name_extension', 
		         'label'   => 'Name Extension', 
		         'rules'   => 'trim'
		    ),
		   	"date_of_birth" => array(
		         'field'   => 'date_of_birth', 
		         'label'   => 'Date of Birth', 
		         'rules'   => 'required'
		    ),
		   	"place_of_birth" => array(
		         'field'   => 'place_of_birth', 
		         'label'   => 'Place of Birth', 
		         'rules'   => 'required'
		    ),
		   	"gender" => array(
		         'field'   => 'gender', 
		         'label'   => 'Gender', 
		         'rules'   => 'trim'
		    ),
		   	"civil_status" => array(
		         'field'   => 'civil_status', 
		         'label'   => 'Civil Status', 
		         'rules'   => 'trim'
		    ),
		   	"citizenship" => array(
		         'field'   => 'citizenship', 
		         'label'   => 'Citizenship', 
		         'rules'   => 'required'
		    ),
		   	"residential_address" => array(
		         'field'   => 'residential_address', 
		         'label'   => 'Residential Address', 
		         'rules'   => 'required'
		    ),
		   	"permanent_address" => array(
		         'field'   => 'permanent_address', 
		         'label'   => 'Permanent Address', 
		         'rules'   => 'required'
		    ),
		   	"residential_zip_code" => array(
		         'field'   => 'residential_zip_code', 
		         'label'   => 'Residential Zip Code', 
		         'rules'   => 'required'
		    ),
		   	"permanent_zip_code" => array(
		         'field'   => 'permanent_zip_code', 
		         'label'   => 'Permanent Zip Code', 
		         'rules'   => 'required'
		    ),
		   	"permanent_telephone_number" => array(
		         'field'   => 'permanent_telephone_number', 
		         'label'   => 'Permanent Telephone number', 
		         'rules'   => 'trim'
		    ),
		   	"residential_telephone_number" => array(
		         'field'   => 'residential_telephone_number', 
		         'label'   => 'Residential Telephone number', 
		         'rules'   => 'trim'
		    ),
		   	"email_address" => array(
		         'field'   => 'email_address', 
		         'label'   => 'Email Address', 
		         'rules'   => 'valid_email'
		    ),
		    "height" => array(
		         'field'   => 'height', 
		         'label'   => 'Height', 
		         'rules'   => 'trim'
		    ),
		    "weight" => array(
		         'field'   => 'weight', 
		         'label'   => 'Weight', 
		         'rules'   => 'trim'
		    ),
		    "blood_type" => array(
		         'field'   => 'blood_type', 
		         'label'   => 'Blood type', 
		         'rules'   => 'trim'
		    ),
		    "cellphone_number" => array(
		         'field'   => 'cellphone_number', 
		         'label'   => 'Cellphone number', 
		         'rules'   => 'trim'
		    ),
		    "gsis_id" => array(
		         'field'   => 'gsis_id', 
		         'label'   => 'GSIS number', 
		         'rules'   => 'trim'
		    ),
		    "philhealth_id" => array(
		         'field'   => 'philhealth_id', 
		         'label'   => 'Philhealth Number', 
		         'rules'   => 'trim'
		    ),
		    "sss_id" => array(
		         'field'   => 'sss_id', 
		         'label'   => 'SSS number', 
		         'rules'   => 'trim'
		    ),
		    "pagibig_id" => array(
		         'field'   => 'pagibig_id', 
		         'label'   => 'Pagibig number', 
		         'rules'   => 'trim'
		    ),
		    "agency_employee_number" => array(
		         'field'   => 'agency_employee_number', 
		         'label'   => 'Agency Employee Number', 
		         'rules'   => 'trim'
		    ),
		    "tin_number" => array(
		         'field'   => 'tin_number', 
		         'label'   => 'Tin Number', 
		         'rules'   => 'trim'
		    )
		);

		return $validations;
	}
}
//end of validations helper