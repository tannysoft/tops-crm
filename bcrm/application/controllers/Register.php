<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
	// SMS
	const SMS_API_ENDPOINT			= 'http://203.146.186.186/molinkservice2017/sms.asmx/SingleSMS';
	const SMS_API_USERNAME			= 'TESTAPI199';
	const SMS_API_PASSWORD			= 'TESTAPI199';
	const SMS_API_SENDER			= 'LINETopsThailand';
	// OTP
	const OTP_API_ENDPOINT			= 'http://203.146.186.186/molink_otp_service/sms.asmx/OTPSend';
	const OTP_VALIDATE_API_ENDPOINT	= 'http://203.146.186.186/molink_otp_service/sms.asmx/OTPValidate';
	const OTP_API_USERNAME			= 'Tops_DGT';
	const OTP_API_PASSWORD			= '1sad012lo$';
	const OTP_API_SENDER			= 'TopsTH';
	const OTP_API_MESSAGE			= 'รหัส OTP ของคุณ คือ ${code}';
	// // SMS
	// const SMS_API_ENDPOINT			= 'http://203.146.186.186/molinkservice2017/sms.asmx/SingleSMS';
	// const SMS_API_USERNAME			= 'TESTAPI199';
	// const SMS_API_PASSWORD			= 'TESTAPI199';
	// const SMS_API_SENDER			= 'LINETopsThailand';
	// // OTP
	// const OTP_API_ENDPOINT			= 'http://203.146.186.186/molink_otp_service/sms.asmx/OTPSend';
	// const OTP_VALIDATE_API_ENDPOINT	= 'http://203.146.186.186/molink_otp_service/sms.asmx/OTPValidate';
	// const OTP_API_USERNAME			= 'OTPTEST60';
	// const OTP_API_PASSWORD			= 'OTPTEST60';
	// const OTP_API_SENDER			= 'MoLinkSMS';
	// const OTP_API_MESSAGE			= 'รหัส OTP ของคุณ คือ ${code}';
	// CUSTOMER
	const CUSTOMER_API_ENDPOINT				= 'https://superkoom.tops.co.th/api/getCustomerProfile/LINE/';
	const CUSTOMER_CONFIRMED_API_ENDPOINT	= 'https://corporate.tops.co.th/promotion/api/confirmLineRegister';

	public function __construct()
	{
		parent::__construct();
		$this->output->set_template('default');
		// library
		$this->load->library('session');
		$this->load->library('curl');
		// model
		$this->load->model('customer_model', 'customer');
		// check liff object
		$liff = $this->session->liff;
		if (empty($liff)) {
			$this->session->set_flashdata('redirect', current_url());
			redirect('redirect');
		}
	}

	public function index()
	{
		// get line profile
		$profile = $this->session->liff->profile;
		// get customer
		$customer = $this->customer->get_by(array(
			'uid' => $profile->userId
		));
		if(empty($customer)){
			$this->load->view('register');
		}else{
			//
			$this->session->set_userdata('customer', $customer);
			//
			$data = [
				'customer'	=> $this->session->customer
			];
			$this->load->view('register-thankyou', $data);
		}
	}

	public function otp()
	{
		if (empty($this->session->customer)) {
			redirect('register');
		}
		$this->load->view('register-otp');
	}

	public function confirm()
	{
		if (empty($this->session->customer) ||
			empty($this->session->phone) ||
			empty($this->session->otp)) {
			redirect('register');
		}
		if (empty($this->session->verified)) {
			redirect('register/otp');
		}
		//
		$data = [
			'customer'	=> $this->session->customer,
			'phone'		=> $this->session->phone
		];
		$this->load->view('register-confirm', $data);
	}

	public function thankyou()
	{
		if (empty($this->session->customer)) {
			redirect('register');
		}
		//
		$data = [
			'customer'	=> $this->session->customer
		];
		$this->load->view('register-thankyou', $data);
	}

	public function customer_verify_ajax()
	{
		// set output
		$respond = array();
		$this->output->unset_template();
		$this->output->set_content_type('application/json');
		//
		$phone = $this->input->post('phone');
		if (empty($phone)) {
			$respond['code']	= '4001';
			$respond['message']	= 'The phone number is empty!';
			$this->output->set_output(json_encode($respond));
			return;
		}
		// pre-check
		$customer = $this->customer->get_by('phone', $phone);
		if (!empty($customer)) {
			$respond['code']	= '4001';
			$respond['message']	= 'This phone number is registered!';
			$this->output->set_output(json_encode($respond));
			return;
		}
		//
		$remote = $this->curl->simple_get(self::CUSTOMER_API_ENDPOINT . $phone);
		$remote = json_decode($remote);
		//
		// $phone = '0898210806';
		if (isset($remote->code) && $remote->code == 200) {
			// set otp
			$this->curl->http_header('Content-Type', 'application/json');
			$otp = $this->curl->simple_post(self::OTP_API_ENDPOINT, json_encode(array(
				'username'	=> self::OTP_API_USERNAME,
				'password'	=> self::OTP_API_PASSWORD,
				'sender'	=> self::OTP_API_SENDER,
				'txtSMS'	=> self::OTP_API_MESSAGE,
				'txtMobile'	=> $phone
			)));
			if (empty($otp)) {
				$respond['code']	= '503';
				$respond['message']	= 'The OTP Service is temporarily unavailable.';
				$this->output->set_output(json_encode($respond));
				return;
			}
			$otp = json_decode($otp);
			// set customer data
			$customer = new stdClass();
			$customer->card_number		= $remote->data->cardNo;
			$customer->firstname		= $remote->data->preferLanguage === 'EN' ? $remote->data->firstNameEng : $remote->data->firstNameThai;
			$customer->lastname			= $remote->data->preferLanguage === 'EN' ? $remote->data->lastNameEng : $remote->data->lastNameThai;
			$customer->sbl_member_id	= $remote->data->sblMemberId;
			// "cardNo": 8027520570,
			// "firstNameEng": "JARUWAT",
			// "firstNameThai": "จารุวัฒน์",
			// "lastNameEng": "KUDSRIPROM",
			// "lastNameThai": "ขัดศรีพรหม",
			// "pointBalance": null,
			// "preferLanguage": "EN",
			// "sblMemberId": "9-006921657"
			$this->session->set_userdata('customer', $customer);
			$this->session->set_userdata('phone', $phone);
			$this->session->set_userdata('otp', $otp->d->Result->otp_id);
			// demo
			// $this->session->set_userdata('customer', $remote->data);
			// $this->session->set_userdata('phone', $phone);
			// $this->session->set_userdata('otp', '000000');
			// set respond 
			$respond['data']	= $this->session->userdata();
			$this->output->set_output(json_encode($respond));
		} elseif (isset($remote->code)) {
			$respond['code']	= $remote->code;
			$respond['message']	= $remote->message;
			// $this->output->set_status_header(404);
			$this->output->set_output(json_encode($respond));
		} else {
			if (ENVIRONMENT !== 'production') {
				$respond['debug']	= $remote;
			}
			// $this->output->set_status_header(500);
			$this->output->set_output(json_encode($respond));
		}

	}

	public function customer_otp_resend_ajax()
	{
		// set output
		$respond = array();
		$this->output->unset_template();
		$this->output->set_content_type('application/json');
		// set otp
		$this->curl->http_header('Content-Type', 'application/json');
		$otp = $this->curl->simple_post(self::OTP_API_ENDPOINT, json_encode(array(
			'username'	=> self::OTP_API_USERNAME,
			'password'	=> self::OTP_API_PASSWORD,
			'sender'	=> self::OTP_API_SENDER,
			'txtSMS'	=> self::OTP_API_MESSAGE,
			'txtMobile'	=> $this->session->phone
		)));
		$otp = json_decode($otp);
		// set current otp
		$this->session->set_userdata('otp', $otp->d->Result->otp_id);
		// set respond 
		$respond['resent']	= TRUE;
		$this->output->set_output(json_encode($respond));
	}

	public function customer_otp_verify_ajax()
	{
		// set output
		$respond = array();
		$this->output->unset_template();
		$this->output->set_content_type('application/json');
		//
		$code = $this->input->post('code');
		if (empty($code)) {
			$respond['message']	= 'The code is empty!';
			$this->output->set_output(json_encode($respond));
			return;
		}
		// otp velidator
		$this->curl->http_header('Content-Type', 'application/json');
		$opt = $this->curl->simple_post(self::OTP_VALIDATE_API_ENDPOINT, json_encode(array(
			'otp_id'	=> $this->session->otp,
			'code'		=> $code
		)));
		$opt = json_decode($opt);
		if (isset($opt->d) && $opt->d->IsCompleted && empty($opt->d->Result->code)) {
			$respond['verified']	= TRUE;
			$this->session->set_userdata('verified', TRUE);
			$this->output->set_output(json_encode($respond));
		} else {
			$respond['code']		= $opt->d->Result->code;
			$respond['message']		= $opt->d->Result->message;
			$respond['verified']	= FALSE;
			$this->session->set_userdata('verified', FALSE);
			$this->output->set_output(json_encode($respond));
		}
		// demo
		// $respond['verified']	= TRUE;
		// $this->session->set_userdata('verified', TRUE);
		// $this->output->set_output(json_encode($respond));
	}

	public function customer_confirm_ajax()
	{
		// set output
		$respond = array();
		$this->output->unset_template();
		$this->output->set_content_type('application/json');
		// get line profile
		$profile = $this->session->liff->profile;
		// add customer
		$inserted = $this->customer->insert(array(
			'uid'				=> $profile->userId,
			'display_name'		=> $profile->displayName,
			'picture_url'		=> $profile->pictureUrl,
			'card_number'		=> strval($this->session->customer->card_number),
			'firstname'			=> strval($this->session->customer->firstname),
			'lastname'			=> strval($this->session->customer->lastname),
			'sbl_member_id'		=> strval($this->session->customer->sbl_member_id),
			'phone'				=> strval($this->session->phone),
			'registered_date'	=> date('Y-m-d H:i:s')
		));
		// send confirm with server
		$confirmed = $this->curl->simple_post(self::CUSTOMER_CONFIRMED_API_ENDPOINT, array(
			'sbl_number'	=> $this->session->customer->sbl_member_id
		));
		$confirmed = json_decode($confirmed);
		// set respond 
		$respond['confirmed']	= TRUE;
		$this->output->set_output(json_encode($respond));
	}

	public function test_otp()
	{
		$phone = '0898210806';
		// simple call to remote url
		$this->curl->http_header('Content-Type', 'application/json');
		$remote = $this->curl->simple_post(self::OTP_API_ENDPOINT, json_encode(array(
			'username'	=> self::OTP_API_USERNAME,
			'password'	=> self::OTP_API_PASSWORD,
			'sender'	=> self::OTP_API_SENDER,
			'txtMobile'	=> '0898210806',
			'txtSMS'	=> 'รหัส OTP ของคณุ คือ ${code}',
		)));

		// {
		// 	"d":{
		// 		"Result":{
		// 			"__type":"MolinkService2016.sms+JSON_result",
		// 			"otp_id":"9896caf0-4d62-4b09-9863-762067521f14",
		// 			"message":null,
		// 			"code":null
		// 		},
		// 		"Id":1,
		// 		"Exception":null,
		// 		"Status":5,
		// 		"IsCanceled":false,
		// 		"IsCompleted":true,
		// 		"CreationOptions":0,
		// 		"AsyncState":null,
		// 		"IsFaulted":false
		// 	}
		// }

		var_dump($remote);
	}

	public function test_otp_validate()
	{
		// simple call to remote url
		$this->curl->http_header('Content-Type', 'application/json');
		$remote = $this->curl->simple_post(self::OTP_VALIDATE_API_ENDPOINT, json_encode(array(
			'otp_id'	=> '53e1b259-5bf1-4ab5-add0-4c37b76f7a85',
			'code'		=> '753500'
		)));

		// {
		// 	"d":{
		// 		"Result":{
		// 			"__type":"MolinkService2016.sms+JSON_result",
		// 			"otp_id":null,
		// 			"message":null,
		// 			"code":null
		// 		},
		// 		"Id":3,
		// 		"Exception":null,
		// 		"Status":5,
		// 		"IsCanceled":false,
		// 		"IsCompleted":true,
		// 		"CreationOptions":0,
		// 		"AsyncState":null,
		// 		"IsFaulted":false
		// 	}
		// }

		// {
		// 	"d":{
		// 		"Result":{
		// 			"__type":"MolinkService2016.sms+JSON_result",
		// 			"otp_id":null,
		// 			"message":"OTP has been verified previously",
		// 			"code":"1005"
		// 		},
		// 		"Id":4,
		// 		"Exception":null,
		// 		"Status":5,
		// 		"IsCanceled":false,
		// 		"IsCompleted":true,
		// 		"CreationOptions":0,
		// 		"AsyncState":null,
		// 		"IsFaulted":false
		// 	}
		// }

		var_dump($remote);
	}

	public function test_sms()
	{
		$phone = '0898210806';
		// simple call to remote url
		$remote = $this->curl->simple_post(self::SMS_API_ENDPOINT, array(
			'username'	=> self::SMS_API_USERNAME,
			'password'	=> self::SMS_API_PASSWORD,
			'sender'	=> self::SMS_API_SENDER,
			'txtMobile'	=> '66'.'898210806',
			'txtSMS'	=> 'OTP TEST'
		));

		$remote = '<?xml version="1.0" encoding="utf-8"?>
		<ArrayOfSmsReturn xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns="http://tempuri.org/">
			<SmsReturn>
				<Id>655760</Id>
				<strReturn>OK</strReturn>
			</SmsReturn>
		</ArrayOfSmsReturn>';

		$remote = new SimpleXMLElement($remote);
		$remote->SmsReturn->Id;
		var_dump($remote);
	}

	public function test_confirmed()
	{
		// send confirm with server
		$confirmed = $this->curl->simple_post(self::CUSTOMER_CONFIRMED_API_ENDPOINT, array(
			'sbl_number'	=> '9-006921657'
		));
		$confirmed = json_decode($confirmed);
		var_dump($confirmed);
	}

}
