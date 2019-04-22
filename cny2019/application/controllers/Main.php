<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('campaign_close');
		// $data['unique_id'] = $this->uri->segment(1);
		// $this->load->view('customer_index', $data);
	}

	public function mass()
	{
		$this->load->view('campaign_close');
		// $data['lang'] = $this->uri->segment(1);
		// $this->load->view('customer_mass', $data);
	}

	public function robinson()
	{
		$this->load->view('campaign_close');
		//$this->load->view('customer_robinson');
	}

	/*public function refthe1()
	{
		echo '<a href="https://crm.tops.co.th/cny2019/the1">Link</a>';
	}*/

	public function the1()
	{
		$this->load->view('campaign_close');
		// $this->load->library('user_agent');
		// if ($this->agent->referrer()) {
		// 	$referer_url = $this->agent->referrer();
		// 	$referer_url = str_replace('http://my.the1.co.th/', '', $referer_url);
		// 	$referer_url = explode('_', $referer_url);
		// 	$referer_url = $referer_url[0];

		// 	redirect('https://crm.tops.co.th/the1/' . $referer_url, 'refresh');
		// } else {
		// 	redirect('https://crm.tops.co.th/cny2019/th/mass', 'refresh');
		// }
	}
}
