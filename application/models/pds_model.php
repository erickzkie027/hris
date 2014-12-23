<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("pds_forms_model.php");

class Pds_model extends Pds_forms_model 
{
	public function insert_data($table,$data)
	{
		if ($table == 'employees') 
		{
			$personal_info_data['csc_id'] = '';
			$personal_info_data = elements(array('surname','first_name','middle_name','name_extension','date_of_birth','place_of_birth','gender','civil_status','citizenship','height','weight','blood_type','gsis_id','pagibig_id','philhealth_id','sss_id','tin_number','cellphone_number','email_address','agency_employee_number'), $data);
			$personal_info_data['photo_url'] = ''; 
			$personal_info_data['created_at'] = date('Y-m-d H:i:s');
			
			$this->db->insert('employees',$personal_info_data);
			$emp_id = $this->db->insert_id();
			$this->session->set_userdata('employee_id', $emp_id );
		}	

		if ($table == 'addresses') 
		{	
			// 1 table only for address
			// employee_id, permanent_address, permanent_telephone_number, permanent_zipcode, 
			// residential_address, residential_telephone_number, residential_zipcode, created_at, updated_at

			$employee_id = $this->session->userdata('employee_id');

			$address_info = array(
								array(
									'employee_id' => $employee_id,
									'address_type' => RESIDENTIAL,
									'address' => $data['residential_address'],
									'telephone_number' => $data['residential_telephone_number'],
									'zip_code' => $data['residential_zip_code'],
									'created_at' => date('Y-m-d H:i:s')									),

								array(
									'employee_id' => $employee_id,
									'address_type' => PERMANENT,
									'address' => $data['permanent_address'],
									'telephone_number' => $data['permanent_telephone_number'],
									'zip_code' => $data['permanent_zip_code'],
									'created_at' => date('Y-m-d H:i:s')
									)
								);

			$this->db->insert_batch('addresses', $address_info); 

		}
	}
}