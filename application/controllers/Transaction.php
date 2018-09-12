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
		$data['faculty'] = $this->getdata_model->faculty();
		
		$data['title'] = "IFSS | Student Evaluation";
		$this->load->view('templates/header', $data);
		$this->load->view('transaction/student_eval');
		$this->load->view('templates/footer');
	}

	public function load_subjects()
	{
		$data['faculty_type'] = $this->getdata_model->faculty_type();
		$data['courses'] = $this->getdata_model->course();
		$data['title'] = "IFSS | Load Subjects";
		$this->load->view('templates/header', $data);
		$this->load->view('transaction/load_subjects');
		$this->load->view('templates/footer');
	}

	public function get_subjects_per_sem()
	{
		if(isset($_POST['temp_sem']))
		{
		   echo json_encode($this->getdata_model->get_subject_per_sem($_POST));
		}
	}

	public function view_subjects_details()
	{
		if(isset($_POST['temp_subject']))
		{
			echo json_encode($this->getdata_model->view_subject_details($_POST));
			exit();
		}
	}

	public function view_subjects_sections()
	{
		echo json_encode($this->getdata_model->view_subject_sections($_POST));
		exit();
	}

	public function view_subject()
	{
		echo json_encode($this->getdata_model->view_subject_gen($_POST));
		exit();
	}

	public function view_subjects_faculty()
	{
		$output = $this->getdata_model->view_subject_faculty($_POST);

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);

		echo json_encode($response);
		exit();
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

	public function get_consec()
	{
		echo ($this->getdata_model->get_consec($_POST));
		exit();
	}

	public function get_eval_summary()
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

	public function new_schedule()
	{	
		$data['courses'] = $this->getdata_model->course();
		$data['rooms'] = $this->getdata_model->room_sorted();

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

	public function get_services()
	{
		$output = $this->getdata_model->services();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function get_services_search()
	{
		$output = $this->getdata_model->get_service_search($_POST);

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function add_services()
	{
		echo ($this->savedata_model->add_service($_POST));
		exit();
	}

	public function view_services()
	{
		if(isset($_POST['service_id']))
		{
			echo json_encode($this->getdata_model->view_service($_POST));
			exit();
		}
	}

	public function get_services_sched()
	{
		$output = $this->getdata_model->service_sched($_POST);

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);

		echo json_encode($response);
		exit();
	}

	public function view_services_sched()
	{
		if(isset($_POST['service_sched_id']))
		{
			echo json_encode($this->getdata_model->view_service_sched($_POST));
			exit();
		}
	}

	public function edit_services_sched()
	{
		echo ($this->savedata_model->edit_service_sched($_POST));
		exit();
	}

	public function delete_services_sched()
	{
		if(isset($_POST['service_sched_id']))
		{
			echo ($this->savedata_model->delete_service_sched($_POST));
			exit();
		}
	}

	public function edit_services()
	{
		echo ($this->savedata_model->edit_service($_POST));
		exit();
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

	public function get_avail_rooms(){

		echo json_encode($this->getdata_model->get_avail_rooms($_POST));
		exit();
	}

	public function add_to_sched()
	{
		echo ($this->savedata_model->add_to_sched($_POST));
		exit();
	}

	public function load_sched_table(){
		
		$output = $this->getdata_model->load_sched_table();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function get_units_used(){

		echo json_encode($this->getdata_model->get_units_used($_POST));
		exit();
	}

	public function reflect_sched_table(){
		
		echo json_encode($this->getdata_model->reflect_sched_table($_POST));
		exit();
	}

	public function get_fac_type(){

		echo json_encode($this->getdata_model->get_fac_type($_POST));
		exit();
	}

	public function get_regular_controller(){
		
		echo json_encode($this->getdata_model->get_regular_controller($_POST));
		exit();
	}

	public function set_sections_to_subj(){
		
		echo json_encode($this->getdata_model->get_prof_subj($_POST));
			exit();
	}

	public function get_faculty_specs(){

		echo json_encode($this->getdata_model->get_faculty_specs($_POST));
			exit();
	}

	public function add_subj_match()
	{
		echo ($this->savedata_model->add_subj_match($_POST));
		exit();
	}

	public function view_facload_tbl(){
		
		$output = $this->getdata_model->view_facload_tbl();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function get_all_sections(){

		echo json_encode($this->getdata_model->get_all_sections($_POST));
			exit();
	}

	public function get_section_load_tbl(){
		
		$output = $this->getdata_model->get_section_load_tbl();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function delete_match_data()
	{
		if(isset($_POST['match_id']))
		{
			echo ($this->savedata_model->delete_match_data($_POST));
			exit();
		}
	}

	public function get_prof_load(){

		echo json_encode($this->getdata_model->get_prof_load($_POST));
			exit();

	}

	public function get_subj_details(){

		echo json_encode($this->getdata_model->get_subj_details($_POST));
			exit();

	}

	public function get_faculty_type(){

		echo json_encode($this->getdata_model->get_faculty_type($_POST));
			exit();

	}

	public function get_avail_labs(){

		echo json_encode($this->getdata_model->get_avail_labs($_POST));
		exit();
	}

	public function remove_sched()
	{
		echo ($this->savedata_model->remove_sched($_POST));
		exit();
	}

	public function reflect_section_table(){

		echo json_encode($this->getdata_model->reflect_section_table($_POST));
		exit();
	}

	public function reflect_room_table(){

		echo json_encode($this->getdata_model->reflect_room_table($_POST));
		exit();
	}

	public function get_minor_subj(){

		echo json_encode($this->getdata_model->get_minor_subj($_POST));
		exit();
	}

	public function view_spec_service()
	{
		echo json_encode($this->getdata_model->view_service_sched($_POST));
			exit();

	}

	public function get_avail_prof()
	{
		echo json_encode($this->getdata_model->get_avail_prof($_POST));
			exit();

	}

	public function assign_prof()
	{
		echo ($this->savedata_model->assign_prof($_POST));
		exit();
	}

	public function reflect_services(){

		echo json_encode($this->getdata_model->reflect_services($_POST));
		exit();
	}

	public function minor_first_save()
	{
		echo ($this->savedata_model->minor_first_save($_POST));
		exit();
	}

	public function minor_second_save()
	{
		echo ($this->savedata_model->minor_second_save($_POST));
		exit();
	}

	public function reflect_section_minor(){

		echo json_encode($this->getdata_model->reflect_section_minor($_POST));
		exit();
	}

	public function validate_section_sched(){

		echo json_encode($this->getdata_model->validate_section_sched($_POST));
		exit();
	}

	public function load_section_table(){
		
		$output = $this->getdata_model->load_section_table();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function load_room_table(){
		
		$output = $this->getdata_model->load_room_table();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function view_facloads(){
		
		echo json_encode($this->getdata_model->view_facload_tbl($_POST));
		exit();
	}

} 

?>