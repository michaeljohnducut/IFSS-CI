<?php

class savedata_model extends CI_Model
{
	public function add_faculty($input = array(), $file)
	{
		$output = array();
		$img = '';

		//required
		$faculty_id = $this->security->xss_clean($this->input->post('fact_id')); //account id
        $faculty_type = $this->security->xss_clean($this->input->post('fact_type'));
        $faculty_dept = $this->security->xss_clean($this->input->post('fact_dept'));
        $faculty_sname = $this->security->xss_clean($this->input->post('fact_sname'));
        $faculty_fname = $this->security->xss_clean($this->input->post('fact_fname'));
        $faculty_email = $this->security->xss_clean($this->input->post('fact_email'));
        $faculty_contact = $this->security->xss_clean($this->input->post('fact_contact_no'));
        $faculty_birthdate = $this->security->xss_clean($this->input->post('fact_date_birth'));
        $faculty_gender = $this->security->xss_clean($this->input->post('rad_gender'));

        if(isset($_POST['fact_mname']))
        {
            $faculty_mname = $this->input->post('fact_mname');
        }
        else
        {
            $faculty_mname = '';
        }

        if(isset($_POST['fact_civil_status']))
        {
            $faculty_civilstatus = $this->input->post('fact_civil_status');
        }
        else
        {
            $faculty_civilstatus = '';
        }

        if(isset($_POST['fact_citizen']))
        {
            $faculty_citizen = $this->input->post('fact_citizen');
        }
        else
        {
            $faculty_citizen = '';
        }

        if(isset($_POST['fact_res_address']))
        {
            $faculty_resiAddress = $this->input->post('fact_res_address');
        }
        else
        {
            $faculty_resiAddress = '';
        }

        if(isset($_POST['fact_zip_res']))
        {
            $faculty_resZip = $this->input->post('fact_zip_res');
        }
        else
        {
            $faculty_resZip = '';
        }

        if(isset($_POST['fact_address']))
        {
            $faculty_permaAddress = $this->input->post('fact_address');
        }
        else
        {
            $faculty_permaAddress = '';
        }

        if(isset($_POST['fact_zip_address']))
        {
            $faculty_permaZip = $this->input->post('fact_zip_address');
        }
        else
        {
            $faculty_permaZip = '';
        }

        if($file != '')
        {
        	$img = $file;
        }
        else
        {
        	$img = 'undefined';
        }

		$query = $this->db->where('account_id', $faculty_id)
							->get('account');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			$data = array(
					'lname' => $faculty_sname,
					'fname' => $faculty_fname,
					'mname' => $faculty_mname,
					'email' => $faculty_email,
					'contact_no' => $faculty_contact,
					'date_of_birth' => $faculty_birthdate,
					'gender' => $faculty_gender,
					'civil_status' => $faculty_civilstatus,
					'citizenship' => $faculty_citizen,
					'residential_address' => $faculty_resiAddress,
					'rzip_code' => $faculty_resZip,
					'permanent_address' => $faculty_permaAddress,
					'pzip_code' => $faculty_permaZip,
					'faculty_type' => $faculty_type,
					'dept' => $faculty_dept,
					'status' => 1,
					);

			if($this->db->insert('faculty', $data))
			{
				$last_id = $this->db->insert_id();

				$output = array('mes' => 'INSERTED', 'id' => $last_id);

				$result = $this->db->query("SELECT SUBSTRING(MD5(RAND()) FROM 1 FOR 6) AS password");
				$password = $result->row()->password;

				$data = array(
					'account_id' => $faculty_id, 
					'password' => $password,
					'faculty_id'=> $last_id,
					'image_path' => $img,
					'status' => 1
					);

				if($this->db->insert('account', $data))
				{
					$output = array('mes' => 'INSERTED', 'id' => $last_id);
				}
				else
				{
					$output = array('mes' => 'NOT INSERTED');
				}
			}
			else
			{
				$output = array('mes' => 'NOT INSERTED');
			}
		}
		else
		{
			$output = array('mes' => 'THE DATA IS ALREADY INSERTED');
		} // end condition of faculty and account inserted

		return $output;
	}

	public function add_other_data()
	{
		$last_id = $this->security->xss_clean($this->input->post('main_id'));

		if(isset($_POST['fac_spec']))
        {
            $fac_spec = $this->input->post('fac_spec');
            foreach ($fac_spec as $fs) 
            { 
                if($this->db->insert('faculty_spec', array('spec_id' => $fs, 'faculty_id' => $last_id)))
                {
                    $output = "INSERTED";
                }

                else
                {
                    $output = "NOT INSERTED";
                }
            }
        }// end of faculty_spec insert

        if(isset($_POST['educ_lvl']))
        {       
            $educ_lvl = $this->input->post('educ_lvl');
            $educ_school = $this->input->post('educ_school');
            $educ_degree = $this->input->post('educ_degree');
            $educ_yr = $this->input->post('educ_yr');

            $i = 0;

			foreach($educ_lvl as $e)
			{
				$data = array(
					'level' => $educ_lvl[$i],
					'name_of_school' => $educ_school[$i],
					'basic_educ_degree' => $educ_degree[$i],
			 		'yr_graduated' => $educ_yr[$i],
					'faculty_id' => $last_id,
			 		'status' => 1
				);

				$this->db->insert('educ_bg', $data);

				$i++;
			}
        } //end of educ insert
	}

	public function edit_faculty($input = array(), $file)
	{
		$output = array();

		//required
		$main_id = $this->security->xss_clean($this->input->post('faculty_id_hid'));
		$faculty_id = $this->security->xss_clean($this->input->post('fact_id')); //account id
        $faculty_type = $this->security->xss_clean($this->input->post('fact_type'));
        $faculty_dept = $this->security->xss_clean($this->input->post('fact_dept'));
        $faculty_sname = $this->security->xss_clean($this->input->post('fact_sname'));
        $faculty_fname = $this->security->xss_clean($this->input->post('fact_fname'));
        $faculty_email = $this->security->xss_clean($this->input->post('fact_email'));
        $faculty_contact = $this->security->xss_clean($this->input->post('fact_contact_no'));
        $faculty_birthdate = $this->security->xss_clean($this->input->post('fact_date_birth'));
        $faculty_gender = $this->security->xss_clean($this->input->post('rad_gender'));

        if(isset($_POST['fact_mname']))
        {
            $faculty_mname = $this->input->post('fact_mname');
        }
        else
        {
            $faculty_mname = '';
        }

        if(isset($_POST['fact_civil_status']))
        {
            $faculty_civilstatus = $this->input->post('fact_civil_status');
        }
        else
        {
            $faculty_civilstatus = '';
        }

        if(isset($_POST['fact_citizen']))
        {
            $faculty_citizen = $this->input->post('fact_citizen');
        }
        else
        {
            $faculty_citizen = '';
        }

        if(isset($_POST['fact_res_address']))
        {
            $faculty_resiAddress = $this->input->post('fact_res_address');
        }
        else
        {
            $faculty_resiAddress = '';
        }

        if(isset($_POST['fact_zip_res']))
        {
            $faculty_resZip = $this->input->post('fact_zip_res');
        }
        else
        {
            $faculty_resZip = '';
        }

        if(isset($_POST['fact_address']))
        {
            $faculty_permaAddress = $this->input->post('fact_address');
        }
        else
        {
            $faculty_permaAddress = '';
        }

        if(isset($_POST['fact_zip_address']))
        {
            $faculty_permaZip = $this->input->post('fact_zip_address');
        }
        else
        {
            $faculty_permaZip = '';
        }

			$data = array(
					'lname' => $faculty_sname,
					'fname' => $faculty_fname,
					'mname' => $faculty_mname,
					'email' => $faculty_email,
					'contact_no' => $faculty_contact,
					'date_of_birth' => $faculty_birthdate,
					'gender' => $faculty_gender,
					'civil_status' => $faculty_civilstatus,
					'citizenship' => $faculty_citizen,
					'residential_address' => $faculty_resiAddress,
					'rzip_code' => $faculty_resZip,
					'permanent_address' => $faculty_permaAddress,
					'pzip_code' => $faculty_permaZip,
					'faculty_type' => $faculty_type,
					'dept' => $faculty_dept,
					'status' => 1,
					);

			if($this->db->where('faculty_id', $main_id)
						->update('faculty', $data))
			{
				$output = array('mes' => 'UPDATED');

				if($file != '')
				{
					if($this->db->where('faculty_id', $main_id)
						->update('account', array('account_id' => $faculty_id, 'image_path' => $file)))
					{
						$output = array('mes' => 'UPDATED');
					}
					else
					{
						$output = array('mes' => 'NOT UPDATED');
					}
				}
				else
				{
					if($this->db->where('faculty_id', $main_id)
						->update('account', array('account_id' => $faculty_id)))
					{
						$output = array('mes' => 'UPDATED');
					}
					else
					{
						$output = array('mes' => 'NOT UPDATED');
					}
				}
			}
			else
			{
				$output = array('mes' => 'NOT UPDATED');
			}

		return $output;
	}

	public function edit_faculty_profile($input = array(), $file)
	{
		$output = array();
		$img = '';

		//required
		$main_id = $this->security->xss_clean($this->input->post('faculty_id_hid'));
        $faculty_sname = $this->security->xss_clean($this->input->post('fact_sname'));
        $faculty_fname = $this->security->xss_clean($this->input->post('fact_fname'));
        $faculty_email = $this->security->xss_clean($this->input->post('fact_email'));
        $faculty_contact = $this->security->xss_clean($this->input->post('fact_contact_no'));
        $faculty_birthdate = $this->security->xss_clean($this->input->post('fact_date_birth'));
        $faculty_gender = $this->security->xss_clean($this->input->post('rad_gender'));

        if(isset($_POST['fact_mname']))
        {
            $faculty_mname = $this->input->post('fact_mname');
        }
        else
        {
            $faculty_mname = '';
        }

        if(isset($_POST['fact_civil_status']))
        {
            $faculty_civilstatus = $this->input->post('fact_civil_status');
        }
        else
        {
            $faculty_civilstatus = '';
        }

        if(isset($_POST['fact_citizen']))
        {
            $faculty_citizen = $this->input->post('fact_citizen');
        }
        else
        {
            $faculty_citizen = '';
        }

        if(isset($_POST['fact_res_address']))
        {
            $faculty_resiAddress = $this->input->post('fact_res_address');
        }
        else
        {
            $faculty_resiAddress = '';
        }

        if(isset($_POST['fact_zip_res']))
        {
            $faculty_resZip = $this->input->post('fact_zip_res');
        }
        else
        {
            $faculty_resZip = '';
        }

        if(isset($_POST['fact_address']))
        {
            $faculty_permaAddress = $this->input->post('fact_address');
        }
        else
        {
            $faculty_permaAddress = '';
        }

        if(isset($_POST['fact_zip_address']))
        {
            $faculty_permaZip = $this->input->post('fact_zip_address');
        }
        else
        {
            $faculty_permaZip = '';
        }

			$data = array(
					'lname' => $faculty_sname,
					'fname' => $faculty_fname,
					'mname' => $faculty_mname,
					'email' => $faculty_email,
					'contact_no' => $faculty_contact,
					'date_of_birth' => $faculty_birthdate,
					'gender' => $faculty_gender,
					'civil_status' => $faculty_civilstatus,
					'citizenship' => $faculty_citizen,
					'residential_address' => $faculty_resiAddress,
					'rzip_code' => $faculty_resZip,
					'permanent_address' => $faculty_permaAddress,
					'pzip_code' => $faculty_permaZip,
					'status' => 1,
					);

			if($this->db->where('faculty_id', $main_id)
						->update('faculty', $data))
			{
				if($file != '')
				{
					if($this->db->where('faculty_id', $main_id)
						->update('account', array('image_path' => $file)))
					{
						$output = array('mes' => 'UPDATED', 'image' => $file);
						$img = $file;
					}
					else
					{
						$output = array('mes' => 'NOT UPDATED');
					}
				}
				else
				{
					$query =  $this->db->select("image_path")
								->where('faculty_id', $main_id)
								->get('account');

					foreach ($query->result() as $r) 
					{
						$output = array('mes' => 'UPDATED', 'image' => $r->image_path);
						$img = $r->image_path;
					}	
				}
			}
			else
			{
				$output = array('mes' => 'NOT UPDATED');
			}

		$this->load->library('session');
		$this->session->unset_userdata('IMAGE');
		$this->session->set_userdata('IMAGE', $img);

		return $output;
	}

	public function edit_profile_educbg()
	{
		$main_id = $this->security->xss_clean($this->input->post('main_id'));

		if(isset($_POST['educ_lvl']))
        {       
            $educ_lvl = $this->input->post('educ_lvl');
            $educ_school = $this->input->post('educ_school');
            $educ_degree = $this->input->post('educ_degree');
            $educ_yr = $this->input->post('educ_yr');

            $i = 0;

			foreach($educ_lvl as $e)
			{
				$data = array(
					'level' => $educ_lvl[$i],
					'name_of_school' => $educ_school[$i],
					'basic_educ_degree' => $educ_degree[$i],
			 		'yr_graduated' => $educ_yr[$i],
					'faculty_id' => $main_id,
			 		'status' => 1
				);

				$this->db->insert('educ_bg', $data);

				$i++;
			}
        } //end of educ insert
	}

	public function edit_educbg()
	{
		$output = '';

		$educbg_id_hid = $this->security->xss_clean($this->input->post('educbg_id_hid'));
		$educ_lvl_edit = $this->security->xss_clean($this->input->post('educ_lvl_edit'));
		$educ_school_edit = $this->security->xss_clean($this->input->post('educ_school_edit'));
		$educ_degree_edit = $this->security->xss_clean($this->input->post('educ_degree_edit'));
		$educ_yr_edit = $this->security->xss_clean($this->input->post('educ_yr_edit'));

		$query = $this->db->group_start()
								->where('level', $educ_lvl_edit)
								->where('name_of_school', $educ_school_edit)
								->where('basic_educ_degree', $educ_degree_edit)
								->where('yr_graduated', $educ_yr_edit)
								->where('educ_bg_id', $educbg_id_hid)
								->where('status', 1)
							->group_end()
							->get('educ_bg');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			$data = array(
					'level' => $educ_lvl_edit, 
					'name_of_school' => $educ_school_edit,
					'basic_educ_degree'=> $educ_degree_edit,
					'yr_graduated' => $educ_yr_edit
					);

			if($this->db->where('educ_bg_id', $educbg_id_hid)
						->update('educ_bg', $data))
			{
				$output = 'UPDATED';
				// $output = $this->db->select('faculty_id')
				// 					->where('educ_bg_id', $educbg_id_hid)
				// 					->get('educ_bg');
			}
			else
			{
				$output = 'NOT UPDATED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}

	public function toggle_spec()
	{
		if($this->input->post('act') == 'add')
		{
			$output = '';

            $spec = $this->security->xss_clean($this->input->post('spec'));
            $fac_id = $this->security->xss_clean($this->input->post('fac_id'));

            $data = array(
					'spec_id' => $spec,
					'faculty_id' => $fac_id
					);

            if($this->db->insert('faculty_spec', $data)) 
            { 
                $output =  "INSERTED";
            }
            else
            {
                $output = "NOT INSERTED";
            }
              
            return $output;
		}

		if($this->input->post('act') == 'delete')
		{
			$output = '';

            $spec = $this->security->xss_clean($this->input->post('spec'));
            $fac_id = $this->security->xss_clean($this->input->post('fac_id'));


            if($this->db->where('spec_id', $spec)
            			->where('faculty_id', $fac_id)
            			->delete('faculty_spec')) 
            { 
                $output =  "DELETED";
            }
            else
            {
                $output = "NOT DELETED";
            }
              
            return $output;
		}
	}

	public function add_course()
	{
		$output = '';

		$course_code = $this->security->xss_clean($this->input->post('course_code'));
		$course_desc = $this->security->xss_clean($this->input->post('course_desc'));
		$course_dept = $this->security->xss_clean($this->input->post('course_dept'));

		$query = $this->db->group_start()
								->where('course_code', $course_code)
								->where('course_desc', $course_desc)
								->where('dept', $course_dept)
								->where('status', 1)
							->group_end()
							->get('course');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			$data = array(
					'course_code' => $course_code,
					'course_desc' => $course_desc,
					'dept' => $course_dept,
					'status' => 1
					);

			if($this->db->insert('course', $data))
			{
				$output = 'INSERTED';
			}
			else
			{
				$output = 'NOT INSERTED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}
	
	public function edit_course()
	{
		$output = '';

		$main_id = $this->security->xss_clean($this->input->post('course_id_hid'));
		$course_code = $this->security->xss_clean($this->input->post('edit_course_code'));
		$course_desc = $this->security->xss_clean($this->input->post('edit_course_desc'));
		$course_dept = $this->security->xss_clean($this->input->post('edit_course_dept'));

		$query = $this->db->group_start()
								->where('course_code', $course_code)
								->where('course_desc', $course_desc)
								->where('dept', $course_dept)
								->where('status', 1)
							->group_end()
							->get('course');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			$data = array(
					'course_code' => $course_code,
					'course_desc' => $course_desc,
					'dept' => $course_dept
					);

			if($this->db->where('course_id', $main_id)
						->update('course', $data))
			{
				$output = 'UPDATED';
			}
			else
			{
				$output = 'NOT UPDATED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}

	public function add_department()
	{
		$output = '';

		$dept_code = $this->security->xss_clean($this->input->post('dept_code'));
		$dept_desc = $this->security->xss_clean($this->input->post('dept_desc'));

		$query = $this->db->group_start()
								->where('dept_code', $dept_code)
								->where('dept_desc', $dept_desc)
								->where('status', 1)
							->group_end()
							->get('department');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			$data = array(
					'dept_code' => $dept_code,
					'dept_desc' => $dept_desc,
					'status' => 1
					);

			if($this->db->insert('department', $data))
			{
				$output = 'INSERTED';
			}
			else
			{
				$output = 'NOT INSERTED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}

	public function edit_department()
	{
		$output = '';

		$main_id = $this->security->xss_clean($this->input->post('dept_id_hid'));
		$dept_code = $this->security->xss_clean($this->input->post('edit_dept_code'));
		$dept_desc = $this->security->xss_clean($this->input->post('edit_dept_desc'));

		$query = $this->db->group_start()
								->where('dept_code', $dept_code)
								->where('dept_desc', $dept_desc)
								->where('status', 1)
							->group_end()
							->get('department');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			$data = array(
					'dept_code' => $dept_code,
					'dept_desc' => $dept_desc
					);

			if($this->db->where('dept_id', $main_id)
						->update('department', $data))
			{
				$output = 'UPDATED';
			}
			else
			{
				$output = 'NOT UPDATED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}

	public function add_subject()
	{
		$output = '';

		$subj_code = $this->security->xss_clean($this->input->post('subj_code'));
        $subj_desc = $this->security->xss_clean($this->input->post('subj_desc'));
        $units = $this->security->xss_clean($this->input->post('units'));
        $lec_hrs = $this->security->xss_clean($this->input->post('lec_hrs'));
        $lab_hrs = $this->security->xss_clean($this->input->post('lab_hrs'));
        $major = $this->security->xss_clean($this->input->post('major'));

        if(isset($_POST['spec']))
        {
            $spec = $this->security->xss_clean($this->input->post('spec'));
        }
        else
        {
        	$spec = NULL;
        }

		$query = $this->db->group_start()
								->where('subj_code', $subj_code)
								->where('subj_desc', $subj_desc)
								->where('units', $units)
								->where('lab_hrs', $lab_hrs)
								->where('lec_hrs', $lec_hrs)
								->where('isMajor', $major)
							->group_end()
							->get('subject');


		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			$data = array(
					'subj_code' => $subj_code,
					'subj_desc' => $subj_desc,
					'units' => $units,
					'lab_hrs' => $lab_hrs,
					'lec_hrs' => $lec_hrs,
					'specialization' => $spec,
					'isMajor' => $major
					);

			if($this->db->insert('subject', $data))
			{
				$output = 'INSERTED';
			}
			else
			{
				$output = 'NOT INSERTED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}

	public function edit_subject()
	{
		$output = '';

        $main_id = $this->security->xss_clean($this->input->post('subj_id_hid'));
        $subj_code = $this->security->xss_clean($this->input->post('edit_subj_code'));
        $subj_desc = $this->security->xss_clean($this->input->post('edit_subj_desc'));
        $units = $this->security->xss_clean($this->input->post('edit_units'));
        $lec_hrs = $this->security->xss_clean($this->input->post('edit_lec_hrs'));
        $lab_hrs = $this->security->xss_clean($this->input->post('edit_lab_hrs'));
        $major = $this->security->xss_clean($this->input->post('edit_major'));

        if(isset($_POST['edit_spec']))
        {
            $spec = $this->security->xss_clean($this->input->post('edit_spec'));
        }
        else
        {
        	$spec = NULL;
        }

        $query = $this->db->group_start()
								->where('subj_code', $subj_code)
								->where('subj_desc', $subj_desc)
								->where('units', $units)
								->where('lab_hrs', $lab_hrs)
								->where('lec_hrs', $lec_hrs)
								->where('specialization', $spec)
								->where('isMajor', $major)
							->group_end()
							->get('subject');


		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			$data = array(
					'subj_code' => $subj_code,
					'subj_desc' => $subj_desc,
					'units' => $units,
					'lab_hrs' => $lab_hrs,
					'lec_hrs' => $lec_hrs,
					'specialization' => $spec,
					'isMajor' => $major
					);

			if($this->db->where('subj_id', $main_id)
						->update('subject', $data))
			{
				$output = 'UPDATED';
			}
			else
			{
				$output = 'NOT UPDATED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}


	public function toggle_prereq()
	{
		if($this->input->post('act') == 'add')
		{
			$output = '';

            $subj_val = $this->security->xss_clean($this->input->post('subj_val'));
            $subj_id = $this->security->xss_clean($this->input->post('subj_id'));

            $data = array(
					'pre_req_desc' => $subj_val,
					'subj_code' => $subj_id
					);

            if($this->db->insert('pre_requisite', $data)) 
            { 
                $output =  "INSERTED";
            }
            else
            {
                $output = "NOT INSERTED";
            }
              
            return $output;
		}

		if($this->input->post('act') == 'delete')
		{
			$output = '';

            $subj_val = $this->security->xss_clean($this->input->post('subj_val'));
            $subj_id = $this->security->xss_clean($this->input->post('subj_id'));


            if($this->db->delete('pre_requisite', array('subj_code' => $subj_id, 'pre_req_desc' => $subj_val))) 
            { 
                $output =  "DELETED";
            }
            else
            {
                $output = "NOT DELETED";
            }
              
            return $output;
		}
	}

	public function add_prerequisite()
	{
        $prereq = $this->security->xss_clean($this->input->post('prereq'));
        $subj_id = $this->security->xss_clean($this->input->post('subject'));

        $query = $this->db->where('subj_code', $subj_id)
							->get('pre_requisite');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			foreach ($prereq as $p) 
	        { 
	            $data = array(
						'pre_req_desc' => $p,
						'subj_code' => $subj_id
						);

	            if($this->db->insert('pre_requisite', $data))
	            {
	                $output = "INSERTED";
	                // echo "Error: " . $query2 . "<br>" . $conn->error;
	            }

	            else
	            {
	                $output = "NOT INSERTED";
	            }
	        }
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}

	public function add_faculty_type()
	{
		$output = '';

		$fac_type = $this->security->xss_clean($this->input->post('fac_type'));

		$query = $this->db->where('fac_type_desc', $fac_type)
							->get('faculty_type');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			if($this->db->insert('faculty_type', array('fac_type_desc' => $fac_type)))
			{
				$output = 'INSERTED';
			}
			else
			{
				$output = 'NOT INSERTED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}

	public function edit_faculty_type()
	{
		$output = '';

		$id = $this->security->xss_clean($this->input->post('type_code'));
		$fac_type = $this->security->xss_clean($this->input->post('fac_desc'));

		$query = $this->db->where('fac_type_desc', $fac_type)
							->get('faculty_type');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			if($this->db->where('fac_type_id', $id)
					->update('faculty_type', array('fac_type_desc' => $fac_type)))
			{
				$output = 'UPDATED';
			}
			else
			{
				$output = 'NOT UPDATED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}

	public function add_load_limit()
	{
		$output = '';

		$fact_type = $this->security->xss_clean($this->input->post('fact_type'));
        $load_type = $this->security->xss_clean($this->input->post('load_type'));
        $load_limit = $this->security->xss_clean($this->input->post('load_limit'));

		$query = $this->db->group_start()
								->where('fac_type_desc', $fact_type)
								->where('fac_load_desc', $load_type)
								->where('num_hrs', $load_limit)
								->where('status', 1)
						  	->group_end()
							->get('faculty_load_type');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			$data = array(
					'fac_type_desc' => $fact_type,
					'fac_load_desc' => $load_type,
					'num_hrs' => $load_limit,
					'status' => 1
					);

			if($this->db->insert('faculty_load_type', $data))
			{
				$output = 'INSERTED';
			}
			else
			{
				$output = 'NOT INSERTED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}

	public function edit_load_limit()
	{
		$output = '';

		$main_id =  $this->security->xss_clean($this->input->post('limit_id_hid'));
		$fact_type = $this->security->xss_clean($this->input->post('edit_fact_type'));
        $load_type = $this->security->xss_clean($this->input->post('edit_load_type'));
        $load_limit = $this->security->xss_clean($this->input->post('edit_load_limit'));

		$query = $this->db->group_start()
								->where('fac_type_desc', $fact_type)
								->where('fac_load_desc', $load_type)
								->where('num_hrs', $load_limit)
						  	->group_end()
							->get('faculty_load_type');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			$data = array(
					'fac_type_desc' => $fact_type,
					'fac_load_desc' => $load_type,
					'num_hrs' => $load_limit,
					);

			if($this->db->where('load_type_id', $main_id)
					->update('faculty_load_type', $data))
			{
				$output = 'UPDATED';
			}
			else
			{
				$output = 'NOT UPDATED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}

	public function add_specialization()
	{
		$output = '';

		$new_spec = $this->security->xss_clean($this->input->post('new_spec'));

		$query = $this->db->where('spec_desc', $new_spec)
							->get('specialization');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			if($this->db->insert('specialization', array('spec_desc' => $new_spec, 'status' => 1)))
			{
				$output = 'INSERTED';
			}
			else
			{
				$output = 'NOT INSERTED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}

	public function edit_specialization()
	{
		$output = '';

		$main_id = $this->security->xss_clean($this->input->post('spec_id_hid'));
		$edit_spec = $this->security->xss_clean($this->input->post('edit_spec'));

		$query = $this->db->where('spec_desc', $edit_spec)
							->get('specialization');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			if($this->db->where('spec_id', $main_id)
					->update('specialization', array('spec_desc' => $edit_spec)))
			{
				$output = 'UPDATED';
			}
			else
			{
				$output = 'NOT UPDATED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}

	// public function add_acad_yr()
	// {
	// 	$output = '';

	// 	$new_acadyr = $this->security->xss_clean($this->input->post('new_acadyr'));

	// 	$query = $this->db->where('acad_yr_desc', $new_acadyr)
	// 						->get('acad_year');

	// 	$number_filter_row = $query->num_rows();

	// 	if($number_filter_row == 0)
	// 	{
	// 		if($this->db->insert('acad_year', array('acad_yr_desc' => $new_acadyr, 'status' => 1)))
	// 		{
	// 			$output = 'INSERTED';
	// 		}
	// 		else
	// 		{
	// 			$output = 'NOT INSERTED';
	// 		}
	// 	}
	// 	else
	// 	{
	// 		$output = 'THE DATA IS ALREADY INSERTED';
	// 	}

	// 	return $output;
	// }

	// public function edit_acad_yr()
	// {
	// 	$output = '';

	// 	$main_id = $this->security->xss_clean($this->input->post('acadyr_id_hid'));
	// 	$edit_acadyr = $this->security->xss_clean($this->input->post('edit_acadyr'));

	// 	$query = $this->db->where('acad_yr_desc', $edit_acadyr)
	// 						->get('acad_year');

	// 	$number_filter_row = $query->num_rows();

	// 	if($number_filter_row == 0)
	// 	{
	// 		if($this->db->where('acad_yr_id', $main_id)
	// 				->update('acad_year', array('acad_yr_desc' => $edit_acadyr)))
	// 		{
	// 			$output = 'UPDATED';
	// 		}
	// 		else
	// 		{
	// 			$output = 'NOT UPDATED';
	// 		}
	// 	}
	// 	else
	// 	{
	// 		$output = 'THE DATA IS ALREADY INSERTED';
	// 	}

	// 	return $output;
	// }

	public function add_to_curriculum(){

		$output = '';

		$curr_year = $this->security->xss_clean($this->input->post('add_year'));
		$dept = $this->security->xss_clean($this->input->post('edit_dept'));
		$year_lvl = $this->security->xss_clean($this->input->post('edit_yrlvl'));
		$semester = $this->security->xss_clean($this->input->post('edit_sem'));
		$arr_subj = $this->security->xss_clean($this->input->post('edit_subj'));

		$i = 0;

			foreach($arr_subj as $r)
			{
				$data = array(
					'curriculum_yr' => $curr_year,
					'sem' => $semester,
					'year_lvl' => $year_lvl,
					'course' => $dept,
					'subj_code' => $arr_subj[$i]);

				$this->db->insert('curriculum',$data);

				$i++;
			}

			$output = 'INSERTED';

		return $output;
	}

	public function remove_from_curr(){

		$output = "";
		$id = $this->security->xss_clean($this->input->post('id'));

		if($this->db->query("DELETE FROM curriculum
							WHERE curriculum_id = $id"))
			{
				$output = 'DELETED';
			}
			else
			{
				$output = 'NOT DELETED';
			}


		return $output;

	}

	public function reset_used_curr(){

		$output = "";
		$id = $this->security->xss_clean($this->input->post('year_code'));

		if($this->db->query("UPDATE curriculum_year
                SET is_used = 0
                WHERE is_used = 1"))
			{

				if($this->db->query("UPDATE curriculum_year
                SET is_used = 1
                WHERE curr_year_id = $id"))

				{
					$output = 'CHANGED';
				}

				else
				{
					$output = 'NOT  CHANGED';
				}
				
			}

		return $output;

	}


	

	public function add_curriculum_year()
	{
		$output = '';

		$curr_year = $this->security->xss_clean($this->input->post('curr_year'));

		$query = $this->db->where('curr_year_desc', $curr_year)
							->get('curriculum_year');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			if($this->db->insert('curriculum_year', array('curr_year_desc' => $curr_year)))
			{
				$output = 'INSERTED';
			}
			else
			{
				$output = 'NOT INSERTED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}


	public function edit_curriculum_year()
	{
		$output = '';

		$main_id = $this->security->xss_clean($this->input->post('year_code'));
		$year_desc = $this->security->xss_clean($this->input->post('year_desc'));

		$query = $this->db->where('curr_year_desc', $year_desc)
							->get('curriculum_year');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			if($this->db->where('curr_year_id', $main_id)
					->update('curriculum_year', array('curr_year_desc' => $year_desc)))
			{
				$output = 'UPDATED';
			}
			else
			{
				$output = 'NOT UPDATED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}

	public function add_section()
	{
		$output = '';

		 $sec_acad = $this->security->xss_clean($this->input->post('sec_acad'));
  //       $sec_sem = $this->security->xss_clean($this->input->post('sec_sem'));
        $sec_dept = $this->security->xss_clean($this->input->post('sec_dept'));
        $sec_yrlvl = $this->security->xss_clean($this->input->post('sec_yrlvl'));
        $sec_desc = $this->security->xss_clean($this->input->post('sec_desc'));

		$query = $this->db->group_start()
								->where('acad_yr', $sec_acad)
								->where('section_desc', $sec_desc)
								->where('course', $sec_dept)
								->where('year_lvl', $sec_yrlvl)
								->where('status', 1)
						  	->group_end()
							->get('section');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			$data = array(
				    'acad_yr' => $sec_acad,
					'section_desc' => $sec_desc,
					'course' => $sec_dept,
					'year_lvl' => $sec_yrlvl,
					'status' => 1
					);

			if($this->db->insert('section', $data))
			{
				$output = 'INSERTED';
			}
			else
			{
				$output = 'NOT INSERTED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}

	public function edit_section()
	{
		$output = '';

        $main_id = $this->security->xss_clean($this->input->post('section_id_hid'));
		$sec_edit_acad = $this->security->xss_clean($this->input->post('sec_edit_acad'));
  //       $sec_edit_sem = $this->security->xss_clean($this->input->post('sec_edit_sem'));
        $sec_edit_dept = $this->security->xss_clean($this->input->post('sec_edit_dept'));
        $sec_edit_yrlvl = $this->security->xss_clean($this->input->post('sec_edit_yrlvl'));
        $sec_edit_desc = $this->security->xss_clean($this->input->post('sec_edit_desc'));

		$query = $this->db->group_start()
								->where('acad_yr', $sec_edit_acad)
								->where('section_desc', $sec_edit_desc)
								->where('course', $sec_edit_dept)
								->where('year_lvl', $sec_edit_yrlvl)
								->where('status', 1)
						  	->group_end()
							->get('section');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			$data = array(
					'acad_yr' => $sec_edit_acad,
					'section_desc' => $sec_edit_desc,
					'course' => $sec_edit_dept,
					'year_lvl' => $sec_edit_yrlvl,
					'status' => 1
					);

			if($this->db->where('section_id', $main_id)
					->update('section', $data))
			{
				$output = 'UPDATED';
			}
			else
			{
				$output = 'NOT UPDATED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}

	public function add_room()
	{
		$output = '';

		$room_code = $this->security->xss_clean($this->input->post('rm_code'));
		$room_desc = $this->security->xss_clean($this->input->post('rm_desc'));
		$building = $this->security->xss_clean($this->input->post('building'));

		$query = $this->db->group_start()
								->where('room_code', $room_code)
								->where('room_desc', $room_desc)
								->where('building', $building)
								->where('status', 1)
							->group_end()
							->get('room');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			$data = array(
					'room_code' => $room_code,
					'room_desc' => $room_desc,
					'building' => $building,
					'status' => 1
					);

			if($this->db->insert('room', $data))
			{
				$output = 'INSERTED';
			}
			else
			{
				$output = 'NOT INSERTED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}

	public function edit_room()
	{
		$output = '';

		$rm_id = $this->security->xss_clean($this->input->post('room_id_hid'));
		$room_code = $this->security->xss_clean($this->input->post('room_edit_code'));
		$room_desc = $this->security->xss_clean($this->input->post('room_edit_desc'));
		$building = $this->security->xss_clean($this->input->post('edit_building'));

		$query = $this->db->group_start()
								->where('room_code', $room_code)
								->where('room_desc', $room_desc)
								->where('building', $building)
								->where('status', 1)
							->group_end()
							->get('room');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			$data = array(
					'room_code' => $room_code,
					'room_desc' => $room_desc,
					'building' => $building,
					);

			if($this->db->where('room_id', $rm_id)
						->update('room', $data))
			{
				$output = 'UPDATED';
			}
			else
			{
				$output = 'NOT UPDATED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}


	public function add_student_eval()
	{
		$output = '';

		$acad_yr = $this->security->xss_clean($this->input->post('acadyr'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$dept = $this->security->xss_clean($this->input->post('dept'));

		$query = $this->db->group_start()
								->where('acad_yr', $acad_yr)
								->where('sem', $sem)
								->where('dept', $dept)
							->group_end()
							->count_all_results('evaluation');

		//$number_filter_row = $query->count_all_results();

		if($query == 0)
		{
			$path = $_FILES["file"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				$ctr = 0;
				for($row=8; $row<=$highestRow-1; $row++)
				{
					$rating = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
					$interpretation = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
					$faculty = $worksheet->getCellByColumnAndRow(1, $row)->getValue();

					$query = $this->db->query("SELECT faculty_id
												FROM faculty
												WHERE CONCAT(lname, ', ', fname) = '$faculty'
												OR CONCAT(lname, ', ', fname, ' ', mname) = '$faculty'
												OR CONCAT(lname, ', ', fname, ' ', SUBSTR(mname, 1, 1)) = '$faculty'
												OR CONCAT(lname, ', ', fname, ' ', CONCAT(SUBSTR(mname, 1, 1)), '.') = '$faculty'");
										
					$ret = $query->row_array();
					
					if($ret['faculty_id'] == NULL)
					{
						$faculty_id = NULL;
					}
					else
					{
						$faculty_id = $ret['faculty_id'];
					}

					$data[] = array(
						'acad_yr' => $acad_yr,
						'sem' => $sem,
						'rating' =>	$rating,
						'rating_desc' => $interpretation,
						'dept' => $dept,
						'faculty_id' => $faculty_id
					);
				}
			}

			if($this->db->insert_batch('evaluation', $data))
			{
				$output = 'INSERTED';
			}
			else
			{
				$output = 'NOT INSERTED';
				echo $this->db->error();
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}	

	//NEW CODE ADD THIS
	public function edit_eval()
	{
		$output = '';

		$eval_id = $this->security->xss_clean($this->input->post('eval_id'));
		$acad = $this->security->xss_clean($this->input->post('edit_acad'));
		$sem = $this->security->xss_clean($this->input->post('edit_sem'));
		$dept = $this->security->xss_clean($this->input->post('edit_dept'));
		$fac = $this->security->xss_clean($this->input->post('edit_fac'));
		$rating = $this->security->xss_clean($this->input->post('edit_rating'));
		$inter = $this->security->xss_clean($this->input->post('edit_inter'));

		$query = $this->db->group_start()
								->where('acad_yr', $acad)
								->where('sem', $sem)
								->where('rating', $rating)
								->where('rating_desc', $inter)
								->where('dept', $dept)
								->where('faculty_id', $fac)
							->group_end()
							->get('evaluation');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			$data = array(
					'acad_yr' => $acad,
					'sem' => $sem,
					'rating' => $rating,
					'rating_desc' => $inter,
					'course' => $dept,
					'faculty_id' => $fac,
					);

			if($this->db->where('evaluation_id', $eval_id)
						->update('evaluation', $data))
			{
				$output = 'UPDATED';
			}
			else
			{
				$output = 'NOT UPDATED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}

	public function add_service()
	{
		$output = "";
		$sec = $this->security->xss_clean($this->input->post('sec'));
		$sub_desc = $this->security->xss_clean($this->input->post('sub_desc'));
		$sub_code = $this->security->xss_clean($this->input->post('sub_code'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$acadyr = $this->security->xss_clean($this->input->post('acadyr'));

		$sched_day = $this->input->post('sched_day');
        $sched_timein = $this->input->post('sched_timein');
        $sched_timeout = $this->input->post('sched_timeout');
        $sched_room = $this->input->post('sched_room');

        $query = $this->db->group_start()
								->where('acad_yr', $acadyr)
								->where('sem', $sem)
								->where('section', $sec)
								->where('subj_code', $sub_code)
								->where('subj_desc', $sub_desc)
							->group_end()
							->get('services_assign');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			$i = 0;

			foreach($sched_day as $e)
			{
				$data = array(
					'subj_code' => $sub_code,
					'subj_desc' => $sub_desc,
					'section' => $sec,
					'acad_yr' => $acadyr,
					'sem' => $sem,
					'day' => $sched_day[$i],
					'time_start' => $sched_timein[$i],
					'time_end' => $sched_timeout[$i],
			 		'room' => $sched_room[$i],
				);

				$this->db->insert('services_assign', $data);

				$i++;

				$output = 'INSERTED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}

	public function edit_service_sched()
	{
		$output = '';

		$sched_id_hid = $this->security->xss_clean($this->input->post('sched_id_hid'));
		$edit_sched_day = $this->security->xss_clean($this->input->post('edit_sched_day'));
		$edit_sched_timein = $this->security->xss_clean($this->input->post('edit_sched_timein'));
		$edit_sched_timeout = $this->security->xss_clean($this->input->post('edit_sched_timeout'));
		$edit_sched_room = $this->security->xss_clean($this->input->post('edit_sched_room'));
		
		$query = $this->db->group_start()
								->where('day', $edit_sched_day)
								->where('time_start', $edit_sched_timein)
								->where('time_end', $edit_sched_timeout)
								->where('room', $edit_sched_room)
							->group_end()
							->get('services_assign');

		$number_filter_row = $query->num_rows();

		if($number_filter_row == 0)
		{
			$data = array(
					'day' => $edit_sched_day, 
					'time_start' => $edit_sched_timein,
					'time_end'=> $edit_sched_timeout,
					'room' => $edit_sched_room
					);

			if($this->db->where('services_id', $sched_id_hid)
						->update('services_assign', $data))
			{
				$output = 'UPDATED';
			}
			else
			{
				$output = 'NOT UPDATED';
			}
		}
		else
		{
			$output = 'THE DATA IS ALREADY INSERTED';
		}

		return $output;
	}

	public function edit_service()
	{
		$output = '';

		$id = $this->security->xss_clean($this->input->post('service_id_hid'));
		$edit_acadyr = $this->security->xss_clean($this->input->post('edit_acadyr'));
		$edit_sem = $this->security->xss_clean($this->input->post('edit_sem'));
		$edit_sec = $this->security->xss_clean($this->input->post('edit_sec'));
		$edit_sub_code = $this->security->xss_clean($this->input->post('edit_sub_code'));
		$edit_sub_desc = $this->security->xss_clean($this->input->post('edit_sub_desc'));
	
		$query1 = $this->db->select('acad_yr, sem, section, subj_code, subj_desc')
							->where('services_id', $id)
                			->get('services_assign');

        foreach($query1->result() as $r) 
		{
			$acadyr = $r->acad_yr;
			$sem = $r->sem;
			$section = $r->section;
			$subj_code = $r->subj_code;
			$subj_desc = $r->subj_desc;
		}

		$query2 = $this->db->select('services_id')
							->group_start()
								->where('acad_yr', $acadyr)
								->where('sem', $sem)
								->where('section', $section)
								->where('subj_code', $subj_code)
								->where('subj_desc', $subj_desc)
							->group_end()
                			->get('services_assign');

        $number_filter_row = $query2->num_rows();		

        foreach($query2->result() as $s) 
		{
			$service_id = $s->services_id;

			$data = array(
					'acad_yr' => $edit_acadyr, 
					'sem' => $edit_sem,
					'section'=> $edit_sec,
					'subj_code' => $edit_sub_code,
					'subj_desc' => $edit_sub_desc
					);

			if($this->db->where('services_id', $service_id)
						->update('services_assign', $data))
			{
				$output = 'UPDATED';
			}
			else
			{
				$output = 'NOT UPDATED';
			}
		}

		return $output;
	}

	public function delete_service_sched()
	{
		$output = '';

		$id = $this->security->xss_clean($this->input->post('service_sched_id'));

		if($this->db->where('services_id', $id)
					->delete('services_assign'))
		{
			$output = 'DELETED';
		}
		else
		{
			$output = 'NOT DELETED';
		}

		return $output;
	}

	// ==================================================================
	// -------------------------UPDATED 7-11 ----------------------------
	// ==================================================================

	public function add_pref_time(){

		$output = "";
		$day = $this->security->xss_clean($this->input->post('day'));
		$start = $this->security->xss_clean($this->input->post('start'));
		$fac_id = $this->security->xss_clean($this->input->post('fac_id'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		$end = $this->security->xss_clean($this->input->post('end'));

		if($this->db->query("INSERT INTO `preferred_time`(day, start_time, end_time, acad_yr, sem, faculty_id) VALUES ('$day', '$start', '$end', '$acad_year', '$sem', $fac_id)"))
		{
			$output = "INSERTED";
		}
		else
		{
			$output = "NOT INSERTED";
		}

		return $output;

	}

	public function delete_pref_time(){

		$output = "";
		$day = $this->security->xss_clean($this->input->post('day'));
		$start = $this->security->xss_clean($this->input->post('start'));
		$fac_id = $this->security->xss_clean($this->input->post('fac_id'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		$end = $this->security->xss_clean($this->input->post('end'));

		if($this->db->query("DELETE FROM `preferred_time` 
                    WHERE faculty_id = $fac_id 
                    AND day = '$day' 
                    AND start_time = '$start' 
                    AND end_time = '$end'
                    AND acad_yr = '$acad_year' 
                    AND sem = '$sem'"))
		{
			$output = "DELETED";
		}
		else
		{
			$output = "NOT DELETED";
		}

		return $output;

	}

	public function add_pref_subj(){

		$output = "";
		
		$subj_code = $this->security->xss_clean($this->input->post('subj_code'));
		$fac_id = $this->security->xss_clean($this->input->post('fac_id'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		
		if($this->db->query("INSERT INTO `preferred_subj`(acad_yr, sem, subj_code, faculty_id) 
                        VALUES ('$acad_year', '$sem', '$subj_code' , $fac_id)"))
		{
			$output = "INSERTED";
		}
		else
		{
			$output = "NOT INSERTED";
		}

		return $output;

	}

	public function delete_pref_subj(){

		$output = "";
		$subj_code = $this->security->xss_clean($this->input->post('subj_code'));
		$fac_id = $this->security->xss_clean($this->input->post('fac_id'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));

		if($this->db->query("DELETE FROM `preferred_subj` 
                    WHERE faculty_id = $fac_id 
                    AND subj_code = $subj_code
                    AND acad_yr = '$acad_year' 
                    AND sem = '$sem'"))
		{
			$output = "DELETED";
		}
		else
		{
			$output = "NOT DELETED";
		}

		return $output;

	}

	public function delete_pref_time_id(){

		$output = "";
		$id = $this->security->xss_clean($this->input->post('id'));

		if($this->db->query("DELETE FROM `preferred_time` 
			WHERE preferred_time_id = $id"))
			{
				$output = 'DELETED';
			}
			else
			{
				$output = 'NOT DELETED';
			}


		return $output;

	}

	public function add_to_sched(){

		$output = "";
		$temp_room = $this->security->xss_clean($this->input->post('rooms'));
		$temp_start = $this->security->xss_clean($this->input->post('start_time'));
		$temp_end = $this->security->xss_clean($this->input->post('end_time'));
		$temp_day = $this->security->xss_clean($this->input->post('day'));
		$temp_acadyr = $this->security->xss_clean($this->input->post('acad_yr'));
		$temp_sem = $this->security->xss_clean($this->input->post('sem'));
		$temp_load_id = $this->security->xss_clean($this->input->post('load_id'));
		$temp_load = $this->security->xss_clean($this->input->post('load_type'));
		$temp_control = $this->security->xss_clean($this->input->post('control'));
		$split_control = $this->security->xss_clean($this->input->post('s_control'));
		$lab_day = $this->security->xss_clean($this->input->post('lab_day'));


		if($temp_control == 3){

			if(isset($temp_start[0])){
				$data = array(
					'room_id' => $temp_room[0], 
					'time_start' => $temp_start[0], 
					'time_finish' => $temp_end[0],
					'day' => $temp_day[0], 
					'acad_yr' => $temp_acadyr,
					'sem' => $temp_sem,
					'subj_match_id' => $temp_load_id,
					'load_type' => $temp_load);
				
					$this->db->insert('teaching_assign_sched', $data);
				}

				if(isset($temp_start[2])){
				$data = array(
					'room_id' => $temp_room[1], 
					'time_start' => $temp_start[2], 
					'time_finish' => $temp_end[2],
					'day' => $lab_day, 
					'acad_yr' => $temp_acadyr,
					'sem' => $temp_sem,
					'subj_match_id' => $temp_load_id,
					'load_type' => $temp_load);
				
					$this->db->insert('teaching_assign_sched', $data);
				}
		}
		

		else{
			
			if($split_control == 1){
				if(isset($temp_start[0])){
				$data = array(
					'room_id' => $temp_room[0], 
					'time_start' => $temp_start[0], 
					'time_finish' => $temp_end[0],
					'day' => $temp_day[0], 
					'acad_yr' => $temp_acadyr,
					'sem' => $temp_sem,
					'subj_match_id' => $temp_load_id,
					'load_type' => $temp_load);
				
					$this->db->insert('teaching_assign_sched', $data);
				}

				if(isset($temp_start[1])){
				$data = array(
					'room_id' => $temp_room[1], 
					'time_start' => $temp_start[1], 
					'time_finish' => $temp_end[1],
					'day' => $temp_day[1], 
					'acad_yr' => $temp_acadyr,
					'sem' => $temp_sem,
					'subj_match_id' => $temp_load_id,
					'load_type' => $temp_load);
				
					$this->db->insert('teaching_assign_sched', $data);
				}
			}

			else{
				if(isset($temp_start[0])){
				$data = array(
					'room_id' => $temp_room[0], 
					'time_start' => $temp_start[0], 
					'time_finish' => $temp_end[0],
					'day' => $temp_day[0], 
					'acad_yr' => $temp_acadyr,
					'sem' => $temp_sem,
					'subj_match_id' => $temp_load_id,
					'load_type' => $temp_load);
				
					$this->db->insert('teaching_assign_sched', $data);
				}
			}
		}



		$output = 'INSERTED';
			

	return $output;

	}

	public function add_subj_match(){

		$output = "";
		$fac_id = $this->security->xss_clean($this->input->post('fac_id'));
		$subj_id = $this->security->xss_clean($this->input->post('subj_id'));
		$section_id = $this->security->xss_clean($this->input->post('section_id'));
		$acad_yr = $this->security->xss_clean($this->input->post('acad_yr'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$limit = $this->security->xss_clean($this->input->post('limit'));
		$subj_hrs = '';
		$total_load_hrs = '';
		$temp_total_hrs = '';

		$query2 = $this->db->select("SUM(lec_hrs + lab_hrs) AS hrs")
							->where('subj_id', $subj_id)
							->get('subject');

		foreach ($query2->result() as $s) 
		{
			$subj_hrs = $s->hrs;
		}

		$query3 = $this->db->select("SUM(lec_hrs + lab_hrs) AS total_load_hrs")
							->join('subject s ', 'sm.subj_id = s.subj_id')
							->where('faculty_id', $fac_id)
							->get('subject_match sm');

		foreach ($query3->result() as $r) 
		{
			$total_load_hrs = $r->total_load_hrs;
		}

		$temp_total_hrs = $subj_hrs + $total_load_hrs;

		if($total_load_hrs == $limit)
		{
			$output = 'EQUAL';
		}
		else if($temp_total_hrs > $limit)
		{
			$output = 'OVERLOAD';
		}
		else
		{
			if($this->db->query("INSERT INTO `subject_match`(`acad_yr`, `sem`, `subj_id`, `section`, `faculty_id`) VALUES ('$acad_yr','$sem', $subj_id, $section_id, $fac_id)"))
			{
				$output = 'INSERTED';
			}
			else
			{
				$output = 'NOT INSERTED';
			}
		}

		return $output;
	}

	public function delete_match_data()
	{
		$output = array();

		$id = $this->security->xss_clean($this->input->post('match_id'));
		$fac_id = $this->security->xss_clean($this->input->post('fac_id'));

		if($this->db->where('subj_match_id', $id)
					->delete('subject_match'))
		{
			$result = 'DELETED';
		}
		else
		{
			$result = 'NOT DELETED';
		}

		$query2 = $this->db->select("SUM(lec_hrs + lab_hrs) AS total_load_hrs")
							->join('subject s ', 'sm.subj_id = s.subj_id')
							->where('faculty_id', $fac_id)
							->get('subject_match sm');

		foreach ($query2->result() as $s) 
		{
			($s->total_load_hrs == '')?$total_load_hrs = 0:$total_load_hrs = $s->total_load_hrs;
		}

		$output = array('result' => $result, 'total' => $total_load_hrs);

		return $output;
	}

	public function remove_sched(){

		$output = "";
		$id = $this->security->xss_clean($this->input->post('id'));

		if($this->db->query("DELETE 
						FROM teaching_assign_sched 
						WHERE subj_match_id = $id"))
			{
				$output = 'DELETED';
			}
			else
			{
				$output = 'NOT DELETED';
			}


		return $output;

	}

	public function assign_prof(){

		$output = "";
		$id = $this->security->xss_clean($this->input->post('id'));
		$fac_id = $this->security->xss_clean($this->input->post('fac_id'));

		if($this->db->query("UPDATE `services_assign` SET `faculty_id`= $fac_id  WHERE services_id = $id"))
			{
				$output = 'UPDATED';
			}
			else
			{
				$output = 'NOT UPDATED';
			}


		return $output;

	}

	public function minor_first_save(){

		$output = "";
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		$subj_id = $this->security->xss_clean($this->input->post('subj_id'));
		$section_id = $this->security->xss_clean($this->input->post('section_id'));

		if($this->db->query("INSERT INTO subject_match(acad_yr, sem, subj_id, section) 
			VALUES('$acad_year', '$sem', $subj_id, $section_id )"))

			{
				$query = $this->db->select('subj_match_id')
				->where('acad_yr', $acad_year)
				->where('sem', $sem)
				->where('section', $section_id)
				->where('subj_id', $subj_id)
                ->get('subject_match');

					foreach($query->result() as $r) 
					{
						$result = $r->subj_match_id;	
					}
			}

		return $result;

	}

	public function minor_second_save(){

		$output = "";
		$temp_room = $this->security->xss_clean($this->input->post('rooms_minor'));
		$temp_start = $this->security->xss_clean($this->input->post('minor_start'));
		$temp_end = $this->security->xss_clean($this->input->post('minor_end'));
		$temp_day = $this->security->xss_clean($this->input->post('day_minor'));
		$temp_acadyr = $this->security->xss_clean($this->input->post('acad_yr'));
		$temp_sem = $this->security->xss_clean($this->input->post('sem'));
		$match_id = $this->security->xss_clean($this->input->post('match_id'));
		$temp_load = $this->security->xss_clean($this->input->post('load_type'));
		$split_control = $this->security->xss_clean($this->input->post('split_control'));
		$spec_room = $this->security->xss_clean($this->input->post('spec_room'));

			if($split_control == 0)
			{
				if(isset($temp_start[0])){
				$data = array(
					'room_id' => $temp_room[0], 
					'time_start' => $temp_start[0], 
					'time_finish' => $temp_end[0],
					'day' => $temp_day[0], 
					'acad_yr' => $temp_acadyr,
					'sem' => $temp_sem,
					'subj_match_id' => $match_id,
					'load_type' => $temp_load);
				
					$this->db->insert('teaching_assign_sched', $data);
				}
			}
			else
			{
				if(isset($temp_start[0])){
				$data = array(
					'room_id' => $temp_room[0], 
					'time_start' => $temp_start[0], 
					'time_finish' => $temp_end[0],
					'day' => $temp_day[0], 
					'acad_yr' => $temp_acadyr,
					'sem' => $temp_sem,
					'subj_match_id' => $match_id,
					'load_type' => $temp_load);
				
					$this->db->insert('teaching_assign_sched', $data);
				}

				if(isset($temp_start[1])){
				$data = array(
					'room_id' => $spec_room, 
					'time_start' => $temp_start[1], 
					'time_finish' => $temp_end[1],
					'day' => $temp_day[1], 
					'acad_yr' => $temp_acadyr,
					'sem' => $temp_sem,
					'subj_match_id' => $match_id,
					'load_type' => $temp_load);
				
					$this->db->insert('teaching_assign_sched', $data);
				}
			}

		$output = 'SUCCESS';
		return $output;

	}

	public function add_generated_sched(){

		$output = "";
		$temp_room = $this->security->xss_clean($this->input->post('room_id'));
		$temp_start = $this->security->xss_clean($this->input->post('temp_start'));
		$temp_end = $this->security->xss_clean($this->input->post('temp_end'));
		$temp_day = $this->security->xss_clean($this->input->post('temp_day'));
		$temp_acadyr = $this->security->xss_clean($this->input->post('temp_acadyr'));
		$temp_sem = $this->security->xss_clean($this->input->post('temp_sem'));
		$temp_match_id = $this->security->xss_clean($this->input->post('match_id'));
		$temp_load = $this->security->xss_clean($this->input->post('temp_load'));

		$query2 = $this->db->where('ta.time_start > "'.$temp_start.'"
									AND ta.time_start < "'.$temp_end.'"
									AND ta.day = "'.$temp_day.'"
									AND ta.acad_yr = "'.$temp_acadyr.'"
									AND ta.sem = "'.$temp_sem.'"
									AND ta.room_id = '.$temp_room.'
									OR ta.time_finish > "'.$temp_start.'"
									AND ta.time_finish < "'.$temp_end.'"
									AND ta.day = "'.$temp_day.'"
									AND ta.acad_yr = "'.$temp_acadyr.'"
									AND ta.sem = "'.$temp_sem.'"
									AND ta.room_id = '.$temp_room.'
									OR ta.time_start = "'.$temp_start.'"
									AND ta.time_finish = "'.$temp_end.'"
									AND ta.day = "'.$temp_day.'"
									AND ta.acad_yr = "'.$temp_acadyr.'"
									AND ta.sem = "'.$temp_sem.'"
									AND ta.room_id = '.$temp_room.'')
                			->get('teaching_assign_sched ta');

        $number_filter_row = $query2->num_rows(); 
        if ($number_filter_row != 0) {
        	
        	$output = 'NOT INSERTED';	
        }
        else{
        	
        	if($this->db->query("INSERT INTO `teaching_assign_sched`(`room_id`, `time_start`, `time_finish`, `day`, `acad_yr`, `sem`, `subj_match_id`, `load_type`) VALUES ($temp_room, '$temp_start', '$temp_end', '$temp_day', '$temp_acadyr', '$temp_sem', $temp_match_id, '$temp_load')"))
			{
				$output = 'INSERTED';
			}
			else
			{
				$output = 'NOT INSERTED';
			}
        }

		
			
		return $output;
	}

	public function add_other_time(){

		$output = "";
		$acad_yr = $this->security->xss_clean($this->input->post('acad_yr'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$fac_id = $this->security->xss_clean($this->input->post('fac_id'));
		$start_time = $this->security->xss_clean($this->input->post('start_time'));
		$end_time = $this->security->xss_clean($this->input->post('end_time'));
		$day = $this->security->xss_clean($this->input->post('day'));
		$load_type = $this->security->xss_clean($this->input->post('load_type'));

		if($this->db->query("INSERT INTO `other_time_sched`(`time_start`, `time_finish`, `day`, `acad_yr`, `sem`, `faculty_id`, `load_type`) VALUES ('$start_time', '$end_time', '$day', '$acad_yr', '$sem', $fac_id, '$load_type')"))
			{
				$output = 'INSERTED';
			}
			else
			{
				$output = 'NOT INSERTED';
			}
	}

	public function edit_account()
	{
		$output = '';

		$password = $this->security->xss_clean($this->input->post('edit_password'));
		$type = $this->security->xss_clean($this->input->post('select_type'));
		$id = $this->security->xss_clean($this->input->post('account_hid'));

		if($this->db->where('account_id', $id)
					->update('account', array('password' => $password, 'account_type' => $type)))
		{
			$output = 'UPDATED';
		}
		else
		{
			$output = 'NOT UPDATED';
		}
		
		return $output;
	}
}
?>