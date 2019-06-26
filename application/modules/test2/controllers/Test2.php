<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test2 extends MX_Controller{
	
	// optional construct
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->database();
		$this->load->model('model_test2');

		$data['model2'] = $this->model_test2->method_test2();
		// $data['model2'] = null;

		$this->load->view('view_test2', $data);
	}
}