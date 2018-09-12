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
		$acadyr = $this->security->xss_clean($this->input->post('acadyr'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$course = $this->security->xss_clean($this->input->post('course'));

		echo json_encode($this->getdata_model->get_subj_offering($acadyr, $sem, $course));
		exit();
	}

	public function get_section_schedule()
	{
		$acadyr = $this->security->xss_clean($this->input->post('acadyr'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$section_id = $this->security->xss_clean($this->input->post('section_id'));

		echo json_encode($this->getdata_model->get_section_schedule($acadyr, $sem, $section_id));
		exit();
	}

	public function get_section_total()
	{
		$acadyr = $this->security->xss_clean($this->input->post('acadyr'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$section_id = $this->security->xss_clean($this->input->post('section_id'));

		echo json_encode($this->getdata_model->get_section_total($acadyr, $sem, $section_id));
		exit();
	}

	public function subj_offering_pdf()
	{
		$result1 = array();

		$this->load->library('pdf');
			
		$acadyr = $this->security->xss_clean($this->input->get('acadyr'));
		$sem = $this->security->xss_clean($this->input->get('sem'));
		$data['course'] = $this->security->xss_clean($this->input->get('course'));
		$cval = $this->security->xss_clean($this->input->get('cval'));

		$data['acadyr'] = $acadyr;
		$data['sem'] = $sem;
		$data['cval'] = $cval;
		
		$result1 = $this->getdata_model->get_subj_offering($acadyr, $sem, $cval);

		$data['section'] = $result1;

        $this->pdf->load_view('report/subj_offer_pdf',$data);
        $this->pdf->set_paper('legal', 'portrait');
        $this->pdf->render();
        $this->pdf->output();
          
        $this->pdf->stream("subject_offering", array('Attachment' => 0));
	}

	public function subj_offering_excel()
	{
		$result1 = array();
			
		$acadyr = $this->security->xss_clean($this->input->get('acadyr'));
		$sem = $this->security->xss_clean($this->input->get('sem'));
		$data['course'] = $this->security->xss_clean($this->input->get('course'));
		$cval = $this->security->xss_clean($this->input->get('cval'));

		$data['acadyr'] = $acadyr;
		$data['sem'] = $sem;
		$data['cval'] = $cval;
		
		$result1 = $this->getdata_model->get_subj_offering($acadyr, $sem, $cval);

		$data['section'] = $result1;

        $this->load->view('report/subj_offer_excel', $data);
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

	public function get_faculty_list()
	{
		$output = $this->getdata_model->get_faculty_list();

		$response = array(
			'aaData' => $output,
			'iTotalRecords' => count($output),
			'iTotalDisplayRecords' => count($output),
			'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	
} 

?>