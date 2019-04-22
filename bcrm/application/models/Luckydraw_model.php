<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Luckydraw_model extends MY_Model {

	public $before_create = array( 'created_at', 'updated_at' );
	public $before_update = array( 'updated_at' );

	protected $_table = 'luckydraw_register';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('coupon_model', 'coupon');
	}

	public function get_luckydraw()
	{
		//
		$today = date('Y-m-d H:i:s');
		//
		$this->_database->from('luckydraw_round');
		$this->_database->where('start <=', $today);
		$this->_database->where('end >=', $today);
		$this->_database->order_by('end', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	public function get_rounds($limit = 4)
	{
		//
		$today = date('Y-m-d H:i:s');
		//
		$this->_database->from('luckydraw_round');
		$this->_database->where('end <=', $today);
		$this->_database->order_by('end', 'desc');
		$this->_database->limit($limit);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_winners($rounds = NULL)
	{
		if(empty($rounds)){
			return NULL;
		}
		//
		$this->_database->from('luckydraw_winner');
		$this->_database->where('round_id', $rounds);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_lasted_round_with_winners($limit = 4)
	{
		$rounds = $this->get_rounds($limit);
		foreach ($rounds as $round) {
			$round->winners = $this->get_winners($round->id);
		}
		return $rounds;
	}

	public function get_winner($uid)
	{
		$this->_database->from('luckydraw_winner');
		$this->_database->where('uid', $uid);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_winner_voucher_coupon($uid)
	{
		//
		$voucher = NULL;
		$vouchers = $this->get_winner_vouchers($uid);
		foreach ($vouchers as $value) {
			$voucher = $value;
		}
		// no barcode => no coupon
		if (empty($voucher)) return NULL;
		// get coupon
		$coupon = $this->coupon->get_by('barcode', $voucher->barcode);
		// no barcode => no coupon
		if (empty($coupon)) return NULL;
		// add condition text
		if(empty($coupon->tac)){
			$coupon->tac = $this->coupon->get_default_condition_text($coupon->type);
		}
		// modify object
		$coupon->start			= $voucher->received_date;
		$coupon->end			= $voucher->expired_date;
		$coupon->received_date	= $voucher->received_date;
		$coupon->expired_date	= $voucher->expired_date;
		$coupon->used_date		= $voucher->used_date;
		// voucher coupon
		return $coupon;
	}

	public function get_winner_vouchers($uid)
	{
		$this->_database->from('luckydraw_winner_coupon');
		$this->_database->where('uid', $uid);
		$query = $this->db->get();
		return $query->result();
	}

	public function set_winner_voucher_used($uid, $barcode)
	{
		$this->_database->set('used_date', date('Y-m-d H:i:s'));
		$this->_database->where('uid', $uid);
		$this->_database->where('barcode', $barcode);
		$this->_database->update('luckydraw_winner_coupon');
		return TRUE;
	}

	public function set_registered($registered)
	{
		// get current luckydraw
		$luckydraw = $this->get_luckydraw();
		// save
		$this->_database->insert('luckydraw_register', array(
			'round_id'		=> $luckydraw->id,
			'uid'			=> $registered['uid'],
			'display_name'	=> $registered['display_name'],
			'picture_url'	=> $registered['picture_url'],
			'anwser'		=> $registered['anwser'],
			'date'			=> date('Y-m-d H:i:s')
		));
		return $this->_database->insert_id();
	}

	public function get_registered($uid = NULL)
	{
		return $this->get_by(array(
			'uid'	=> $uid
		));
	}

}
