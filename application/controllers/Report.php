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
          
        $this->pdf->stream("subject_offering.pdf", array('Attachment' => 0));
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

	public function get_faculty_details()
	{
		$faculty = $this->security->xss_clean($this->input->post('faculty_id'));

		echo json_encode($this->getdata_model->get_faculty_details($faculty));
		exit();
	}

	public function get_teaching_load()
	{
		$acadyr = $this->security->xss_clean($this->input->post('acadyr'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$faculty = $this->security->xss_clean($this->input->post('faculty'));
		$load = $this->security->xss_clean($this->input->post('load'));

		echo json_encode($this->getdata_model->get_teaching_load($acadyr, $sem, $faculty, $load));
		exit();
	}

	public function get_teaching_load_total()
	{
		$acadyr = $this->security->xss_clean($this->input->post('acadyr'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$faculty = $this->security->xss_clean($this->input->post('faculty'));
		$load = $this->security->xss_clean($this->input->post('load'));

		echo json_encode($this->getdata_model->get_teaching_load_total($acadyr, $sem, $faculty, $load));
		exit();
	}

	public function get_teaching_load_perday()
	{
		$acadyr = $this->security->xss_clean($this->input->post('acadyr'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$faculty = $this->security->xss_clean($this->input->post('faculty'));

		echo json_encode($this->getdata_model->get_teaching_load_perday($acadyr, $sem, $faculty));
		exit();
	}

	public function get_teaching_load_perday_total()
	{
		$acadyr = $this->security->xss_clean($this->input->post('acadyr'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$faculty = $this->security->xss_clean($this->input->post('faculty'));

		echo json_encode($this->getdata_model->get_teaching_load_perday_total($acadyr, $sem, $faculty));
		exit();
	}

	public function get_other_time_perday()
	{
		$acadyr = $this->security->xss_clean($this->input->post('acadyr'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$faculty = $this->security->xss_clean($this->input->post('faculty'));

		echo json_encode($this->getdata_model->get_other_time_perday($acadyr, $sem, $faculty));
		exit();
	}

	public function faculty_sched_pdf()
	{
		$result1 = array();
		$result2 = array();
		$result3 = array();
		$result4 = array();
		$result5 = array();
		$result6 = array();
		$result7 = array();
		$result8 = array();

		$this->load->library('pdf');
			
		$acadyr = $this->security->xss_clean($this->input->get('acadyr'));
		$sem = $this->security->xss_clean($this->input->get('sem'));
		$faculty = $this->security->xss_clean($this->input->get('faculty'));

		$data['acadyr'] = $acadyr;
		$data['sem'] = $sem;
		$data['faculty'] = $faculty;
		
		$result1 = $this->getdata_model->get_faculty_details($faculty);
		$result2 = $this->getdata_model->get_teaching_load($acadyr, $sem, $faculty, 'R');
		$result3 = $this->getdata_model->get_teaching_load_total($acadyr, $sem, $faculty, 'R');
		$result4 = $this->getdata_model->get_teaching_load($acadyr, $sem, $faculty, 'PT');
		$result5 = $this->getdata_model->get_teaching_load_total($acadyr, $sem, $faculty, 'PT');
		$result6 = $this->getdata_model->get_teaching_load_perday($acadyr, $sem, $faculty);
		$result7 = $this->getdata_model->get_teaching_load_perday_total($acadyr, $sem, $faculty);
		$result8 = $this->getdata_model->get_other_time_perday($acadyr, $sem, $faculty);

		$data['details'] = $result1;
		$data['teach_r'] = $result2;
		$data['teach_r_total'] = $result3;
		$data['teach_pt'] = $result4;
		$data['teach_pt_total'] = $result5;
		$data['load_day'] = $result6;
		$data['load_day_tot'] = $result7;
		$data['other_time'] = $result8;

        $this->pdf->load_view('report/faculty_sched_pdf',$data);
        $this->pdf->set_paper('legal', 'portrait');
        $this->pdf->render();
        $this->pdf->output();
          
        $this->pdf->stream("faculty_assignment.pdf", array('Attachment' => 0));
	}

	public function official_time()
	{
		$data['faculty'] = $this->getdata_model->get_faculty_designee();

		$data['title'] = "IFSS | Official Time";
		$this->load->view('templates/header', $data);
		$this->load->view('report/report_official_time');
		$this->load->view('templates/footer');
	}

	public function room_schedule()
	{
		$data['title'] = "IFSS | Room and Laboratory Schedule";
		$data['rooms'] = $this->getdata_model->room_sorted();
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

	public function subj_pref_indiv_pdf()
	{
		$result1 = array();
		$result2 = array();
		$result3 = array();

		$this->load->library('pdf');
			
		$acadyr = $this->security->xss_clean($this->input->get('acadyr'));
		$sem = $this->security->xss_clean($this->input->get('sem'));
		$faculty = $this->security->xss_clean($this->input->get('faculty'));

		$data['acadyr'] = $acadyr;
		$data['sem'] = $sem;
		
		$result1 = $this->getdata_model->view_faculty($faculty);
		$result2 = $this->getdata_model->get_faculty_preftime($acadyr, $sem, $faculty);
		$result3 = $this->getdata_model->get_faculty_prefsub($acadyr, $sem, $faculty);

		$data['faculty'] = $result1;
		$data['time'] = $result2;
		$data['subj'] = $result3;

        $this->pdf->load_view('report/subj_pref_indiv_pdf',$data);
        $this->pdf->set_paper('legal', 'portrait');
        $this->pdf->render();
        $this->pdf->output();
          
        $this->pdf->stream("subject_preference_indiv.pdf", array('Attachment' => 0));
	}

	public function subj_pref_indiv_excel()
	{
		$result1 = array();
		$result2 = array();
		$result3 = array();
			
		$acadyr = $this->security->xss_clean($this->input->get('acadyr'));
		$sem = $this->security->xss_clean($this->input->get('sem'));
		$faculty = $this->security->xss_clean($this->input->get('faculty'));

		$data['acadyr'] = $acadyr;
		$data['sem'] = $sem;
		
		$result1 = $this->getdata_model->view_faculty($faculty);
		$result2 = $this->getdata_model->get_faculty_preftime($acadyr, $sem, $faculty);
		$result3 = $this->getdata_model->get_faculty_prefsub($acadyr, $sem, $faculty);

		$data['faculty'] = $result1;
		$data['time'] = $result2;
		$data['subj'] = $result3;

		$this->load->view('report/subj_pref_indiv_excel', $data);
	}

	public function subj_pref_pdf()
	{
		$result1 = array();
		
		$this->load->library('pdf');
			
		$acadyr = $this->security->xss_clean($this->input->get('acadyr'));
		$sem = $this->security->xss_clean($this->input->get('sem'));

		$data['acadyr'] = $acadyr;
		$data['sem'] = $sem;
		
		$result1 = $this->getdata_model->faculty();

		$data['faculty'] = $result1;

        $this->pdf->load_view('report/subj_pref_pdf',$data);
        $this->pdf->set_paper('legal', 'portrait');
        $this->pdf->render();
        $this->pdf->output();
          
        $this->pdf->stream("subject_preference.pdf", array('Attachment' => 0));
	}

	public function subj_pref_excel()
	{
		$result1 = array();
			
		$acadyr = $this->security->xss_clean($this->input->get('acadyr'));
		$sem = $this->security->xss_clean($this->input->get('sem'));

		$data['acadyr'] = $acadyr;
		$data['sem'] = $sem;
		
		$result1 = $this->getdata_model->faculty();

		$data['faculty'] = $result1;

		$this->load->view('report/subj_pref_excel', $data);
	}

	public function get_other_offtime()
	{
		$acadyr = $this->security->xss_clean($this->input->post('acadyr'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$faculty = $this->security->xss_clean($this->input->post('faculty_id'));

		echo json_encode($this->getdata_model->get_other_offtime($acadyr, $sem, $faculty));
		exit();
	}

	public function get_teaching_offtime()
	{
		$acadyr = $this->security->xss_clean($this->input->post('acadyr'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$faculty = $this->security->xss_clean($this->input->post('faculty_id'));

		echo json_encode($this->getdata_model->get_teaching_offtime($acadyr, $sem, $faculty));
		exit();
	}
	
	public function get_tot_day_offtime()
	{
		$acadyr = $this->security->xss_clean($this->input->post('acadyr'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$faculty = $this->security->xss_clean($this->input->post('faculty_id'));

		echo json_encode($this->getdata_model->get_tot_day_offtime($acadyr, $sem, $faculty));
		exit();
	}

	public function get_total_type_offtime()
	{
		$acadyr = $this->security->xss_clean($this->input->post('acadyr'));
		$sem = $this->security->xss_clean($this->input->post('sem'));
		$faculty = $this->security->xss_clean($this->input->post('faculty_id'));

		echo json_encode($this->getdata_model->get_total_type_offtime($acadyr, $sem, $faculty));
		exit();
	}

	public function official_sched_pdf()
	{
		$result1 = array();
		$result2 = array();
		$result3 = array();
		$result4 = array();
		$result5 = array();

		$this->load->library('pdf');
			
		$acadyr = $this->security->xss_clean($this->input->get('acadyr'));
		$sem = $this->security->xss_clean($this->input->get('sem'));
		$faculty = $this->security->xss_clean($this->input->get('faculty'));
		$sem_desc = $this->security->xss_clean($this->input->get('sem_desc'));

		$data['acadyr'] = $acadyr;
		$data['sem'] = $sem;
		$data['faculty'] = $faculty;
		
		$result1 = $this->getdata_model->get_faculty_details($faculty);
		$result2 = $this->getdata_model->get_other_offtime($acadyr, $sem_desc, $faculty);
		$result3 = $this->getdata_model->get_teaching_offtime($acadyr, $sem_desc, $faculty);
		$result4 = $this->getdata_model->get_tot_day_offtime($acadyr, $sem_desc, $faculty);
		$result5 = $this->getdata_model->get_total_type_offtime($acadyr, $sem_desc, $faculty);

		$data['details'] = $result1;
		$data['other_off'] = $result2;
		$data['teach_off'] = $result3;
		$data['total_day'] = $result4;
		$data['total_type'] = $result5;

        $this->pdf->load_view('report/official_sched_pdf',$data);
        $this->pdf->set_paper('legal', 'landscape');
        $this->pdf->render();
        $this->pdf->output();
          
        $this->pdf->stream("official_time.pdf", array('Attachment' => 0));
	}
} 

?>