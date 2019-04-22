<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends MY_Model {

	// public $before_create = array( 'created_at', 'updated_at' );
	// public $before_update = array( 'updated_at' );

	protected $_table = 'customer_line_map';

	public function __construct()
	{
		parent::__construct();
	}

}