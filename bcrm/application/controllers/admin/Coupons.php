<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coupons extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->output->set_template('default');
		$this->load->model('coupon_model', 'coupon');
	}

	public function index()
	{
		$data = [
			'coupons' => $this->coupon->get_all()
		];
		$this->load->view('admin/coupon', $data);
	}
	
	public function add_ajax()
	{
		// init
		$config['upload_path']="./uploads";
		$config['allowed_types']='gif|jpg|png';
		$this->load->library('upload', $config);
		// set output
		$this->output->unset_template();
		$this->output->set_content_type('application/json');

		$respond = array();
		// input
		$post = $this->input->post(NULL, TRUE);
		//
		if($this->upload->do_upload('image')){
			$upload = $this->upload->data();
			// insert
			$this->coupon->insert(array(
				'title' => $post['title'],
				'image_url' => base_url('uploads/'. $upload['file_name']),
				'start' => $post['start'],
				'end' => $post['end'],
				'limit' => intval($post['limit']),
				'actived' => $post['actived']==='yes'
			));
			// respond
			$respond['debug']	= $post;
			$respond['data']	= $upload;
			$this->output->set_output(json_encode($respond));
		} else {
			// respond
			$respond['message'] = $this->upload->display_errors();
			$respond['data']	= $post;
			$this->output->set_output(json_encode($respond), 400);
		}
	}
}

/*

client_name: "12357327_668590456577885_322499020_n.jpg"
file_ext: ".jpg"
file_name: "12357327_668590456577885_322499020_n.jpg"
file_path: "D:/xampp/htdocs/tops-bcrm/uploads/"
file_size: 87.54
file_type: "image/jpeg"
full_path: "D:/xampp/htdocs/tops-bcrm/uploads/12357327_668590456577885_322499020_n.jpg"
image_height: 1080
image_size_str: "width="1080" height="1080""
image_type: "jpeg"
image_width: 1080
is_image: true
orig_name: "12357327_668590456577885_322499020_n.jpg"
raw_name: "12357327_668590456577885_322499020_n"

actived: "yes"
end: "2018-04-30"
limit: "100"
start: "2018-04-01"
title: "PP"
*/