<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller {

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

	public function index()
	{
		if($this->session->userdata('USERID'))
		{
			if($this->session->userdata('USERTYPE'))
				redirect(base_url('Maintenance'));
			else
				$this->load->view('login');
		}
		else
		{
			$this->load->view('login');
		}
	}

	public function validatecredentials()
	{
		if(!empty($_POST['username']) && !empty($_POST['password']))
		{
			$this->output->set_output(print(json_encode($this->validation_model->validateuser($_POST))));
			exit();
		}
		else
			redirect(base_url());
	}

	public function changepass()
	{
		if(!empty($_POST['password']))
		{
			echo ($this->validation_model->change_pass($_POST));
			exit();
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
