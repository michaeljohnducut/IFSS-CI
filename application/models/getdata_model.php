<?php

class getdata_model extends CI_Model{

	public function faculty()
	{
		$result = array();

		$q = $this->db->select('account_id, f.faculty_id, lname, fname, mname, email, contact_no, ft.fac_type_desc')
				->join('faculty f', 'a.faculty_id = f.faculty_id')
				->join('faculty_type ft', 'f.faculty_type = ft.fac_type_id')
                ->where('f.status', 1)
                ->where('a.status', 1)
                ->get('account a');

		foreach($q->result() as $r)
		{
			$btn = '<button class="btn btn-sm  btn-info" id="view_data" data-id="'.$r->faculty_id.'"><span class="fa fa-eye"></span></button>
					<button class="btn btn-sm  btn-success" id="edit_data" data-id="'.$r->faculty_id.'"><span class="fa fa-pencil"></span></button>';
					
			$result[] = array(
					$r->account_id,
					$r->lname,
					$r->fname,
					$r->mname,
					$r->fac_type_desc,
					$r->contact_no,
					$btn,
					$r->faculty_id
					);
		}

		return $result;
	}

	public function educ_bg($id)
	{
		$result = array();

		$query = $this->db->select('level, name_of_school, basic_educ_degree, yr_graduated, educ_bg_id')
                ->where('status', 1)
                ->where('faculty_id', $id)
                ->get('educ_bg');

		foreach ($query->result() as $r) 
		{
			$btn = '<button class="btn btn-sm  btn-success" id="edit_educbg_data" data-id="'.$r->educ_bg_id.'"><span class="fa fa-pencil"></span></button>';

			$result[] = array(
					$r->level,
					$r->name_of_school,
					$r->basic_educ_degree,
					$r->yr_graduated,
					$btn,
					$r->educ_bg_id
					);
		}

		//<button class="btn btn-sm  btn-danger" id="delete_educbg_data" data-id="'.$r->educ_bg_id.'"><span class="fa fa-trash-o" ></span></button>

		return $result;
	}


	public function view_faculty()
	{
		$result = array();

		$faculty_id = $this->security->xss_clean($this->input->post('faculty_id'));

		$query = $this->db->select('a.account_id, f.lname, f.fname, f.mname, f.email, f.contact_no, f.date_of_birth, f.gender, f.civil_status, f.citizenship, f.residential_address, f.rzip_code, f.permanent_address, f.pzip_code, f.faculty_type, f.dept, f.faculty_id, a.image_path')
				->join('faculty f', 'a.faculty_id = f.faculty_id')
                ->where('f.status', 1)
                ->where('a.status', 1)
                ->where('f.faculty_id', $faculty_id)
                ->get('account a');

		foreach ($query->result() as $r) 
		{
			($r->image_path == 'undefined')?$image = "assets/images/profile.png":$image = "assets/images/".$r->image_path."";

			$result[] = array(
					$r->account_id,
					$r->lname,
					$r->fname,
					$r->mname,
					$r->email,
					$r->contact_no,
					$r->date_of_birth,
					$r->gender,
					$r->civil_status,
					$r->citizenship,
					$r->residential_address,
					$r->rzip_code,
					$r->permanent_address,
					$r->pzip_code,
					$r->faculty_type,
					$r->dept,
					$r->faculty_id,
					$image
					);
		}

		return $result;
	}

	public function view_spec()
	{
		$result = array();

		$faculty_id = $this->security->xss_clean($this->input->post('faculty_id'));

		$query = $this->db->select('s.spec_id, s.spec_desc')
                ->join('specialization s', 'fs.spec_id = s.spec_id')
                ->where('fs.faculty_id', $faculty_id)
                ->get('faculty_spec fs');

		foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->spec_id,
					$r->spec_desc,
					);
		}

		return $result;
	}

	public function view_educbg()
	{
		$result = array();

		$id = $this->security->xss_clean($this->input->post('educbg_id'));

		$query = $this->db->select('level, name_of_school, basic_educ_degree, yr_graduated, educ_bg_id')
                ->where('status', 1)
                ->where('educ_bg_id', $id)
                ->get('educ_bg');

		foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->level,
					$r->name_of_school,
					$r->basic_educ_degree,
					$r->yr_graduated,
					$r->educ_bg_id
					);
		}

		return $result;
	}

	public function course()
	{
		$result = array();

		$query = $this->db->select('c.course_id, c.course_code, c.course_desc, d.dept_code')
				->join('department d', 'c.dept = d.dept_id')
                ->where('c.status', 1)
                ->get('course C');

		foreach ($query->result() as $r) 
		{
			$btn = '<button class="btn btn-sm  btn-success" id="edit_data" data-id="'.$r->course_id.'"><span class="fa fa-pencil"></span></button>';

			$result[] = array(
					$r->dept_code,
					$r->course_code,
					$r->course_desc,
					$btn,
					$r->course_id
					);
		}

		return $result;
	}

	public function view_course()
	{
		$result = array();

		$course_id = $this->security->xss_clean($this->input->post('course_id'));

		$query = $this->db->select('course_id, course_code, course_desc, dept')
                ->where('status', 1)
                ->where('course_id', $course_id)
                ->get('course');

		foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->course_id,
					$r->course_code,
					$r->course_desc,
					$r->dept
					);
		}

		return $result;
	}

	public function department()
	{
		$result = array();

		$query = $this->db->select('dept_id, dept_code, dept_desc')
                ->where('status', 1)
                ->get('department');

		foreach ($query->result() as $r) 
		{
			$btn = '<button class="btn btn-sm  btn-success" id="edit_data" data-id="'.$r->dept_id.'"><span class="fa fa-pencil"></span></button>';

			$result[] = array(
					$r->dept_code,
					$r->dept_desc,
					$btn,
					$r->dept_id
					);
		}

		return $result;
	}

	public function view_department()
	{
		$result = array();

		$dept_id = $this->security->xss_clean($this->input->post('department_id'));

		$query = $this->db->select('dept_id, dept_code, dept_desc')
                ->where('status', 1)
                ->where('dept_id', $dept_id)
                ->get('department');

		foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->dept_id,
					$r->dept_code,
					$r->dept_desc
					);
		}

		return $result;
	}

	public function subject()
	{
		$result = array();

		$query = $this->db->select('s.subj_id, s.subj_code, s.subj_desc, s.units, s.lab_hrs, s.lec_hrs, spec.spec_desc')
		        ->join('specialization spec', 's.specialization = spec.spec_id', 'left')
                ->get('subject s');


		foreach($query->result() as $r)
		{
			$btn = '<button class="btn btn-sm  btn-success" id="edit_data" data-id="'.$r->subj_id.'"><span class="fa fa-pencil"></span></button>';
					
			$result[] = array(
					$r->subj_code,
					$r->subj_desc,
					$r->spec_desc,
					$r->units,
					$r->lec_hrs,
					$r->lab_hrs,
					$btn,
					$r->subj_id
					);
		}

		return $result;
	}

	public function view_subject($id)
	{
		$result = array();

		$subj_code = $this->security->xss_clean($this->input->post('subj_code'));

		$query = $this->db->select('s.subj_id, s.subj_code, s.subj_desc, s.units, s.lab_hrs, s.lec_hrs, GROUP_CONCAT(pr.pre_req_desc) AS pre_requisite, s.isMajor, s.specialization')
				->join('pre_requisite pr','s.subj_id = pr.subj_code', 'left')
                ->group_by('s.subj_code')
                ->having('s.subj_id', $subj_code)
                ->get('subject s');

		foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->subj_id,
					$r->subj_code,
					$r->subj_desc,
					$r->units,
					$r->lab_hrs,
					$r->lec_hrs,
					$r->pre_requisite,
					$r->isMajor,
					$r->specialization
					);
		}

		return $result;
	}

	public function prerequisite()
	{
		$result = array();

		$query = $this->db->select('s.subj_id, s.subj_code, s.subj_desc, GROUP_CONCAT(pr.pre_req_desc SEPARATOR "<br>") AS pre_requisite')
				->join('pre_requisite pr', 's.subj_id = pr.subj_code')
				->group_by('s.subj_code')
                ->get('subject s');


		foreach($query->result() as $r)
		{
			$btn = '<button class="btn btn-sm  btn-success" id="edit_data" data-id="'.$r->subj_id.'"><span class="fa fa-pencil"></span></button>';
					
			$result[] = array(
					$r->subj_code,
					$r->subj_desc,
					$r->pre_requisite,
					$btn,
					$r->subj_id
					);
		}

		return $result;
	}

	public function view_prerequisite($id)
	{
		$result = array();

		$subj_code = $this->security->xss_clean($this->input->post('subj_code'));

		$query = $this->db->select('s.subj_id, s.subj_code, GROUP_CONCAT(pr.pre_req_desc) AS pre_requisite')
				->join('pre_requisite pr','s.subj_id = pr.subj_code')
                ->group_by('s.subj_code')
                ->having('s.subj_id', $subj_code)
                ->get('subject s');

		foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->subj_id,
					$r->subj_code,
					$r->pre_requisite,
					);
		}

		return $result;
	}

	public function faculty_type()
	{
		$result = array();

		$query = $this->db->select('fac_type_id, fac_type_desc')
                ->get('faculty_type');

		foreach ($query->result() as $r) 
		{
			$btn = '<button class="btn btn-sm  btn-success" id="edit_data" data-id="'.$r->fac_type_id.'"><span class="fa fa-pencil"></span></button>';

			$result[] = array(
					$r->fac_type_desc,
					$btn,
					$r->fac_type_id
					);
		}

		return $result;
	}

	public function view_faculty_type($id)
	{
		$result = array();

		$type_code = $this->security->xss_clean($this->input->post('type_code'));

		$query = $this->db->select('fac_type_id, fac_type_desc')
				->where('fac_type_id', $type_code)
                ->get('faculty_type');

		foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->fac_type_id,
					$r->fac_type_desc
					);
		}

		return $result;
	}

	public function load_limit()
	{
		$result = array();

		$query = $this->db->select('ft.fac_type_desc, fl.fac_load_desc, fl.num_hrs, fl.load_type_id')
				->join('faculty_type ft', 'ft.fac_type_id = fl.fac_type_desc', 'inner')
				->where('fl.status', 1)
                ->get('faculty_load_type fl');

		foreach ($query->result() as $r) 
		{
			$btn = '<button class="btn btn-sm  btn-success" id="edit_data" data-id="'.$r->load_type_id.'"><span class="fa fa-pencil"></span></button>';

			$result[] = array(
					$r->fac_type_desc,
					$r->fac_load_desc,
					$r->num_hrs,
					$btn,
					$r->load_type_id
					);
		}

		return $result;
	}

	public function view_load_limit($id)
	{
		$result = array();

		$id = $this->security->xss_clean($this->input->post('loadlimit_id'));

		$query = $this->db->select('fac_type_desc, fac_load_desc, num_hrs, load_type_id')
				->where('load_type_id', $id)
				->where('status', 1)
                ->get('faculty_load_type');

		foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->load_type_id,
					$r->fac_type_desc,
					$r->fac_load_desc,
					$r->num_hrs
					);
		}

		return $result;
	}

	public function specialization()
	{
		$result = array();

		$query = $this->db->select('spec_desc, spec_id')
				->where('status', 1)
				->order_by('spec_desc', 'asc')
                ->get('specialization');

		foreach ($query->result() as $r) 
		{
			$btn = '<button class="btn btn-sm  btn-success" id="edit_data" data-id="'.$r->spec_id.'"><span class="fa fa-pencil"></span></button>';

			$result[] = array(
					$r->spec_desc,
					$btn,
					$r->spec_id
					);
		}

		return $result;
	}

	public function view_specialization($id)
	{
		$result = array();

		$spec_id = $this->security->xss_clean($this->input->post('spec_id'));

		$query = $this->db->select('spec_desc, spec_id')
				->where('spec_id', $spec_id)
				->where('status', 1)
                ->get('specialization');

		foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->spec_id,
					$r->spec_desc
					);
		}

		return $result;
	}

	// public function acad_yr()
	// {
	// 	$result = array();

	// 	$query = $this->db->select('acad_yr_id, acad_yr_desc')
	// 			->where('status', 1)
	// 			->order_by('acad_yr_desc', 'asc')
 //                ->get('acad_year');

	// 	foreach ($query->result() as $r) 
	// 	{
	// 		$btn = '<button class="btn btn-sm  btn-success" id="edit_data" data-id="'.$r->acad_yr_id.'"><span class="fa fa-pencil"></span></button>';

	// 		$result[] = array(
	// 				$r->acad_yr_desc,
	// 				$btn,
	// 				$r->acad_yr_id
	// 				);
	// 	}

	// 	return $result;
	// }

	// public function view_acad_yr($id)
	// {
	// 	$result = array();

	// 	$acadyr_id = $this->security->xss_clean($this->input->post('acadyr_id'));

	// 	$query = $this->db->select('acad_yr_id, acad_yr_desc')
	// 			->where('acad_yr_id', $acadyr_id)
	// 			->where('status', 1)
 //                ->get('acad_year');

	// 	foreach ($query->result() as $r) 
	// 	{
	// 		$result[] = array(
	// 				$r->acad_yr_id,
	// 				$r->acad_yr_desc
	// 				);
	// 	}

	// 	return $result;
	// }

	public function get_curriculum()
	{
		$result = array();
		$year = $this->security->xss_clean($this->input->post('year'));
		$dept = $this->security->xss_clean($this->input->post('dept'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$year_lvl = $this->security->xss_clean($this->input->post('year_level'));

		$query = $this->db->select('c.curriculum_id, s.subj_code, s.subj_desc, s.units, s.lec_hrs, s.lab_hrs')
				->join('subject s','c.subj_code = s.subj_id', 'left')
				->where('c.year_lvl', $year_lvl)
				->where('c.course', $dept)
				->where('c.sem', $sem)
				->where('c.curriculum_yr', $year)
                ->get('curriculum c');


		foreach($query->result() as $r)
		{
			$btn = '<button class="btn btn-sm  btn-danger" id="delete_data" data-id="'.$r->curriculum_id.'" >Unselect</button>';
					
			$result[] = array(
					$r->subj_code,
					$r->subj_desc,
					$r->units,
					$r->lec_hrs,
					$r->lab_hrs,
					$btn
					);
		}

		return $result;
	}

	public function get_used_curr()
	{
		$result = '';
		$query = $this->db->select('curr_year_id')
				->where ('is_used',1)
				->get('curriculum_year');

		foreach($query->result() as $r)
		{
					
			$result = $r->curr_year_id;
		}

		return $result;
	}

	public function validate_subject_curr()
	{
		$result = '';

		$subject = $this->security->xss_clean($this->input->post('subject'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$year_level = $this->security->xss_clean($this->input->post('year_level'));
		$dept = $this->security->xss_clean($this->input->post('dept'));

		// $size = sizeof($subject) - 1;
		// echo $subject[$size];

			$query = $this->db->group_start()
								->where('curriculum_yr', $acad_year)
								->where('sem', $sem)
								->where('year_lvl', $year_level)
								->where('course', $dept)
								->where('subj_code', $subject)
							->group_end()
							->get('curriculum');

			$number_filter_row = $query->num_rows();

			if($number_filter_row == 0)
			{
				$result = '0';
			}
			else
			{
				$result = $subject;
			}
		

		return $result;
	}

	public function curriculum_year()
	{
		$result = array();

		$query = $this->db->select('curr_year_id,curr_year_desc')
                ->get('curriculum_year');

		foreach ($query->result() as $r) 
		{
			$btn = '<button class="btn btn-sm  btn-success" id="edit_data" data-id="'.$r->curr_year_id.'"><span class="fa fa-pencil"></span></button>';

			$result[] = array(
					$r->curr_year_desc,
					$btn,
					$r->curr_year_id
					);
		}

		return $result;
	}

	public function view_curriculum_year(){

		$result = array();

		$year_code = $this->security->xss_clean($this->input->post('year_code'));

		$query = $this->db->select('curr_year_id,curr_year_desc')
				->where('curr_year_id', $year_code)
                ->get('curriculum_year');

		foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->curr_year_id,
					$r->curr_year_desc,
					);
		}

		return $result;
	}

	public function sectiontbl($id)
	{
		$result = array();

		$query = $this->db->select('d.dept_code, section_desc, ay.acad_yr_desc, sem, section_id')
				->join('department d', 's.dept = d.dept_id')
				->join('acad_year ay', 's.acad_yr = ay.acad_yr_id')
                ->where('s.status', 1)
                ->where('ay.acad_yr_id', $id)
                ->get('section s');

		foreach ($query->result() as $r) 
		{	
			$btn = '<button class="btn btn-sm  btn-info id="view_data" data-id="'.$r->section_id.'"><span class="fa fa-eye"></span></button>
					<button class="btn btn-sm  btn-success" id="edit_data" data-id="'.$r->section_id.'"><span class="fa fa-pencil"></span></button>';

			$result[] = array(
					$r->dept_code,
					$r->section_desc,
					$r->acad_yr_desc,
					$r->sem,
					$btn,
					$r->section_id
					);
		}

		return $result;
	}

	public function section()
	{
		$result = array();

		$query = $this->db->select('s.acad_yr, c.course_code, s.year_lvl, section_desc, section_id')
				->join('course c', 's.course = c.course_id')
                ->where('s.status', 1)
                ->get('section s');

		foreach ($query->result() as $r) 
		{
			$btn = '<button class="btn btn-sm  btn-success" id="edit_data" data-id="'.$r->section_id.'"><span class="fa fa-pencil"></span></button>';

			$result[] = array(
					$r->acad_yr,
					$r->course_code,
					$r->year_lvl,
					$r->section_desc,
					$btn,
					$r->section_id
					);
		}

		//<button class="btn btn-sm  btn-info id="view_data" onclick="view_data()" data-id="'.$r->section_id.'"><span class="fa fa-eye"></span></button>

		return $result;
	}

	public function view_section()
	{
		$result = array();

		$section_id = $this->security->xss_clean($this->input->post('section_id'));

		$query = $this->db->select('acad_yr, year_lvl, c.course_id, section_desc, section_id')
				->join('course c', 's.course = c.course_id')
                ->where('s.status', 1)
                ->where('s.section_id', $section_id)
                ->get('section s');

		foreach ($query->result() as $r) 
		{	
			$result[] = array(
					$r->course_id,
					$r->section_desc,
					$r->acad_yr,
					$r->year_lvl,
					$r->section_id					
					);
		}

		return $result;
	}

	public function roomtbl($val)
	{
		$result = array();

		$query = $this->db->select('room_id, room_code, room_desc, building')
                ->where('status', 1)
                ->like('room_desc', $val)
                ->get('room');

		foreach ($query->result() as $r) 
		{	
			$btn = '<button class="btn btn-sm  btn-success" id="edit_data" data-id="'.$r->room_id.'"><span class="fa fa-pencil"></span></button>';

			$result[] = array(
					$r->room_code,
					$r->room_desc,
					$r->building,
					$btn,
					$r->room_id
					);
		}

		//<button class="btn btn-sm  btn-info id="view_data" onclick="view_data()" data-id="'.$r->room_id.'"><span class="fa fa-eye"></span></button>

		return $result;
	}

	public function room()
	{
		$result = array();

		$query = $this->db->select('room_id, room_code, room_desc, building')
                ->where('status', 1)
                ->get('room');

		foreach ($query->result() as $r) 
		{
			$btn = '<button class="btn btn-sm  btn-success" id="edit_data" data-id="'.$r->room_id.'"><span class="fa fa-pencil"></span></button>';

			$result[] = array(
					$r->room_code,
					$r->room_desc,
					$r->building,
					$btn,
					$r->room_id
					);
		}

		//<button class="btn btn-sm  btn-info id="view_data" onclick="view_data()" data-id="'.$r->room_id.'"><span class="fa fa-eye"></span></button>

		return $result;
	}

	public function room_sorted()
	{
		$result = array();

		$query = $this->db->select('room_id, room_code, room_desc, building')
                ->where('status', 1)
                ->order_by('room_code','asc')
                ->get('room');

		foreach ($query->result() as $r) 
		{
			$btn = '<button class="btn btn-sm  btn-success" id="edit_data" data-id="'.$r->room_id.'"><span class="fa fa-pencil"></span></button>';

			$result[] = array(
					$r->room_code,
					$r->room_desc,
					$r->building,
					$btn,
					$r->room_id
					);
		}

		//<button class="btn btn-sm  btn-info id="view_data" onclick="view_data()" data-id="'.$r->room_id.'"><span class="fa fa-eye"></span></button>

		return $result;
	}

	public function view_room()
	{
		$result = array();

		$room_id = $this->security->xss_clean($this->input->post('room_id'));

		$query = $this->db->select('room_id, room_code, room_desc, building')
                ->where('status', 1)
                ->where('room_id', $room_id)
                ->get('room');

		foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->room_id,
					$r->room_code,
					$r->room_desc,
					$r->building
					);
		}

		return $result;
	}

	public function student_eval()
	{
		$result = array();

		$query = $this->db->select('acad_yr, e.sem, d.dept_code, CONCAT(f.lname,", ", f.fname," ", f.mname) AS faculty_name, rating, rating_desc, evaluation_id')
				->join('faculty f', 'e.faculty_id = f.faculty_id')
                ->join('department d', 'e.dept = d.dept_id')
                ->order_by('e.acad_yr DESC, e.sem DESC')
                ->get('evaluation e');

		foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->acad_yr,
					$r->sem,
					$r->dept_code,
					$r->faculty_name,
					$r->rating,
					$r->rating_desc,
					$r->evaluation_id
					);
		}

		return $result;
	}

	public function view_eval(){

		$result = array();

		$eval_id = $this->security->xss_clean($this->input->post('eval_id'));

		$query = $this->db->select('acad_yr, sem, course, faculty_id, rating, rating_desc, evaluation_id')
				->where('evaluation_id', $eval_id)
                ->get('evaluation');

		foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->acad_yr,
					$r->sem,
					$r->course,
					$r->faculty_id,
					$r->rating,
					$r->rating_desc,
					$r->evaluation_id
					);
		}

		return $result;	
	}

	public function get_evals()
	{
		$result = array();
		$statement = "";
		
		if(!empty($_POST['ay']))
		{
			$acad_yr = $this->security->xss_clean($this->input->post('ay'));
			$statement .= " AND e.acad_yr = '$acad_yr'";
		}
		if(!empty($_POST['sem']))
		{
			$sem = $this->security->xss_clean($this->input->post('sem'));
			$statement .= " AND e.sem ='$sem'";
		}
		if(!empty($_POST['dept']))
		{
			$statement .= " AND d.dept_id = ".$this->security->xss_clean($this->input->post('dept'));
		}

		$query = $this->db->query("SELECT e.acad_yr, e.sem, d.dept_code, CONCAT(f.lname,', ', f.fname,' ', f.mname) AS faculty_name, rating, rating_desc, evaluation_id
									FROM evaluation e JOIN faculty f 
									ON e.faculty_id = f.faculty_id
									JOIN department d
									ON e.dept = d.dept_id
									WHERE 1 = 1 $statement
									ORDER BY acad_yr DESC, sem DESC");

		foreach($query->result() as $r)
		{
			$btn = '<button class="btn btn-sm  btn-success" id="edit_data" data-id="'.$r->evaluation_id.'"><span class="fa fa-pencil"></span></button>';

			$result[] = array(
					$r->acad_yr,
					$r->sem,
					$r->dept_code,
					$r->faculty_name,
					$r->rating,
					$r->rating_desc,
					$btn,
					$r->evaluation_id
					);
		}

		return $result;
	}

	public function get_consec()
	{
		$faculty_id = $this->security->xss_clean($this->input->post('faculty_id'));

		$result = array();
		$statement = "";

		$trackRating = "SATISFACTORY";
		$ctr = 0;

		$query = $this->db->select('acad_yr, sem, faculty_id, rating, rating_desc')
				->where('faculty_id', $faculty_id)
				->order_by('acad_yr DESC, sem DESC')
                ->get('evaluation');

		foreach($query->result() as $r)
		{
			if($r->rating_desc == $trackRating)
			{
			  $ctr++;
			}
			else
			{
			  $ctr = 0;
			//$trackRating = $r->rating_desc;
			}

			if($ctr >= 3)
			{
				$statement = 'CONSECUTIVE';
			}
			else
			{
				$statement = 'NONE';
			}	
		}

		return $statement;
	}

	public function eval_summary()
	{
		$result = array();
		$faculty_id = $this->security->xss_clean($this->input->post('faculty_id'));

		$query = $this->db->select('acad_yr, sem, rating, rating_desc')
				->where('faculty_id', $faculty_id)
				->order_by('acad_yr DESC, sem DESC')
                ->get('evaluation');

		foreach($query->result() as $r) 
		{
			$result[] = array(
					$r->acad_yr,
					$r->sem,
					$r->rating,
					$r->rating_desc,
					);
		}

		return $result;
	}

	public function services()
	{
		$result = array();

		$query = $this->db->select('acad_yr, sem, subj_code, subj_desc, section, GROUP_CONCAT(day," ", time_start," - ",time_end SEPARATOR "<br>") AS schedule, GROUP_CONCAT(room SEPARATOR "<br>") AS room, CONCAT(lname,", ",fname," ",mname) AS faculty, services_id')
				->join('faculty f', 'sa.faculty_id = f.faculty_id', 'left')
                ->group_by('acad_yr, sem, section')
                ->get('services_assign sa');

		foreach($query->result() as $r) 
		{
			$btn = '<button class="btn btn-info btn-sm" data-id = "'.$r->services_id.'" id = "assign_prof" btn-success">A</button>
					<button class="btn btn-sm  btn-success" id="edit_data" data-id="'.$r->services_id.'"><span class="fa fa-pencil"></span></button>';

			$result[] = array(
					$r->acad_yr,
					$r->sem,
					$r->subj_code,
					$r->subj_desc,
					$r->section,
					$r->schedule,
					$r->room,
					$r->faculty,
					$btn,
					);
		}
		return $result;
	}

	public function view_service()
	{
		$result = array();

		$service_id = $this->security->xss_clean($this->input->post('service_id'));

		$query = $this->db->select('acad_yr, sem, subj_code, subj_desc, section, services_id')
				->where('services_id', $service_id)
                ->get('services_assign');

		foreach($query->result() as $r) 
		{
			$result[] = array(
					$r->acad_yr,
					$r->sem,
					$r->subj_code,
					$r->subj_desc,
					$r->section,
					$r->services_id
					);
		}

		return $result;	
	}

	public function service_sched()
	{
		$result = array();

		$acadyr = $this->security->xss_clean($this->input->post('acadyr'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$section = $this->security->xss_clean($this->input->post('section'));
		$code = $this->security->xss_clean($this->input->post('code'));
		$desc = $this->security->xss_clean($this->input->post('desc'));

		$query = $this->db->select('day, time_start, time_end, room, services_id')
							->group_start()
								->where('acad_yr', $acadyr)
								->where('sem', $sem)
								->where('section', $section)
								->where('subj_code', $code)
								->where('subj_desc', $desc)
							->group_end()
                			->get('services_assign');

        $number_filter_row = $query->num_rows();

		foreach($query->result() as $r) 
		{
			($number_filter_row == 1)?$btn = '<button class="btn btn-sm  btn-success" id="edit_sched_data" data-id="'.$r->services_id.'"><span class="fa fa-pencil"></span></button>':$btn = '<button class="btn btn-sm  btn-success" id="edit_sched_data" data-id="'.$r->services_id.'"><span class="fa fa-pencil"></span></button><button class="btn btn-sm  btn-danger" id="delete_sched_data" data-id="'.$r->services_id.'"><span class="fa fa-trash-o "></span></button>';

			$result[] = array(
					$r->day,
					$r->time_start,
					$r->time_end,
					$r->room,
					$btn,
					$r->services_id,
					);
		}
	
		return $result;	
	}

	public function view_service_sched()
	{
		$result = array();

		$id = $this->security->xss_clean($this->input->post('service_id'));

		$query = $this->db->select('day, time_start, time_end, room, services_id, acad_yr, sem')
                ->where('services_id', $id)
                ->get('services_assign');

		foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->day,
					$r->time_start,
					$r->time_end,
					$r->room,
					$r->services_id, 
					$r->acad_yr, 
					$r->sem
					);
		}

		return $result;
	}

	public function get_service_search()
	{
		$result = array();
		$statement = "";
		
		if(!empty($_POST['ay']))
		{
			$acad_yr = $this->security->xss_clean($this->input->post('ay'));
			$statement .= " AND acad_yr = '$acad_yr'";
		}
		if(!empty($_POST['sem']))
		{
			$sem = $this->security->xss_clean($this->input->post('sem'));
			$statement .= " AND sem ='$sem'";
		}

		$query = $this->db->query("SELECT acad_yr, sem, subj_code, subj_desc, section, GROUP_CONCAT(DAY, time_start, time_end SEPARATOR '\n') AS schedule, GROUP_CONCAT(room SEPARATOR '\n') AS room, CONCAT(lname,', ',fname,' ', mname) AS faculty, services_id
									FROM services_assign sa LEFT JOIN faculty f
									ON sa.faculty_id = f.faculty_id
									WHERE 1 = 1 $statement
									GROUP BY section");

		foreach($query->result() as $r) 
		{
			$btn = '<button class="btn btn-sm  btn-success">A</button>
					<button class="btn btn-sm  btn-success" id="edit_data" data-id="'.$r->services_id.'"><span class="fa fa-pencil"></span></button>';

			$result[] = array(
					$r->acad_yr,
					$r->sem,
					$r->subj_code,
					$r->subj_desc,
					$r->section,
					$r->schedule,
					$r->room,
					$r->faculty,
					$btn,
					);
		}
		return $result;
	}

	public function get_subject_per_sem()
	{
		$result = array();

		$sem = $this->security->xss_clean($this->input->post('temp_sem'));

		$query = $this->db->select('DISTINCT CONCAT(s.subj_code, " - ", s.subj_desc) AS subject_code, s.subj_id')
				->join('curriculum c', 's.subj_id = c.subj_code')
				->join('curriculum_year cy', 'c.curriculum_yr = cy.curr_year_id')
				->group_start()
                	->where('c.sem', $sem)
                	->where('cy.is_used = 1')
                	->group_start()
                		->where('isMajor = 1')
                		->or_where('isMajor = 2')
                	->group_end()
                ->group_end()
                ->get('subject s');

		foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->subject_code,
					$r->subj_id,
					);
		}

		return $result;
	}
	
	public function view_subject_details($id)
	{
		$result = array();

		$subject = $this->security->xss_clean($this->input->post('temp_subject'));
		$btn = 

		$query = $this->db->select('cy.curr_year_desc, s.subj_code, s.subj_desc, s.units, s.lab_hrs, s.lec_hrs, s.subj_id')
				->join('curriculum c', 's.subj_id = c.subj_code')
				->join('curriculum_year cy', 'c.curriculum_yr = cy.curr_year_id')
				->group_start()
                	->where('s.subj_id', $subject)
                	->where('cy.is_used = 1')
                ->group_end()
                ->get('subject s');

		foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->subj_id,
					$r->curr_year_desc,
					$r->subj_code,
					$r->subj_desc,
					$r->units,
					$r->lab_hrs,
					$r->lec_hrs,
					);
		}

		return $result;
	}

	public function view_subject_sections($id)
	{
		$result = array();
		$year_lvl = '';
		$course = '';
		$statement = "";

		$subject = $this->security->xss_clean($this->input->post('temp_subject'));
		$sem = $this->security->xss_clean($this->input->post('sem'));

		if(!empty($_POST['temp_acadyr']))
		{
			$acad_yr = $this->security->xss_clean($this->input->post('temp_acadyr'));
			$statement .= " AND s.acad_yr = '$acad_yr'";
		}
		else
		{
			$statement .= " ";
		}

		$query = $this->db->select('c.year_lvl, c.course')
				->distinct('c.year_lvl, c.course')
				->join('subject s', 'c.subj_code = s.subj_id')
				->where('s.subj_id', $subject)
                ->get('curriculum c');

		foreach($query->result() as $r)
		{		
			$year_lvl = $r->year_lvl;
			$course = $r->course;

			$query2 = $this->db->query("SELECT CONCAT(c.course_code, ' ', SUBSTR(s.year_lvl, 1, 1), '-', s.section_desc) AS section, s.section_id
								FROM section s JOIN course c
								ON s.course = c.course_id
							WHERE s.year_lvl = '$year_lvl' AND s.course = $course $statement
							AND s.section_id NOT IN (SELECT sm.section
							FROM subject_match sm
							WHERE sm.acad_yr = '$acad_yr' 
							AND sm.sem =  '$sem'
							AND sm.subj_id = $subject)");

	        foreach ($query2->result() as $r) 
			{
				$result[] = array(
						$r->section,
						$r->section_id
						);
			}
		}

		return $result;
	}

	public function view_subject_faculty($id)
	{
		$result = array();
		$spec = '';
		$statement = "";
		$statement2 = "";

		$subject = $this->security->xss_clean($this->input->post('temp_subject'));
		$type = $this->security->xss_clean($this->input->post('temp_type'));

		if($type != 0)
		{	
			$statement2 .= " AND ft.fac_type_id = '$type'";
		}
		else
		{
			$statement2 .= " ";
		}

		$query = $this->db->select('specialization')
				->where('subj_id', $subject)
                ->get('subject');

		foreach($query->result() as $r)
		{		
			$spec = $r->specialization;
		}

		$query2 = $this->db->query("SELECT f.faculty_id, CONCAT(f.lname, ', ', f.fname, ' ', f.mname) AS fac_name, ft.fac_type_desc
									FROM faculty f JOIN faculty_type ft
									ON f.faculty_type = ft.fac_type_id
									JOIN faculty_spec fs
									ON f.faculty_id = fs.faculty_id
									WHERE fs.spec_id = '$spec' $statement2");

        foreach ($query2->result() as $r) 
		{
			$trackRating = "SATISFACTORY";
			$ctr = 0;

			$query3 = $this->db->select('acad_yr, sem, faculty_id, rating, rating_desc')
					->where('faculty_id', $r->faculty_id)
					->order_by('acad_yr DESC, sem DESC')
	                ->get('evaluation');

			foreach($query3->result() as $s)
			{
				if($s->rating_desc == $trackRating)
				{
				  $ctr++;
				}
				else
				{
				  $ctr = 0;
				}

				if($ctr >= 3)
				{
					$statement = 'CONSECUTIVE';
				}
				else
				{
					$statement = 'NONE';
				}	
			}

			($statement == 'CONSECUTIVE')?$consec = 'WITH CONSECUTIVE SATISFACTORY RATING':$consec = 'WITHOUT CONSECUTIVE SATISFACTORY RATING';

			$btn = '<button type="button" data-id="'.$r->faculty_id.'" class="btn btn-info" id = "btn_prof_load"><span class = " ti-user"></span></button> &nbsp;'.'<button type="button" data-id="'.$r->faculty_id.'" class="btn btn-success" id = "btn_assign"><span class = " ti-arrow-right"></span></button>';

			$result[] = array(
					$r->fac_name,
					$r->fac_type_desc,
					$consec,
					$btn
					);
		}

		return $result;
	}



// ==========================================================================
// -----------------------------NEW UPDATE (7-11-18)------------------------
// ==========================================================================

	public function get_disc_subj(){

		$result = array();
		$temp_date = date("m");

		if($temp_date == '01' || $temp_date == '02' || $temp_date == '03' || $temp_date == '04' || $temp_date == '05' || $temp_date == '06'){
			$sem = '1st';
		}

		else if($temp_date == '07' || $temp_date == '08' || $temp_date == '09' || $temp_date == '10' || $temp_date == '11' || $temp_date == '12'){
			$sem = '2nd';
		}

		$query = $this->db->select('s.subj_id, s.subj_code, s.subj_desc')
				->distinct()
				->join('subject s','s.subj_id = c.subj_code')
				->where('c.curriculum_yr = (SELECT curr_year_id
	                    FROM curriculum_year
	                    WHERE is_used = 1)', NULL, FALSE)
				->where('s.isMajor', 1)
				->where('c.sem', $sem)
				->order_by('s.subj_code', 'asc')
                ->get('curriculum c');


		foreach($query->result() as $r)
		{
			
			$result[] = array(
					$r->subj_id,
					$r->subj_code,
					$r->subj_desc
					);
		}

		return $result;

	}

	public function view_acad_year(){

		$result = array();

		$query = $this->db->select('acad_yr_id, acad_yr_desc')
				->where('status', 1)
                ->get('acad_year');
                // ->order_by('acad_yr_desc', 'asc');

		foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->acad_yr_id,
					$r->acad_yr_desc,
					);
		}

		return $result;	
	}

	public function get_pref_time(){	//GETS FACULTY'S PREFERRED TIME

		$fac_id = $this->security->xss_clean($this->input->post('fac_id'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$result = array();

		$query = $this->db->select(' preferred_time_id, day, start_time, end_time')
				->where('faculty_id', $fac_id)
				->where('acad_yr', $acad_year)
				->where('sem', $sem)
                ->get('preferred_time');
                // ->order_by('acad_yr_desc', 'asc');

		foreach ($query->result() as $r) 
		{
			$btn = '<button class="btn btn-sm  btn-danger" id="remove_pref" data-id="'.$r->preferred_time_id.'">UNSELECT</button>';

			$result[] = array(
					$r->day,
					$r->start_time,
					$r->end_time, 
					$btn
					);
		}

		return $result;	
	}

	
// ==========================================================================
// -----------------------------NEW UPDATE (7-25-18)------------------------
// ==========================================================================


	public function get_prof_subj(){	//GETS FACULTY'S PREFERRED SUBJECTS

		$fac_id = $this->security->xss_clean($this->input->post('fac_id'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$result = array();

		$query = $this->db->select('s.subj_id, s.subj_code, s.subj_desc')
				->distinct()
				->where('faculty_id', $fac_id)
				->where('acad_yr', $acad_year)
				->where('sem', $sem)
				->join('preferred_subj ps','s.subj_id = ps.subj_code')
                ->get('subject s');


        foreach ($query->result() as $r){

			$result[] = array(
					$r->subj_id,
					$r->subj_code,
					$r->subj_desc,

					);
		}

		return $result;

	}

	public function get_avail_sections(){ //GETS AVAILABLE SECTIONS FOR A SPECIFIC SUBJECT

		$subj_id = $this->security->xss_clean($this->input->post('subj_id'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		$start_time = $this->security->xss_clean($this->input->post('start_time'));
		$end_time = $this->security->xss_clean($this->input->post('end_time'));
		$day_temp = $this->security->xss_clean($this->input->post('day_temp'));
		$result = array();

		$query = $this->db->select('c.course_code, s.section_id, s.year_lvl, s.section_desc')
				->distinct()
				->where('s.year_lvl IN (SELECT cr.year_lvl
                    FROM curriculum cr
                    WHERE cr.subj_code = '.$subj_id.'
                    AND cr.sem = "'.$sem.'"
                    AND cr.curriculum_yr = (SELECT cy.curr_year_id
                                            FROM curriculum_year cy
                                            WHERE cy.is_used = 1))', NULL, FALSE)
				->where('s.course IN (SELECT cr.course
                    FROM curriculum cr
                    WHERE cr.subj_code = '.$subj_id.'
                   	AND cr.sem = "'.$sem.'")', NULL, FALSE)
				->where('s.section_id NOT IN (SELECT section
					FROM teaching_assign_sched 
					WHERE acad_yr = "'.$acad_year.'"
					AND sem = "'.$sem.'"
					AND subj_code = '.$subj_id.')', NULL, FALSE)
				->where('s.section_id NOT IN (SELECT ta.section
					FROM teaching_assign_sched ta
					WHERE ta.time_start > "'.$start_time.'" AND ta.time_start < "'.$end_time.'" 
					AND ta.day = "'.$day_temp.'" 
					OR ta.time_finish > "'.$start_time.'" 
					AND ta.time_finish < "'.$end_time.'" 
					AND ta.day = "'.$day_temp.'" 
					OR ta.time_start = "'.$start_time.'"
					AND ta.time_finish = "'.$end_time.'" 
					AND ta.day = "'.$day_temp.'")', NULL, FALSE)
				->order_by('course_code', 'asc')
				->join('course c','s.course = c.course_id')
                ->get('section s');

        foreach ($query->result() as $r){

			$result[] = array(
					$r->course_code,
					$r->section_id,
					$r->year_lvl,
					$r->section_desc
					);
		}

		return $result;
	}

	public function get_avail_rooms(){ //GETS AVAILABLE ROOMS FOR A SPECIFIC TIME

		$sem = $this->security->xss_clean($this->input->post('sem'));
		$day = $this->security->xss_clean($this->input->post('day'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		$start_time = $this->security->xss_clean($this->input->post('start_time'));
		$end = $this->security->xss_clean($this->input->post('end'));
		$result = array();

		$query = $this->db->select('r.room_id, r.room_code')
				->where('r.room_id NOT IN (SELECT ta.room_id
					FROM teaching_assign_sched ta
					WHERE ta.acad_yr = "'.$acad_year.'"
					AND ta.sem = "'.$sem.'"
					AND ta.time_start > "'.$start_time.'"
					AND ta.time_start < "'.$end.'"
					AND ta.day = "'.$day.'"
					AND ta.acad_yr = "'.$acad_year.'"
					AND ta.sem = "'.$sem.'"
					OR ta.time_finish > "'.$start_time.'"
					AND ta.time_finish < "'.$end.'"
					AND ta.day = "'.$day.'"
					AND ta.acad_yr = "'.$acad_year.'"
					AND ta.sem = "'.$sem.'"
					OR ta.time_start = "'.$start_time.'"
					AND ta.time_finish = "'.$end.'"
					AND ta.day = "'.$day.'"
					AND ta.acad_yr = "'.$acad_year.'"
					AND ta.sem = "'.$sem.'")', NULL, FALSE)
				->where('r.room_desc = "Lecture Room"', NULL, FALSE)
				->order_by('room_code', 'asc')
                ->get('room r');

        foreach ($query->result() as $r){

			$result[] = array(
					$r->room_id,
					$r->room_code
					);
		}

		return $result;
	}

	public function load_sched_table(){	//GETS FACULTY'S SUMMARY OF SCHEDULES

		$fac_id = $this->security->xss_clean($this->input->post('fac_id'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$result = array();

		$query = $this->db->select('s.subj_code, s.subj_desc, s.units, c.course_code, se.year_lvl, se.section_desc, GROUP_CONCAT(CONCAT(LEFT(ta.time_start,5), "-", LEFT(ta.time_finish,5)) ORDER BY ta.teaching_sched_id asc SEPARATOR "/") as "times", GROUP_CONCAT(ta.day ORDER BY ta.teaching_sched_id asc SEPARATOR "/") as "days", GROUP_CONCAT(r.room_code ORDER BY ta.teaching_sched_id asc SEPARATOR "/") as "rooms", ta.subj_match_id')
				->where('sm.faculty_id', $fac_id)
				->where('sm.acad_yr', $acad_year)
				->where('sm.sem', $sem)
				->join('subject_match sm ','ta.subj_match_id = sm.subj_match_id')
				->join('subject s','sm.subj_id = s.subj_id')
				->join('section se','se.section_id = sm.section')
				->join('course c','se.course = c.course_id')
				->join('room r','r.room_id = ta.room_id')
				->group_by('ta.subj_match_id')
				->order_by('ta.day', 'asc')
                ->get('teaching_assign_sched ta');
                

		foreach ($query->result() as $r) 
		{
			$btn = '<button class="btn btn-sm  btn-info" id="btn_reschedule" data-id="'.$r->subj_match_id.'"><span class="fa  fa-rotate-left"></span></button>';

			$section = $r->course_code. ' ' . $r->year_lvl[0] . ' - ' . $r->section_desc;
			$result[] = array(
					$r->subj_code,
					$r->subj_desc,
					$r->units, 
					$section, 
					$r->times,
					$r->days,
					$r->rooms,
					$btn
					);
		}

		return $result;	
	}

	public function get_units_used(){	//GETS FACULTY'S PREFERRED SUBJECTS

		$fac_id = $this->security->xss_clean($this->input->post('fac_id'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$result = array();

		$query = $this->db->select("(SELECT SUM(s.lec_hrs + s.lab_hrs)
FROM subject_match sm
   	JOIN subject s 
    ON s.subj_id = sm.subj_id
    AND sm.subj_match_id IN (SELECT DISTINCT ta.subj_match_id
    FROM teaching_assign_sched ta
  	WHERE ta.subj_match_id IN(
    SELECT sm.subj_match_id
 	FROM subject_match sm
	WHERE sm.faculty_id = ".$fac_id."
	AND sm.acad_yr = '".$acad_year."'
	AND sm.sem = '".$sem."'))) as 'total_hours', 
    
    (SELECT SUM(s.lec_hrs + s.lab_hrs)
FROM subject_match sm
   	JOIN subject s 
    ON s.subj_id = sm.subj_id
    AND sm.subj_match_id IN (SELECT DISTINCT ta.subj_match_id
    FROM teaching_assign_sched ta
  	WHERE ta.subj_match_id IN(
    SELECT sm.subj_match_id
 	FROM subject_match sm
	WHERE sm.faculty_id = ".$fac_id."
	AND sm.acad_yr = '".$acad_year."'
	AND sm.sem = '".$sem."')
    AND ta.load_type = 'R')) as 'reg_load',
    
    (SELECT SUM(s.lec_hrs + s.lab_hrs)
FROM subject_match sm
   	JOIN subject s 
    ON s.subj_id = sm.subj_id
    AND sm.subj_match_id IN (SELECT DISTINCT ta.subj_match_id
    FROM teaching_assign_sched ta
  	WHERE ta.subj_match_id IN(
    SELECT sm.subj_match_id
 	FROM subject_match sm
	WHERE sm.faculty_id = ".$fac_id."
	AND sm.acad_yr = '".$acad_year."'
	AND sm.sem = '".$sem."')
    AND ta.load_type = 'PT')) as 'pt_load',
    
    (SELECT SUM(s.lec_hrs + s.lab_hrs)
FROM subject_match sm
   	JOIN subject s 
    ON s.subj_id = sm.subj_id
    AND sm.subj_match_id IN (SELECT DISTINCT ta.subj_match_id
    FROM teaching_assign_sched ta
  	WHERE ta.subj_match_id IN(
    SELECT sm.subj_match_id
 	FROM subject_match sm
	WHERE sm.faculty_id = ".$fac_id."
	AND sm.acad_yr = '".$acad_year."' 
	AND sm.sem = '".$sem."')
    AND ta.load_type = 'TS')) as 'ts_load'")
		->distinct()
		->get('teaching_assign_sched ta');

        foreach ($query->result() as $r){

			$result[] = array(
					$r->total_hours, 
					$r->reg_load,
					$r->pt_load,
					$r->ts_load
					);
		}

		return $result;

	}

	public function get_fac_type(){

		$fac_id = $this->security->xss_clean($this->input->post('fac_id'));
		$result = array();

		$query = $this->db->select('fa.faculty_type')
				->where('fa.faculty_id', $fac_id)
                ->get('faculty fa');

		foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->faculty_type
					);
		}

		return $result;	

	}

	public function get_regular_controller(){

		$fac_type = $this->security->xss_clean($this->input->post('fac_type'));
		$result = array();

		$query = $this->db->select('ft.num_hrs')
				->where('ft.fac_type_desc', $fac_type)
				->where("ft.fac_load_desc LIKE ('%regular%') UNION 
				SELECT ft.num_hrs
				FROM faculty_load_type ft
				WHERE ft.fac_type_desc = 1 
				AND ft.fac_load_desc LIKE ('%part%')", NULL, FALSE)
                ->get('faculty_load_type ft');

		foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->num_hrs
					);
		}

		return $result;	

	}

	public function get_faculty_specs(){

		$fac_id = $this->security->xss_clean($this->input->post('fac_id'));
		$acad_yr = $this->security->xss_clean($this->input->post('acad_yr'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$result = array();
		$account_id = '';
		$fac_name = '';
		$fac_type = '';
		$spec = '';
		$unit = '';

		$query = $this->db->select("a.account_id, CONCAT(f.lname, ', ', f.fname, ' ',  f.mname) AS 'fac_name', ft.fac_type_desc, GROUP_CONCAT(DISTINCT(s.spec_desc) SEPARATOR '<br>') AS 'spec'")
				->where('f.faculty_id', $fac_id)
				->join('account a', 'f.faculty_id = a.faculty_id')
				->join('faculty_type ft', 'f.faculty_type = ft.fac_type_id')
				->join('faculty_spec fs', 'fs.faculty_id = f.faculty_id')
				->join('specialization s ', 's.spec_id = fs.spec_id')
                ->get('faculty f');

        foreach ($query->result() as $r) 
		{
			$account_id = $r->account_id;
			$fac_name = $r->fac_name;
			$fac_type = $r->fac_type_desc;
			$spec = $r->spec;
		}

		$query2 = $this->db->select("SUM(sb.units) as 'units'")
							->join('subject_match sm', 'f.faculty_id = sm.faculty_id')
							->join('subject sb ', 'sb.subj_id = sm.subj_id')
							->where('f.faculty_id', $fac_id)
							->where('sm.acad_yr', $acad_yr)
							->where('sm.sem', $sem)
							->get('faculty f');

		foreach ($query2->result() as $s) 
		{
			($s->units == '')?$unit = 0:$unit = $s->units;
		}

		$result[] = array(
					$account_id,
					$fac_name,
					$fac_type,
					$spec,
					$unit	
					);

		return $result;	

	}

	public function view_facload_tbl(){

		$fac_id = $this->security->xss_clean($this->input->post('fac_id'));
		$acad_yr = $this->security->xss_clean($this->input->post('acad_yr'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$result = array();

		$query = $this->db->select("CONCAT(c.course_code, ' ',  LEFT(s.year_lvl, 1), ' - ', s.section_desc) AS 'section', sb.subj_code, sb.subj_desc, sm.subj_match_id")
				->where('sm.faculty_id', $fac_id)
				->where('sm.acad_yr', $acad_yr)
				->where('sm.sem', $sem)
				->join('section s','s.section_id = sm.section')
				->join('subject sb  ','sb.subj_id = sm.subj_id')
				->join('course c  ','c.course_id = s.course')
                ->get('subject_match sm');
                // ->order_by('ta.day', 'asc');

		foreach ($query->result() as $r) 
		{
			$btn = '<button class="btn btn-sm  btn-danger" id="delete_match_data" data-id="'.$r->subj_match_id.'"><span class="ti-minus"></span></button>';

			$result[] = array(
					$r->section,
					$r->subj_code,
					$r->subj_desc, 
					$btn, 
					$r->subj_match_id
					);
		}

		return $result;	

	}

	public function get_all_sections(){

		$course_id = $this->security->xss_clean($this->input->post('course_id'));
		$acad_yr = $this->security->xss_clean($this->input->post('acad_yr'));
		$result = array();
		$query = $this->db->select("s.section_id, CONCAT(LEFT(s.year_lvl, 1), '-', s.section_desc) as 'section'")
				->where('s.course ', $course_id)
				->where('s.acad_yr', $acad_yr)
				->order_by('s.year_lvl', 'asc')
                ->get(' section s');

        foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->section_id,
					$r->section
					);
		}

		return $result;	
	}

	public function get_section_load_tbl(){

		$section_id = $this->security->xss_clean($this->input->post('section_id'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$acad_yr = $this->security->xss_clean($this->input->post('acad_yr'));
		$result = array();
		$query = $this->db->select("s.subj_code, s.subj_desc, CONCAT(f.lname, ', ', f.fname, ' ', f.mname) as 'facname', s.units, s.lab_hrs, s.lec_hrs, sm.subj_match_id")
				->where('sm.section ', $section_id)
				->where('sm.acad_yr', $acad_yr)
				->where('sm.sem', $sem)
				->join('subject_match sm', 's.subj_id = sm.subj_id')
				->join('faculty f', 'f.faculty_id = sm.faculty_id')
                ->get('subject s');

        foreach ($query->result() as $r) 
		{
			$btn = '<button class="btn btn-sm  btn-danger" id="delete_match_data" data-id="'.$r->subj_match_id.'"><span class="ti-minus"></span></button>';
			$result[] = array(
					$r->subj_code,
					$r->subj_desc,
					$r->facname,
					$r->units,
					$r->lab_hrs,
					$r->lec_hrs, 
					$btn
					);
		}

		return $result;	
	}

	public function get_subj_details(){
		$load_id = $this->security->xss_clean($this->input->post('load_id'));
		$result = array();
		$query = $this->db->select("s.subj_code, s.subj_desc,  CONCAT(c.course_code, ' ', LEFT(se.year_lvl, 1) , ' - ', se.section_desc) as 'section', s.units, s.lec_hrs, s.lab_hrs")
				->where('sm.subj_match_id ', $load_id)
				->join('subject s ', 'sm.subj_id = s.subj_id')
				->join('section se ', 'sm.section = se.section_id')
				->join('course c', 'c.course_id = se.course')
                ->get('subject_match sm ');

         foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->subj_code,
					$r->subj_desc,
					$r->section,
					$r->units,
					$r->lec_hrs,
					$r->lab_hrs
					);
		}

		return $result;
	}

	public function get_faculty_type(){
		$fac_id = $this->security->xss_clean($this->input->post('fac_id'));
		$result = array();

		$query = $this->db->select("ft.fac_type_id, ft.fac_type_desc")
				->where('f.faculty_id', $fac_id)
				->join('faculty f ', 'f.faculty_type = ft.fac_type_id')
                ->get('faculty_type ft');

        foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->fac_type_id,
					$r->fac_type_desc
					);
		}

		return $result;

	}

	public function get_avail_labs(){ //GETS AVAILABLE ROOMS FOR A SPECIFIC TIME

		$sem = $this->security->xss_clean($this->input->post('sem'));
		$day = $this->security->xss_clean($this->input->post('day'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		$start_time = $this->security->xss_clean($this->input->post('start_time'));
		$end = $this->security->xss_clean($this->input->post('end'));
		$result = array();

		$query = $this->db->select('r.room_id, r.room_code')
				->where('r.room_id NOT IN (SELECT ta.room_id
					FROM teaching_assign_sched ta
					WHERE ta.time_start > "'.$start_time.'"
					AND ta.time_start < "'.$end.'"
					AND ta.day = "'.$day.'"
					OR ta.time_finish > "'.$start_time.'"
					AND ta.time_finish < "'.$end.'"
					AND ta.day = "'.$day.'"
					OR ta.time_start = "'.$start_time.'"
					AND ta.time_finish = "'.$end.'"
					AND ta.day = "'.$day.'")', NULL, FALSE)
				->where('r.room_desc = "Laboratory Room"', NULL, FALSE)
				->order_by('room_code', 'asc')
                ->get('room r');

        foreach ($query->result() as $r){

			$result[] = array(
					$r->room_id,
					$r->room_code
					);
		}

		return $result;
	}

	public function get_prof_load(){

		$fac_id = $this->security->xss_clean($this->input->post('fac_id'));
		$acad_yr = $this->security->xss_clean($this->input->post('acad_yr'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$result = array();

		$query = $this->db->select("CONCAT(c.course_code, ' ',  LEFT(s.year_lvl, 1), ' - ', s.section_desc) AS 'section', sb.subj_code, sb.subj_desc, sm.subj_match_id")
				->where('sm.subj_match_id NOT IN (SELECT ta.subj_match_id
					FROM teaching_assign_sched ta
					WHERE ta.acad_yr = "'.$acad_yr.'"
					AND ta.sem = "'.$sem.'")',NULL, FALSE)
				->where('sm.faculty_id', $fac_id)
				->where('sm.acad_yr', $acad_yr)
				->where('sm.sem', $sem)
				->join('section s','s.section_id = sm.section')
				->join('subject sb  ','sb.subj_id = sm.subj_id')
				->join('course c  ','c.course_id = s.course')
                ->get('subject_match sm');
                // ->order_by('ta.day', 'asc');

		foreach ($query->result() as $r) 
		{
			$btn = '<button class="btn btn-sm  btn-danger" id="delete_match_data" data-id="'.$r->subj_match_id.'"><span class="ti-minus"></span></button>';

			$result[] = array(
					$r->section,
					$r->subj_code,
					$r->subj_desc, 
					$btn, 
					$r->subj_match_id
					);
		}

		return $result;	

	}

	public function reflect_sched_table(){	//GETS FACULTY'S SUMMARY OF SCHEDULES

		$fac_id = $this->security->xss_clean($this->input->post('fac_id'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$result = array();

		$query = $this->db->select('s.subj_code, s.subj_desc, s.units, c.course_code, se.year_lvl, se.section_desc, ta.time_start, ta.time_finish, ta.day, r.room_code')
				->where('sm.faculty_id', $fac_id)
				->where('sm.acad_yr', $acad_year)
				->where('sm.sem', $sem)
				->join('subject_match sm ','ta.subj_match_id = sm.subj_match_id')
				->join('subject s','sm.subj_id = s.subj_id')
				->join('section se','se.section_id = sm.section')
				->join('course c','se.course = c.course_id')
				->join('room r','r.room_id = ta.room_id')
                ->get('teaching_assign_sched ta');
                // ->order_by('ta.day', 'asc');

		foreach ($query->result() as $r) 
		{
			$section = $r->course_code. ' ' . $r->year_lvl[0] . ' - ' . $r->section_desc;
			$time = $r->time_start. ' - '. $r->time_finish;

			$result[] = array(
					$r->subj_code,
					$r->subj_desc,
					$r->units, 
					$section, 
					$time,
					$r->day,
					$r->room_code
					);
		}

		return $result;	
	}

	public function reflect_section_table(){	//GETS SECTION'S SUMMARY OF SCHEDULES

		$section_id = $this->security->xss_clean($this->input->post('section_id'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$result = array();

		$query = $this->db->select("s.subj_code, s.subj_desc, s.units, CONCAT('Prof.', f.fname, ' ', f.lname) as 'facname', ta.time_start, ta.time_finish, ta.day, r.room_code")
				->where('sm.section', $section_id)
				->where('sm.acad_yr', $acad_year)
				->where('sm.sem', $sem)
				->join('subject_match sm','ta.subj_match_id = sm.subj_match_id')
				->join('faculty f','f.faculty_id = sm.faculty_id ')
				->join('subject s','sm.subj_id = s.subj_id')
				->join('room r','r.room_id = ta.room_id')
                ->get('teaching_assign_sched ta');
                // ->order_by('ta.day', 'asc');

		foreach ($query->result() as $r) 
		{
			
			$time = $r->time_start. ' - '. $r->time_finish;

			$result[] = array(
					$r->subj_code,
					$r->subj_desc,
					$r->units, 
					$r->facname, 
					$time,
					$r->day,
					$r->room_code
					);
		}

		return $result;	
	}

	public function reflect_room_table(){	//GETS SECTION'S SUMMARY OF SCHEDULES

		$room_id = $this->security->xss_clean($this->input->post('room_id'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$result = array();

		$query = $this->db->select("s.subj_code, s.subj_desc, s.units,c.course_code, se.year_lvl, se.section_desc, ta.time_start, ta.time_finish, ta.day, CONCAT('Prof.', f.fname, ' ', f.lname) as 'facname'")
				->where('ta.room_id', $room_id)
				->where('ta.acad_yr', $acad_year)
				->where('ta.sem', $sem)
				->join('subject_match sm','ta.subj_match_id = sm.subj_match_id')
				->join('section se','se.section_id = sm.section')
				->join('course c','c.course_id = se.course')
				->join('faculty f','f.faculty_id = sm.faculty_id ')
				->join('subject s','sm.subj_id = s.subj_id')
				->join('room r','r.room_id = ta.room_id')
                ->get('teaching_assign_sched ta');

		foreach ($query->result() as $r) 
		{	

			$section = $r->course_code. ' ' . $r->year_lvl[0] . ' - ' . $r->section_desc;
			$time = $r->time_start. ' - '. $r->time_finish;

			$result[] = array(
					$r->subj_code,
					$r->subj_desc,
					$r->units, 
					$section, 
					$time,
					$r->day,
					$r->facname
					);
		}

		return $result;	
	}

	public function get_minor_subj(){	//GETS MINOR SUBJECTS FOR A SECTION

		$section_id = $this->security->xss_clean($this->input->post('section_id'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$result = array();

		$query = $this->db->select('s.subj_id, s.subj_code, s.subj_desc')
				->where('c.year_lvl = (SELECT se.year_lvl
                    FROM section se
                    WHERE se.section_id = '.$section_id.')', NULL, FALSE)
				->where('s.specialization is null', NULL, FALSE)
				->where('c.sem ', $sem)
				->join('subject s','s.subj_id = c.subj_code')
                ->get('curriculum c ');

		foreach ($query->result() as $r) 
		{	

			$result[] = array(
					$r->subj_id,
					$r->subj_code,
					$r->subj_desc
					);
		}

		return $result;	
	}

	public function get_avail_prof(){

		$start_time = $this->security->xss_clean($this->input->post('start_time'));
		$end = $this->security->xss_clean($this->input->post('end'));
		$day = $this->security->xss_clean($this->input->post('day'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$result = array();

		$query = $this->db->select("f.faculty_id, CONCAT(f.lname, '. ', f.fname, ' ', f.mname) as 'facname'")
				->where('f.faculty_id NOT IN(SELECT sm.faculty_id
				FROM teaching_assign_sched ta
					JOIN subject_match sm ON sm.subj_match_id = ta.subj_match_id
				    JOIN faculty f on f.faculty_id = sm.faculty_id
				WHERE ta.acad_yr = "'.$acad_year.'"
				AND ta.sem = "'.$sem.'"
				AND ta.time_start > "'.$start_time.'"
				AND ta.time_start < "'.$end.'"
				AND ta.day = "'.$day.'"
				OR ta.time_finish > "'.$start_time.'"
				AND ta.time_finish < "'.$end.'"
				AND ta.day = "'.$day.'"
				AND ta.acad_yr = "'.$acad_year.'"
				AND ta.sem = "'.$sem.'"
				OR ta.time_start = "'.$start_time.'"
				AND ta.time_finish = "'.$end.'"
				AND ta.day = "'.$day.'"
				AND ta.acad_yr = "'.$acad_year.'"
				AND ta.sem = "'.$sem.'")')
                ->get('faculty f');

		foreach ($query->result() as $r) 
		{	

			$result[] = array(
					$r->faculty_id,
					$r->facname
					);
		}

		return $result;	

	}

	public function reflect_services(){	//GETS FACULTY'S SUMMARY OF SERVICES

		$fac_id = $this->security->xss_clean($this->input->post('fac_id'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$result = array();

		$query = $this->db->select('sa.subj_code, sa.subj_desc, sa.sem, sa.section, sa.time_start, sa.time_end, sa.day, sa.room')
				->where('sa.faculty_id', $fac_id)
				->where('sa.acad_yr', $acad_year)
				->where('sa.sem', $sem)
                ->get('services_assign sa');
                // ->order_by('ta.day', 'asc');

		foreach ($query->result() as $r) 
		{

			$time = $r->time_start. ' - '. $r->time_end;

			$result[] = array(
					$r->subj_code,
					$r->subj_desc,
					$r->sem, 
					$r->section,
					$time,
					$r->day,
					$r->room
					);
		}

		return $result;	
	}

	public function reflect_section_minor(){	//GETS SECTION'S SUMMARY OF SCHEDULES

		$section_id = $this->security->xss_clean($this->input->post('section_id'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$result = array();

		$query = $this->db->select("s.subj_code, s.subj_desc, s.units,'MINOR' as 'facname', ta.time_start, ta.time_finish, ta.day, r.room_code")
				->where('sm.section', $section_id)
				->where('sm.acad_yr', $acad_year)
				->where('sm.sem', $sem)
				->where('sm.faculty_id IS NULL', NULL, FALSE)
				->join('subject_match sm','ta.subj_match_id = sm.subj_match_id')
				->join('subject s','sm.subj_id = s.subj_id')
				->join('room r','r.room_id = ta.room_id')
                ->get('teaching_assign_sched ta');
                // ->order_by('ta.day', 'asc');

		foreach ($query->result() as $r) 
		{
			
			$time = $r->time_start. ' - '. $r->time_finish;

			$result[] = array(
					$r->subj_code,
					$r->subj_desc,
					$r->units, 
					$r->facname, 
					$time,
					$r->day,
					$r->room_code
					);
		}

		return $result;	
	}

	public function validate_section_sched(){

		$sem = $this->security->xss_clean($this->input->post('sem'));
		$day = $this->security->xss_clean($this->input->post('day'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		$start_time = $this->security->xss_clean($this->input->post('start_time'));
		$end = $this->security->xss_clean($this->input->post('end'));
		$match_id = $this->security->xss_clean($this->input->post('match_id')); 
		$output; 


		$query2 = $this->db->where('ta.time_start > "'.$start_time.'"
									AND ta.time_start < "'.$end.'"
									AND ta.day = "'.$day.'"
									AND ta.acad_yr = "'.$acad_year.'"
									AND ta.sem = "'.$sem.'"
									AND ta.subj_match_id = '.$match_id.'
									OR ta.time_finish > "'.$start_time.'"
									AND ta.time_finish < "'.$end.'"
									AND ta.day = "'.$day.'"
									AND ta.acad_yr = "'.$acad_year.'"
									AND ta.sem = "'.$sem.'"
									AND ta.subj_match_id = '.$match_id.'
									OR ta.time_start = "'.$start_time.'"
									AND ta.time_finish = "'.$end.'"
									AND ta.day = "'.$day.'"
									AND ta.acad_yr = "'.$acad_year.'"
									AND ta.sem = "'.$sem.'"
									AND ta.subj_match_id = '.$match_id.'')
                			->get('teaching_assign_sched ta');

        $number_filter_row = $query2->num_rows(); 
        if ($number_filter_row != 0) {
        	
        	$output = 'EXISTING';	
        }
        else{
        	$output = 'AVAILABLE';
        }

        return $output;
	}

	public function load_section_table(){	//GETS FACULTY'S SUMMARY OF SCHEDULES

		$section_id = $this->security->xss_clean($this->input->post('section_id'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$result = array();

		$query = $this->db->select('s.subj_code, s.subj_desc, s.units, CONCAT("Prof. ", f.fname, " ", f.lname) as "facname", GROUP_CONCAT(CONCAT(LEFT(ta.time_start,5), "-", LEFT(ta.time_finish,5)) ORDER BY ta.teaching_sched_id asc SEPARATOR "/") as "times", GROUP_CONCAT(ta.day ORDER BY ta.teaching_sched_id asc SEPARATOR "/") as "days", GROUP_CONCAT(r.room_code ORDER BY ta.teaching_sched_id asc SEPARATOR "/") as "rooms", ta.subj_match_id')
				->where('sm.section', $section_id)
				->where('sm.acad_yr', $acad_year)
				->where('sm.sem', $sem)
				->join('subject_match sm ','ta.subj_match_id = sm.subj_match_id')
				->join('subject s','sm.subj_id = s.subj_id')
				->join('faculty f','f.faculty_id = sm.faculty_id', 'LEFT')
				->join('room r','r.room_id = ta.room_id')
				->group_by('ta.subj_match_id')
				->order_by('ta.day', 'asc')
                ->get('teaching_assign_sched ta');
                

		foreach ($query->result() as $r) 
		{
			$btn = '<button class="btn btn-sm  btn-info" id="btn_reschedule" data-id="'.$r->subj_match_id.'"><span class="fa  fa-rotate-left"></span></button>';
			$result[] = array(
					$r->subj_code,
					$r->subj_desc,
					$r->units, 
					$r->facname, 
					$r->times,
					$r->days,
					$r->rooms,
					$btn
					);
		}

		return $result;	
	}

	public function load_room_table(){	//GETS SECTION'S SUMMARY OF SCHEDULES

		$room_id = $this->security->xss_clean($this->input->post('room_id'));
		$acad_year = $this->security->xss_clean($this->input->post('acad_year'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$result = array();

		$query = $this->db->select('s.subj_code, s.subj_desc, s.units, CONCAT("Prof. ", f.fname, " ", f.lname) as "facname", c.course_code, se.year_lvl, se.section_desc, GROUP_CONCAT(CONCAT(LEFT(ta.time_start,5), "-", LEFT(ta.time_finish,5)) ORDER BY ta.teaching_sched_id asc SEPARATOR "/") as "times", GROUP_CONCAT(ta.day ORDER BY ta.teaching_sched_id asc SEPARATOR "/") as "days", ta.subj_match_id')
				->where('ta.room_id', $room_id)
				->where('ta.acad_yr', $acad_year)
				->where('ta.sem', $sem)
				->group_by('sm.subj_match_id')
				->join('subject_match sm','ta.subj_match_id = sm.subj_match_id')
				->join('section se','se.section_id = sm.section')
				->join('course c','c.course_id = se.course')
				->join('faculty f','f.faculty_id = sm.faculty_id')
				->join('subject s','sm.subj_id = s.subj_id')
				->join('room r','r.room_id = ta.room_id')
                ->get('teaching_assign_sched ta');

		foreach ($query->result() as $r) 
		{	

			$section = $r->course_code. ' ' . $r->year_lvl[0] . ' - ' . $r->section_desc;
			$btn = '<button class="btn btn-sm  btn-info" id="btn_reschedule" data-id="'.$r->subj_match_id.'"><span class="fa  fa-rotate-left"></span></button>';

			$result[] = array(
					$r->subj_code,
					$r->subj_desc,
					$r->units,
					$r->facname, 
					$section, 
					$r->times,
					$r->days,
					$btn
					);
		}

		return $result;	
	}

	public function get_subj_offering($acadyr, $sem, $course)
	{
		$result = array();

		$query1 = $this->db->select('year_lvl')
							->distinct('year_lvl')
                			->get('section');

        foreach ($query1->result() as $r) 
		{
			$query2 = $this->db->select('section_id, CONCAT(c.course_code, " ",  LEFT(s.year_lvl, 1), "-", s.section_desc) AS section')
								->join('course c', 's.course = c.course_id')
								->where('acad_yr', $acadyr)
								->where('course', $course)
								->where('year_lvl', $r->year_lvl)
                				->get('section s');

            foreach($query2->result() as $s) 
            {
            	$result[] = array(
		            		$s->section_id,
							$s->section,
							$r->year_lvl,
					);
            }
		}

		return $result;	
	}

	public function get_section_schedule($acadyr, $sem, $section_id)
	{
		$result = array();

		$query3 = $this->db->query('SELECT sub.subj_code, sub.subj_desc, units, lab_hrs + lec_hrs AS hours, GROUP_CONCAT(tas.day SEPARATOR "<br>") AS day, GROUP_CONCAT(DISTINCT CONCAT(TIME_FORMAT(tas.time_start, "%h:%i %p"), " - ", TIME_FORMAT(tas.time_finish, "%h:%i %p")) SEPARATOR "<br>") AS time_used, GROUP_CONCAT(DISTINCT room.room_code SEPARATOR "<br>") AS room
											FROM curriculum curri
											LEFT JOIN subject sub
											ON curri.subj_code = sub.subj_id
											LEFT JOIN subject_match sm
											ON sub.subj_id = sm.subj_id
											LEFT JOIN section sec
											ON sm.section = sec.section_id
											LEFT JOIN teaching_assign_sched tas
											ON sm.subj_match_id = tas.subj_match_id
											LEFT JOIN room room
											ON room.room_id = tas.room_id
											WHERE sm.acad_yr = "'.$acadyr.'" AND sm.sem = "'.$sem.'" AND sec.section_id ="'.$section_id.'"
											GROUP BY sub.subj_desc
											ORDER BY sub.subj_code');

               	foreach($query3->result() as $t)
               	{
               		($t->hours == 5)?$remarks = 'with lab':$remarks = '';
               		($t->day != null)?$day = $t->day:$day = '';
               		($t->time_used != null)?$time = $t->time_used:$time = '';
               		($t->room != null)?$room = $t->room:$room = '';
               		
               		$result[] = array(
               				$t->subj_code,
               				$t->subj_desc,
               				$t->units,
               				$t->hours,
               				$day,
               				$time,
               				$room,
               				$remarks,
					);
               	}

		return $result;	
	}

	public function get_section_total($acadyr, $sem, $section_id)
	{
		$result = array();
		
		$query3 = $this->db->query('SELECT SUM(units) AS total_units, SUM(lec_hrs + lab_hrs) AS total_hours
											FROM subject sub
											LEFT JOIN subject_match sm
											ON sub.subj_id = sm.subj_id
											LEFT JOIN section sec
											ON sm.section = sec.section_id
											WHERE sm.acad_yr = "'.$acadyr.'" AND sm.sem = "'.$sem.'" AND sec.section_id ="'.$section_id.'"');

               	foreach($query3->result() as $t)
               	{      
               		($t->total_units != null)?$units = $t->total_units:$units = '';
               		($t->total_hours != null)?$hours = $t->total_hours:$hours = '';

               		$result[] = array(
               				$units,
               				$hours,
					);
               	}

		return $result;	
	}

	public function get_faculty_details($faculty)
	{
		$result = array();

		$query = $this->db->select('a.account_id, CONCAT(f.lname, ", ", f.fname, " ", f.mname) AS fac_name, ft.fac_type_desc, "Computer and Information Sciences" AS college, d.dept_code, SUBSTR(d.dept_desc,15) AS dept_desc')
				->join('account a', 'f.faculty_id = a.faculty_id')
				->join('faculty_type ft', 'f.faculty_type = ft.fac_type_id')
				->join('department d', 'f.dept = d.dept_id')
				->where('f.faculty_id', $faculty)
                ->get('faculty f');

		foreach ($query->result() as $r) 
		{
			$result[] = array(
					$r->account_id,
					$r->fac_name,
					$r->fac_type_desc,
					$r->college,
					$r->dept_code,
					$r->dept_desc,
					);
		}

		return $result;
	}

	public function get_teaching_load($acadyr, $sem, $faculty, $load)
	{
		$result = array();
		
		$query = $this->db->query('SELECT s.subj_code, s.subj_desc, s.units, CONCAT(c.course_code, " ",  LEFT(sec.year_lvl, 1), "-", sec.section_desc) AS section, 
									GROUP_CONCAT(DISTINCT CONCAT(TIME_FORMAT(tas.time_start, "%h:%i %p"), " - ", TIME_FORMAT(tas.time_finish, "%h:%i %p")) SEPARATOR "<br>") AS time_used, 
									GROUP_CONCAT(tas.day SEPARATOR "<br>") AS day,
									GROUP_CONCAT(DISTINCT r.room_code SEPARATOR "<br>") AS room
								FROM faculty f JOIN subject_match sm
								ON f.faculty_id = sm.faculty_id
								JOIN SUBJECT s
								ON sm.subj_id = s.subj_id
								JOIN section sec
								ON sm.section = sec.section_id
								JOIN course c
								ON sec.course = c.course_id
								JOIN teaching_assign_sched tas
								ON sm.subj_match_id = tas.subj_match_id
								JOIN room r
								ON tas.room_id = r.room_id
								WHERE f.faculty_id = "'.$faculty.'" AND tas.acad_yr = "'.$acadyr.'" AND tas.sem = "'.$sem.'" AND tas.load_type = "'.$load.'"
								GROUP BY s.subj_id');

        foreach($query->result() as $t)
        {      
        	($t->subj_code != null)?$subj_code = $t->subj_code:$subj_code = '';
            ($t->subj_desc != null)?$subj_desc = $t->subj_desc:$subj_desc = '';
            ($t->units != null)?$units = $t->units:$units = '';
            ($t->section != null)?$section = $t->section:$section = '';
            ($t->time_used != null)?$time_used = $t->time_used:$time_used = '';
            ($t->day != null)?$day = $t->day:$day = '';
            ($t->room != null)?$room = $t->room:$room = '';

            $result[] = array(
               				$subj_code,
               				$subj_desc,
               				$units,
               				$section,
               				$time_used,
               				$day,
               				$room,
						);
        }

		return $result;
	}

	public function get_teaching_load_total($acadyr, $sem, $faculty, $load)
	{
		$result = array();
		
		$query = $this->db->query('SELECT SUM(TRIM(CAST(TIME_TO_SEC(TIMEDIFF(time_finish,time_start)) / (60 * 60) AS DECIMAL(10,1)))+0) AS hours 
								FROM teaching_assign_sched tas JOIN subject_match sm
								ON tas.subj_match_id = sm.subj_match_id
								WHERE sm.faculty_id = "'.$faculty.'" AND tas.acad_yr = "'.$acadyr.'" AND tas.sem = "'.$sem.'" AND tas.load_type = "'.$load.'"');

        foreach($query->result() as $t)
        {      
        	($t->hours != null)?$hours = $t->hours:$hours = '';
     
            $result[] = array(
               				$hours,
						);
        }

		return $result;
	}

	public function get_teaching_load_perday($acadyr, $sem, $faculty)
	{
		$result = array();
		
		$query = $this->db->query('SELECT tas.day AS day, SUM(TRIM(CAST(TIME_TO_SEC(TIMEDIFF(time_finish,time_start)) / (60 * 60) AS DECIMAL(10,1)))+0) AS hours, tas.load_type AS load_type
								FROM teaching_assign_sched tas JOIN subject_match sm
								ON tas.subj_match_id = sm.subj_match_id
								WHERE sm.faculty_id = "'.$faculty.'" AND tas.acad_yr = "'.$acadyr.'" AND tas.sem = "'.$sem.'"
								GROUP BY tas.load_type, tas.day
								ORDER BY FIELD(tas.day, "MONDAY", "TUESDAY", "WEDNESDAY", "THURSDAY", "FRIDAY", "SATURDAY", "SUNDAY")');

        foreach($query->result() as $t)
        {      
            $result[] = array(
               				$t->day,
               				$t->hours,
               				$t->load_type,
						);
        }

		return $result;
	}

	public function get_teaching_load_perday_total($acadyr, $sem, $faculty)
	{
		$result = array();
		
		$query = $this->db->query('SELECT tas.day AS day, SUM(TRIM(CAST(TIME_TO_SEC(TIMEDIFF(time_finish,time_start)) / (60 * 60) AS DECIMAL(10,1)))+0) AS total_hours
								FROM teaching_assign_sched tas JOIN subject_match sm
								ON tas.subj_match_id = sm.subj_match_id
								WHERE sm.faculty_id = "'.$faculty.'" AND tas.acad_yr = "'.$acadyr.'" AND tas.sem = "'.$sem.'"
								GROUP BY tas.day
								ORDER BY FIELD(tas.day, "MONDAY", "TUESDAY", "WEDNESDAY", "THURSDAY", "FRIDAY", "SATURDAY", "SUNDAY")');

        foreach($query->result() as $t)
        {      
            $result[] = array(
               				$t->day,
               				$t->total_hours,
						);
        }

		return $result;
	}

	public function get_other_time_perday($acadyr, $sem, $faculty)
	{
		$result = array();
		
		$query = $this->db->query('SELECT day, TRIM(CAST(TIME_TO_SEC(TIMEDIFF(time_finish,time_start)) / (60 * 60) AS DECIMAL(10,1)))+0 AS hours, load_type AS load_type
									FROM other_time_sched
									WHERE faculty_id = "'.$faculty.'" AND acad_yr = "'.$acadyr.'" AND sem = "'.$sem.'"
									GROUP BY load_type, day
									ORDER BY FIELD(day, "MONDAY", "TUESDAY", "WEDNESDAY", "THURSDAY", "FRIDAY", "SATURDAY", "SUNDAY")');

        foreach($query->result() as $t)
        {      
            $result[] = array(
               				$t->day,
               				$t->hours,
               				$t->load_type,
						);
        }

		return $result;
	}

	public function get_faculty_list()
	{
		$result = array();

		$q = $this->db->select('A.account_id, CONCAT(lname,", ",fname," ",mname) AS faculty_name, F.faculty_id')
				->join('account A', 'A.faculty_id = F.faculty_id')
                ->get('faculty F');

		foreach($q->result() as $r)
		{
			$btn = '<button class="btn btn-success" id="view_excel" data-id="'.$r->faculty_id.'"><span class="fa fa-file">&nbsp;&nbsp; Excel</span></button>
					<button class="btn btn-info" id="view_pdf" data-id="'.$r->faculty_id.'"><span class="fa fa-file">&nbsp;&nbsp; PDF</span></button>';
					
			$result[] = array(
					$r->account_id,
					$r->faculty_name,
					$btn
					);
		}

		return $result;
	}

}
?>