<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Redirect extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->output->set_template('blank');
	}

	public function index()
	{
		if (empty($this->session->redirect)) {
			redirect('/');
		}
		$this->load->view('redirect');
	}
}
