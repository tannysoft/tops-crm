<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// set output
		$this->output->unset_template();
		$this->output->set_content_type('application/json');
	}

	public function liff_session()
	{
		// retrieve data via post data
		$liff = $this->input->post(NULL);
		// create liff & respond
		$this->session->set_userdata('liff', json_decode(json_encode($liff), FALSE));
		$this->output->set_output(json_encode(array(
			'liff' => $liff
		)));
	}

}
