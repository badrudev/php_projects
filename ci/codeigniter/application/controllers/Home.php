<?php
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
	}
	public function index()
	{
		
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('index');
		$this->load->view('include/footer');
	}	public function contact()
	{
	    
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('contact-us');
	    $this->load->view('include/footer');
	}	public function career()
	{
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('Career');
		$this->load->view('include/footer');
	}	public function aboutUs()
	{
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('About-Us');
		$this->load->view('include/footer');
	}	public function businessPlan()
	{
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('Business-plan');
		$this->load->view('include/footer');
	}	public function features()
	{
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('features');
		$this->load->view('include/footer');
	}	public function ourTeam()
	{
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('Our-team');
		$this->load->view('include/footer');
	}


}