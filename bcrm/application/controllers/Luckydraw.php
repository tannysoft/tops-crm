<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Luckydraw extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->output->set_template('default');
		$this->load->helper('thai_date_helper');
		$this->load->model('coupon_model', 'coupon');
		$this->load->model('luckydraw_model', 'luckydraw');
		// check liff object
		$liff = $this->session->liff;
		if (empty($liff)) {
			$this->session->set_flashdata('redirect', current_url());
			redirect('redirect');
		}
	}

	public function index()
	{
		// get line uid
		$uid = $this->session->liff->profile->userId;
		//
		$registered	= $this->luckydraw->get_registered($uid);
		$rounds		= $this->luckydraw->get_lasted_round_with_winners();
		//
		$data = [
			'registered'	=> $registered,
			'rounds'		=> $rounds
		];
		$this->load->view('luckydraw', $data);
	}

	// public function winner()
	// {
	// 	// get line uid
	// 	$uid = $this->session->liff->profile->userId;
	// 	//
	// 	$winner		= $this->luckydraw->get_winner($uid);
	// 	$vouchers	= $this->luckydraw->get_winner_vouchers($uid);
	// 	foreach ($vouchers as $voucher) {
	// 		$voucher->used		= !empty($voucher->used_date);
	// 		$voucher->expired	= round((strtotime($voucher->expired_date)-time())/86400) <= 0;
	// 	}
	// 	//
	// 	$data = [
	// 		'winner'	=> $winner,
	// 		'vouchers'	=> $vouchers
	// 	];
	// 	$this->load->view('luckydraw-winner', $data);
	// }

	public function winner()
	{
		// get line uid
		$uid = $this->session->liff->profile->userId;
		// get coupon object
		$coupon = $this->luckydraw->get_winner_voucher_coupon($uid);
		if(empty($coupon)){
			return;
		}
		//
		$viewed			= NULL;
		$exceeded		= FALSE;
		$expired		= strtotime($coupon->expired_date) < time();
		$used			= !empty($coupon->used_date);
		//
		$data = [
			'coupon'	=> $coupon,
			'viewed'	=> !empty($viewed),
			'expired'	=> $expired,
			'exceeded'	=> $exceeded,
			'used'		=> $used
		];
		$this->load->view('luckydraw-winner', $data);
	}

	public function registered_ajax()
	{
		// set output
		$respond = array();
		$this->output->unset_template();
		$this->output->set_content_type('application/json');
		// get data
		$anwser		= $this->input->post('anwser');
		// get line profile
		$profile	= $this->session->liff->profile;
		// set conpon viewed record
		$this->luckydraw->set_registered(array(
			'uid'			=> $profile->userId,
			'display_name'	=> $profile->displayName,
			'picture_url'	=> $profile->pictureUrl,
			'anwser'		=> $anwser
		));
		// set respond
		$respond['registered']	= TRUE;
		$this->output->set_output(json_encode($respond));
	}

	public function voucher_used_ajax()
	{
		// set output
		$respond = array();
		$this->output->unset_template();
		$this->output->set_content_type('application/json');
		// get line data
		$uid		= $this->session->liff->profile->userId;
		$barcode	= $this->input->post('barcode');
		//
		if(empty($barcode)){
			// set respond
			$respond['used']	= FALSE;
		}else{
			// set conpon viewed record
			$this->luckydraw->set_winner_voucher_used($uid, $barcode);
			// set respond
			$respond['used']	= TRUE;
		}
		$this->output->set_output(json_encode($respond));
	}

}
