<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		try{
			$response = [
				'status' => TRUE,
				'message' => 'welcome'
			];
			$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
			return;
		}catch(\Exception $e){
			$this->output
			->set_content_type('application/json')
			->set_output(json_encode(['status'=>FALSE,'error'=>$e->getMessage()]));
			return;
		}

	}
}
