<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class validation_model extends CI_Model
{
	public function validateuser($input)
	{
		$username = $this->security->xss_clean($input['username']);
		$password = $this->security->xss_clean($input['password']);
		$sess_array = array();

		$qr = $this->db->query("SELECT f.faculty_id, CONCAT(lname, ', ', fname, ' ', mname) AS faculty_name, a.account_id, a.account_type, a.image_path
								FROM account a JOIN faculty f
								ON a.faculty_id = f.faculty_id
								WHERE a.account_id = '$username' AND a.password = '$password'"); 

		if ($qr->num_rows() > 0) 
		{	   
			$this->load->library('session');
			$this->session->set_userdata(array(
						'USERID'	 => $qr->result()[0]->faculty_id,
                        'FACULTYID'  => $qr->result()[0]->account_id,
                        'USERTYPE'   => $qr->result()[0]->account_type,
                        'NAME'       => $qr->result()[0]->faculty_name,
                        'IMAGE' 	 => $qr->result()[0]->image_path,
                ));
			$sess_array['IsError']=0;	
			$sess_array['url'] = base_url('Maintenance');	
		}
		else
		{
			$sess_array['IsError']=1;
		}
		return $sess_array;
	}

	public function change_pass()
	{
		$output = '';

		$password = $this->security->xss_clean($this->input->post('password'));

		if($this->db->where('account_id', $this->session->userdata('FACULTYID'))
					->update('account', array('password' => $password)))
		{
			$output = "SUCCESS";
		}
		else
		{
			$output = "FAILURE";
		}

		return $output;
	}

}

?>