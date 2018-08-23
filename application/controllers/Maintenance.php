<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance extends CI_Controller {

	function __construct()
    {
        parent::__construct();		
    } 	

    public function index()
    {
    	if($this->session->userdata('USERTYPE') == 'admin')
    	{
    		$data['title'] = "IFSS | Dashboard";
			$this->load->view('templates/header', $data);
			$this->load->view('maintenance/dashboard');
			$this->load->view('templates/footer');
    	}

    	if($this->session->userdata('USERTYPE') == 'faculty')
    	{
    		$data['dept'] = $this->getdata_model->department();
			$data['fac_type'] = $this->getdata_model->faculty_type();
			$data['spec'] = $this->getdata_model->specialization();
			$data['id'] = $this->session->userdata('USERID');

			$data['title'] = "IFSS | Faculty Profile";
			$this->load->view('templates/header_f', $data);
			$this->load->view('maintenance/faculty_prof');
			$this->load->view('templates/footer');
    	}
    }

	public function faculty()
	{
		$data['dept'] = $this->getdata_model->department();
		$data['fac_type'] = $this->getdata_model->faculty_type();
		$data['spec'] = $this->getdata_model->specialization();

		$data['title'] = "IFSS | Manage Faculty";
		$this->load->view('templates/header', $data);
		$this->load->view('maintenance/faculty');
		$this->load->view('templates/footer');
	}

	public function faculty_prof()
	{
		if($this->session->userdata('USERTYPE') == 'admin')
		{
			$data['dept'] = $this->getdata_model->department();
			$data['fac_type'] = $this->getdata_model->faculty_type();
			$data['spec'] = $this->getdata_model->specialization();
			$data['id'] = $this->session->userdata('USERID');

			$data['title'] = "IFSS | Faculty Profile";
			$this->load->view('templates/header', $data);
			$this->load->view('maintenance/faculty_prof');
			$this->load->view('templates/footer');
		}

		if($this->session->userdata('USERTYPE') == 'faculty')
		{
			$data['dept'] = $this->getdata_model->department();
			$data['fac_type'] = $this->getdata_model->faculty_type();
			$data['spec'] = $this->getdata_model->specialization();
			$data['id'] = $this->session->userdata('USERID');

			$data['title'] = "IFSS | Faculty Profile";
			$this->load->view('templates/header_f', $data);
			$this->load->view('maintenance/faculty_prof');
			$this->load->view('templates/footer');
		}
	}

	public function add_faculty()
	{
		echo ($this->savedata_model->add_faculty($_POST));
		exit();
	}

	public function get_faculty()
	{
		$output = $this->getdata_model->faculty();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function get_educbg($fac_id)
	{

		$output = $this->getdata_model->educ_bg($fac_id);

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function view_faculty()
	{
		if(isset($_POST['faculty_id']))
		{
			echo json_encode($this->getdata_model->view_faculty($_POST));
			exit();
		}
	}

	public function view_spec()
	{
		if(isset($_POST['faculty_id']))
		{
			echo json_encode($this->getdata_model->view_spec($_POST));
			exit();
		}
	}

	public function view_educbg()
	{
		if(isset($_POST['educbg_id']))
		{
			echo json_encode($this->getdata_model->view_educbg($_POST));
			exit();
		}
	}

	public function edit_faculty()
	{
		echo ($this->savedata_model->edit_faculty($_POST));
		exit();
	}

	public function edit_educbg()
	{
		echo ($this->savedata_model->edit_educbg($_POST));
		exit();
	}

	public function toggle_specs()
	{
		if(isset($_POST['act']))
		{
			echo ($this->savedata_model->toggle_spec($_POST));
			exit();
		}
	}

	public function get_stud_eval()
	{
		$output = $this->getdata_model->eval_summary($_POST);

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function subjects()
	{
		$data['spec'] = $this->getdata_model->specialization();

		$data['title'] = "IFSS | Manage Subject";
		$this->load->view('templates/header', $data);
		$this->load->view('maintenance/subjects');
		$this->load->view('templates/footer');
	}

	public function get_subjects()
	{
		$output = $this->getdata_model->subject();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function add_subjects()
	{
		echo ($this->savedata_model->add_subject($_POST));
		exit();
	}

	public function view_subjects()
	{
		if(isset($_POST['subj_code']))
		{
			echo json_encode($this->getdata_model->view_subject($_POST));
			exit();
		}
	}

	public function edit_subjects()
	{
		echo ($this->savedata_model->edit_subject($_POST));
		exit();
	}

	public function toggle_prereqs()
	{
		if(isset($_POST['act']))
		{
			echo ($this->savedata_model->toggle_prereq($_POST));
			exit();
		}
	}

	public function prerequisites()
	{
		$data['subjects'] = $this->getdata_model->subject();

		$data['title'] = "IFSS | Manage Subject Prerequisites";
		$this->load->view('templates/header', $data);
		$this->load->view('maintenance/prerequisite');
		$this->load->view('templates/footer');
	}

	public function get_prerequisites()
	{
		$output = $this->getdata_model->prerequisite();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function view_prerequisites()
	{
		if(isset($_POST['subj_code']))
		{
			echo json_encode($this->getdata_model->view_prerequisite($_POST));
			exit();
		}
	}

	public function add_prerequisites()
	{
		echo ($this->savedata_model->add_prerequisite($_POST));
		exit();
	}

	public function departments()
	{
		$title['title'] = "IFSS | Manage Departments";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/departments');
		$this->load->view('templates/footer');
	}

	public function get_departments()
	{
		$output = $this->getdata_model->department();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function add_departments()
	{
		echo ($this->savedata_model->add_department($_POST));
		exit();
	}

	public function view_departments()
	{
		if(isset($_POST['department_id']))
		{
			echo json_encode($this->getdata_model->view_department($_POST));
			exit();
		}
	}

	public function edit_departments()
	{
		echo ($this->savedata_model->edit_department($_POST));
		exit();
	}

	public function courses()
	{
		$data['dept'] = $this->getdata_model->department();

		$data['title'] = "IFSS | Manage Courses";
		$this->load->view('templates/header', $data);
		$this->load->view('maintenance/courses');
		$this->load->view('templates/footer');
	}

	public function get_courses()
	{
		$output = $this->getdata_model->course();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function add_courses()
	{
		echo ($this->savedata_model->add_course($_POST));
		exit();
	}

	public function view_courses()
	{
		if(isset($_POST['course_id']))
		{
			echo json_encode($this->getdata_model->view_course($_POST));
			exit();
		}
	}

	public function edit_courses()
	{
		echo ($this->savedata_model->edit_course($_POST));
		exit();
	}

	public function faculty_types()
	{
		$title['title'] = "IFSS | Manage Faculty Type";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/faculty_types');
		$this->load->view('templates/footer');
	}

	public function get_faculty_types()
	{
		$output = $this->getdata_model->faculty_type();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function add_faculty_types()
	{
		echo ($this->savedata_model->add_faculty_type($_POST));
		exit();
	}

	public function view_faculty_types()
	{
		if(isset($_POST['type_code']))
		{
			echo json_encode($this->getdata_model->view_faculty_type($_POST));
			exit();
		}
	}

	public function edit_faculty_types()
	{
		echo ($this->savedata_model->edit_faculty_type($_POST));
		exit();
	}

	public function load_limits()
	{
		$data['faculty_type'] = $this->getdata_model->faculty_type();

		$data['title'] = "IFSS | Manage Faculty Type Load Limit";
		$this->load->view('templates/header', $data);
		$this->load->view('maintenance/load_limits');
		$this->load->view('templates/footer');
	}

	public function get_load_limits()
	{
		$output = $this->getdata_model->load_limit();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function add_load_limits()
	{
		echo ($this->savedata_model->add_load_limit($_POST));
		exit();
	}

	public function view_load_limits()
	{
		if(isset($_POST['loadlimit_id']))
		{
			echo json_encode($this->getdata_model->view_load_limit($_POST));
			exit();
		}
	}

	public function edit_load_limits()
	{
		echo ($this->savedata_model->edit_load_limit($_POST));
		exit();
	}

	public function specializations()
	{
		$title['title'] = "IFSS | Manage Course Specialization";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/specialization');
		$this->load->view('templates/footer');
	}

	public function get_specializations()
	{
		$output = $this->getdata_model->specialization();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function add_specializations()
	{
		echo ($this->savedata_model->add_specialization($_POST));
		exit();
	}

	public function view_specializations()
	{
		if(isset($_POST['spec_id']))
		{
			echo json_encode($this->getdata_model->view_specialization($_POST));
			exit();
		}
	}

	public function edit_specializations()
	{
		echo ($this->savedata_model->edit_specialization($_POST));
		exit();
	}

	// public function acad_yr()
	// {
	// 	$title['title'] = "IFSS | Manage Academic Year";
	// 	$this->load->view('templates/header', $title);
	// 	$this->load->view('maintenance/acad_yr');
	// 	$this->load->view('templates/footer');
	// }

	// public function get_acad_yrs()
	// {
	// 	$output = $this->getdata_model->acad_yr();

	// 	$response = array(
	// 		'aaData' => $output,
	// 		'iTotalRecords' => count($output),
	// 		'iTotalDisplayRecords' => count($output),
	// 		'iDisplayStart' => 0
	// 	);
	// 	echo json_encode($response);
	// 	exit();
	// }

	// public function add_acad_yrs()
	// {
	// 	echo ($this->savedata_model->add_acad_yr($_POST));
	// 	exit();
	// }

	// public function view_acad_yrs()
	// {
	// 	if(isset($_POST['acadyr_id']))
	// 	{
	// 		echo json_encode($this->getdata_model->view_acad_yr($_POST));
	// 		exit();
	// 	}
	// }

	// public function edit_acad_yrs()
	// {
	// 	echo ($this->savedata_model->edit_acad_yr($_POST));
	// 	exit();
	// }

	public function curriculum_year()
	{
		$title['title'] = "IFSS | Manage Curriculum Year";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/curr_year');
		$this->load->view('templates/footer');
	}

	public function get_curriculum_years()
	{
		$output = $this->getdata_model->curriculum_year();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}


	public function add_curriculum_years()
	{
		echo ($this->savedata_model->add_curriculum_year($_POST));
		exit();
	}

	public function view_curriculum_years()
	{
		if(isset($_POST['year_code']))
		{
			echo json_encode($this->getdata_model->view_curriculum_year($_POST));
			exit();
		}
	}

	public function edit_curriculum_years()
	{
		echo ($this->savedata_model->edit_curriculum_year($_POST));
		exit();
	}

	public function curriculum()
	{
		$data['subjects'] = $this->getdata_model->subject();
		$data['curr_year'] = $this->getdata_model->curriculum_year();
		$data['department'] = $this->getdata_model->course();

		$data['title'] = "IFSS | Manage Curriculum";
		$this->load->view('templates/header', $data);
		$this->load->view('maintenance/curriculum');
		$this->load->view('templates/footer');
	}

	public function add_to_curriculum()
	{
		echo ($this->savedata_model->add_to_curriculum($_POST));
		exit();
	}

	public function get_curriculum()
	{
		$output = $this->getdata_model->get_curriculum();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function remove_from_curr()
	{
		echo ($this->savedata_model->remove_from_curr($_POST));
		exit();
	}

	public function get_used_curr()
	{
		echo ($this->getdata_model->get_used_curr());
		exit();
	}

	public function reset_used_curr()
	{
		echo ($this->savedata_model->reset_used_curr($_POST));
		exit();
	}

	public function validate_subject_curri()
	{
		echo ($this->getdata_model->validate_subject_curr($_POST));
		exit();
	}

	public function section()
	{
		// $data['acad_yr'] = $this->getdata_model->acad_yr();
		$data['dept'] = $this->getdata_model->course();

		$data['title'] = "IFSS | Manage Section";
		$this->load->view('templates/header', $data);
		$this->load->view('maintenance/sections');
		$this->load->view('templates/footer');
	}

	public function get_sections()
	{
		$output = $this->getdata_model->section();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function get_sectiontbl($val)
	{

		$output = $this->getdata_model->sectiontbl($val);

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function add_sections()
	{
		echo ($this->savedata_model->add_section($_POST));
		exit();
	}

	public function view_sections()
	{
		if(isset($_POST['section_id']))
		{
			echo json_encode($this->getdata_model->view_section($_POST));
			exit();
		}
	}

	public function edit_sections()
	{
		echo ($this->savedata_model->edit_section($_POST));
		exit();
	}

	public function room_labs()
	{
		// $data['acad_yr'] = $this->getdata_model->acad_yr();

		$data['title'] = "IFSS | Manage Rooms and Labs";
		$this->load->view('templates/header', $data);
		$this->load->view('maintenance/room_and_labs');
		$this->load->view('templates/footer');
	}

	public function get_rooms()
	{
		$output = $this->getdata_model->room();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function get_roomtbl()
	{
		$val = $_GET['loaddata'];

		$output = $this->getdata_model->roomtbl($val);

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function add_rooms()
	{
		echo ($this->savedata_model->add_room($_POST));
		exit();
	}

	public function view_rooms()
	{
		if(isset($_POST['room_id']))
		{
			echo json_encode($this->getdata_model->view_room($_POST));
			exit();
		}
	}

	public function edit_rooms()
	{
		echo ($this->savedata_model->edit_room($_POST));
		exit();
	}	

}
