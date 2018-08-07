<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller 
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 // * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
    {
        parent::__construct();	
        $this->load->library('excel');	
    } 	

    public function subject_pref()
	{
		if($this->session->userdata('USERTYPE') == 'admin')
		{
			$data['faculty'] = $this->getdata_model->faculty();
			$data['subjects'] = $this->getdata_model->get_disc_subj();
			$data['acc_type'] = 'admin';
			$data['fac_id'] = $this->session->userdata('USERID');

			$data['title'] = "IFSS | Subject Preference";
			$this->load->view('templates/header', $data);
			$this->load->view('transaction/subj_pref');
			$this->load->view('templates/footer');
		}

		if($this->session->userdata('USERTYPE') == 'faculty')
		{
			$data['faculty'] = $this->getdata_model->faculty();
			$data['subjects'] = $this->getdata_model->get_disc_subj();
			$data['acc_type'] = 'faculty';
			$data['fac_id'] = $this->session->userdata('USERID');
			
			$data['title'] = "IFSS | Subject Preference";
			$this->load->view('templates/header_f', $data);
			$this->load->view('transaction/subj_pref');
			$this->load->view('templates/footer');
		}		
	}


	public function student_eval()
	{
		$data['dept'] = $this->getdata_model->department();
		
		$data['title'] = "IFSS | Student Evaluation";
		$this->load->view('templates/header', $data);
		$this->load->view('transaction/student_eval');
		$this->load->view('templates/footer');
	}

	public function student_import()
	{
		if(isset($_FILES["file"]["name"]))
		{
			echo ($this->savedata_model->add_student_eval($_POST));
			exit();
		}	
	}

	public function get_stud_eval()
	{
		$output = $this->getdata_model->student_eval();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function view_evals()
	{
		if(isset($_POST['eval_id']))
		{
			echo json_encode($this->getdata_model->view_eval($_POST));
			exit();
		}
	}

	//NEW CODE ADD THIS

	public function edit_evals()
	{
		echo ($this->savedata_model->edit_eval($_POST));
		exit();
	}

	public function get_evals()
	{
		$output = $this->getdata_model->get_evals($_POST);

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}


	public function new_schedule()
	{

		if(isset($_POST['subj_id'])){
			print_r('subj_id');
			exit();
		}

		else{
			$data['title'] = "IFSS | New Schedule";
			$data['faculty'] = $this->getdata_model->faculty();
			// $data['acad_year'] = $this->getdata_model->view_acad_year();
			// $data['sections'] = $this->getdata_model->section();
			$data['subjects'] = $this->getdata_model->get_disc_subj();
			$this->load->view('templates/header', $data);
			$this->load->view('transaction/new_sched');
			$this->load->view('templates/footer');
		}

	}

	public function update_schedule()
	{
		$title['title'] = "IFSS | Update Schedule";
		$this->load->view('templates/header', $title);
		$this->load->view('transaction/update_sched');
		$this->load->view('templates/footer');
	}

	public function services()
	{
		$title['title'] = "IFSS | Services";
		$this->load->view('templates/header', $title);
		$this->load->view('transaction/services');
		$this->load->view('templates/footer');
	}

	public function view_schedule()
	{
		if($this->session->userdata('USERTYPE') == 'admin')
		{
			$data['title'] = "IFSS | View Schedule";
			$data['acc_type'] = 'admin';

			$this->load->view('templates/header', $data);
			$this->load->view('transaction/view_sched');
			$this->load->view('templates/footer');
		}

		if($this->session->userdata('USERTYPE') == 'faculty')
		{
			$data['title'] = "IFSS | View Schedule";
			$data['acc_type'] = 'faculty';
			
			$this->load->view('templates/header_f', $data);
			$this->load->view('transaction/view_sched');
			$this->load->view('templates/footer');
		}
	}

// ===============================================================
// ---------------------UPDATED 7-11------------------------------
// ===============================================================

	public function add_pref_time()
	{

		echo ($this->savedata_model->add_pref_time($_POST));
		exit();
	}

	public function delete_pref_time()
	{
		echo ($this->savedata_model->delete_pref_time($_POST));
		exit();
	}

	public function get_pref_time()
	{
		echo json_encode($this->getdata_model->get_pref_time($_POST));
		exit();
	}

	public function add_pref_subj()
	{
		echo ($this->savedata_model->add_pref_subj($_POST));
		exit();
	}

	public function delete_pref_subj()
	{
		echo ($this->savedata_model->delete_pref_subj($_POST));
		exit();
	}

	
	// ===============================================================
	// ---------------------UPDATED 7-11------------------------------
	// ===============================================================

	public function get_prof_subj(){

		if(isset($_POST['fac_id']))
		{
			echo json_encode($this->getdata_model->get_prof_subj($_POST));
			exit();
		}
	}

	public function time_pref_table(){
		$output = $this->getdata_model->get_pref_time();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function delete_pref_time_id()
	{
		echo ($this->savedata_model->delete_pref_time_id($_POST));
		exit();
	}

	public function get_avail_sections(){

		echo json_encode($this->getdata_model->get_avail_sections($_POST));
		exit();
	}

} 

?>