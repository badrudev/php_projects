<?php
class Form extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('FormModel');
		$this->load->library('session');
		$this->load->helper('security');
		$this->load->library('form_validation');
	}

	public function contactus()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$data = $this->input->post();
				// print_r($data);die;
			//  echo json_encode(['status'=>$data]);
			//  return;
			if (!empty($data)) {
				$arr = array(
					'customer_name' => $data['name'],
					'customer_mobile' => $data['mobilenumber'],
					'customer_email' => $data['email'],
					'message' => $data['message'],
				);
				
				// print_r($arr);
				// die;
				if ($this->FormModel->sendMessage($arr)) {
					echo json_encode(['status'=>true]);
					//redirect(base_url('contactUs'));
				}else{
					echo json_encode(['status'=>false]);
				}
			}

			
		}
	}
}
