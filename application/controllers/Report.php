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
		$data['department'] = $this->getdata_model->course();

		$data['title'] = "IFSS | Subject Offering";
		$this->load->view('templates/header', $data);
		$this->load->view('report/report_subj_offer');
		$this->load->view('templates/footer');
	}

	public function get_subject_offering()
	{
		echo json_encode($this->getdata_model->get_subj_offering($_POST));
		exit();
	}

	public function get_section_schedule()
	{
		echo json_encode($this->getdata_model->get_section_schedule($_POST));
		exit();
	}

	public function get_section_total()
	{
		echo json_encode($this->getdata_model->get_section_total($_POST));
		exit();
	}

	public function subj_offering_pdf()
	{
			$this->load->library('pdf');
			$data['product'] = 'HELLO';

            $this->pdf->load_view('report/subj_offer_pdf',$data);
            $this->pdf->set_paper('legal', 'portrait');
            $this->pdf->render();
            $this->pdf->output();
          
            $this->pdf->stream("subject_offering", array('Attachment' => 0));
	}

	public function faculty_schedule()
	{
		$data['faculty'] = $this->getdata_model->faculty();

		$data['title'] = "IFSS | Faculty Schedule";
		$this->load->view('templates/header', $data);
		$this->load->view('report/report_faculty_sched');
		$this->load->view('templates/footer');
	}

	public function room_schedule()
	{
		$data['title'] = "IFSS | Room and Laboratory Schedule";
		$this->load->view('templates/header', $data);
		$this->load->view('report/report_room_sched');
		$this->load->view('templates/footer');
	}

	public function subject_pref()
	{
		$data['title'] = "IFSS | Subject Preference";
		$this->load->view('templates/header', $data);
		$this->load->view('report/report_subj_pref');
		$this->load->view('templates/footer');
	}

	
} 

?>