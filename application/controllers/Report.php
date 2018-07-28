<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller 
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
    } 	

    public function subject_offer()
	{
		$title['title'] = "IFSS | Subject Offering";
		$this->load->view('templates/header', $title);
		$this->load->view('report/report_subj_offer');
		$this->load->view('templates/footer');
	}

	public function faculty_schedule()
	{
		$title['title'] = "IFSS | Faculty Schedule";
		$this->load->view('templates/header', $title);
		$this->load->view('report/report_faculty_sched');
		$this->load->view('templates/footer');
	}

	public function room_schedule()
	{
		$title['title'] = "IFSS | Room and Laboratory Schedule";
		$this->load->view('templates/header', $title);
		$this->load->view('report/report_room_sched');
		$this->load->view('templates/footer');
	}

	public function subject_pref()
	{
		$title['title'] = "IFSS | Subject Preference";
		$this->load->view('templates/header', $title);
		$this->load->view('report/report_subj_pref');
		$this->load->view('templates/footer');
	}

	
} 

?>