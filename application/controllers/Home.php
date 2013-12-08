<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('Test_model');
		$test_info = $this->Test_model->get_test_info();

		$view_data = array(
			'first_name' => $test_info->fname,
			'last_name' => $test_info->lname
		);

		$this->load->view('home', $view_data);
	}
}