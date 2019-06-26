<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends MX_Controller{
	
	// optional construct
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->database();
		$this->load->model('model_test');

		$data['model'] = $this->model_test->method_test();

		$this->load->view('view_test', $data);
	}

	// this using another module
	public function index2()
	{
		echo '<h1>This Controller load model and view from module test2</h1>';
		$this->load->database();
		$this->load->model('test2/model_test2');

		$data['model2'] = $this->model_test2->method_test2();

		$this->load->view('test2/view_test2', $data);
	}
}