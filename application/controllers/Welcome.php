<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('data_model', '', TRUE);
		$dataSet = $this->data_model->getTestData();
		$this->load->view('howdy', ['dataSet' => $dataSet]);
	
	}
}
