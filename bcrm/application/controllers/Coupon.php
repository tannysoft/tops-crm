<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coupon extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->output->set_template('default');
		$this->load->helper('thai_date_helper');
		$this->load->model('coupon_model', 'coupon');
		// check liff object
		$liff = $this->session->liff;
		if (empty($liff)) {
			$this->session->set_flashdata('redirect', current_url());
			redirect('redirect');
		}
	}

	public function index()
	{
		$this->weekly();
	}

	public function welcome()
	{
		//
		$barcode = $this->input->get('barcode');
		// get line uid
		$uid = $this->session->liff->profile->userId;
		// get coupon
		$coupon = $this->coupon->get_welcome_coupon($uid, $barcode);
		if(empty($coupon)){
			return;
		}
		// add condition text
		if(empty($coupon->tac)){
			$coupon->tac = $this->coupon->get_default_condition_text($coupon->type);
		}
		// set conpon viewed record
		$this->coupon->set_welcome_conpon_viewed($uid, $barcode);
		//
		$viewed		= $this->coupon->get_welcome_conpon_viewed($uid, $barcode);
		$expired	= strtotime($viewed->expired_date) < time();
		$exceeded	= $this->coupon->is_welcome_conpon_exceeded($uid, $barcode);
		$used		= $this->coupon->is_welcome_conpon_used($uid, $barcode);
		//
		$coupon->start	= $viewed->date;
		$coupon->end	= $viewed->expired_date;
		//
		$data = [
			'coupon'	=> $coupon,
			'viewed'	=> !empty($viewed),
			'expired'	=> $expired,
			'exceeded'	=> $exceeded,
			'used'		=> $used
		];
		$this->load->view('coupon', $data);
	}

	public function weekly()
	{
		//
		$barcode = $this->input->get('barcode');
		// get line uid
		$uid = $this->session->liff->profile->userId;
		// get coupon
		$coupon = $this->coupon->get_weekly_coupon($uid, $barcode);
		if(empty($coupon)){
			return;
		}
		// add condition text
		if(empty($coupon->tac)){
			$coupon->tac = $this->coupon->get_default_condition_text($coupon->type);
		}
		// set conpon viewed record
		$this->coupon->set_weekly_conpon_viewed($uid, $barcode);
		//
		$viewed		= $this->coupon->is_weekly_conpon_viewed($uid, $barcode);
		$expired	= strtotime($coupon->end) < time();
		$exceeded	= $this->coupon->is_weekly_conpon_exceeded($uid, $barcode);
		$used		= $this->coupon->is_weekly_conpon_used($uid, $barcode);
		//
		$data = [
			'coupon'	=> $coupon,
			'viewed'	=> $viewed,
			'expired'	=> $expired,
			'exceeded'	=> $exceeded,
			'used'		=> $used
		];
		$this->load->view('coupon', $data);
	}

	public function welcome_used_ajax()
	{
		// set output
		$respond = array();
		$this->output->unset_template();
		$this->output->set_content_type('application/json');
		// get barcode data
		$barcode = $this->input->post('barcode');
		// get line uid
		$uid = $this->session->liff->profile->userId;
		// set conpon viewed record
		$this->coupon->set_welcome_conpon_used($uid, $barcode);
		// set respond 
		$respond['used']	= TRUE;
		$this->output->set_output(json_encode($respond));
	}

	public function weekly_used_ajax()
	{
		// set output
		$respond = array();
		$this->output->unset_template();
		$this->output->set_content_type('application/json');
		// get barcode data
		$barcode = $this->input->post('barcode');
		// get line uid
		$uid = $this->session->liff->profile->userId;
		// set conpon viewed record
		$this->coupon->set_weekly_conpon_used($uid, $barcode);
		// set respond 
		$respond['used']	= TRUE;
		$this->output->set_output(json_encode($respond));
	}

}
