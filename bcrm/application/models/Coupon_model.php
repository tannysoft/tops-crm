<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coupon_model extends MY_Model {

	public $before_create = array( 'created_at', 'updated_at' );
	public $before_update = array( 'updated_at' );

	protected $_table = 'cv_master';

	public function __construct()
	{
		parent::__construct();
	}

	/*****************/
	/* Weekly Coupon */
	/*****************/

	public function get_weekly_coupon($uid = NULL, $barcode = NULL, $today = NULL)
	{
		// with barcode
		if (!empty($barcode)) {
			return $this->get_by(array(
				'group !=' => 'WELCOME',
				'barcode' => $barcode
			));
		}
		// without barcode
		if (empty($today)) {
			$today = date('Y-m-d H:i:s');
		}
		return $this->get_by(array(
			'group' => 'INSTANT',
			'start <=' => $today,
			'end >=' => $today
		));
	}

	public function set_weekly_conpon_viewed($uid, $barcode = NULL)
	{
		// get current coupon
		$coupon = $this->get_weekly_coupon($uid, $barcode);
		if (empty($coupon)) {
			return FALSE;
		}
		// get line profile
		$profile = $this->session->liff->profile;
		// save
		$this->_database->insert('coupon_viewed', array(
			'uid'			=> $uid,
			'display_name'	=> $profile->displayName,
			'picture_url'	=> $profile->pictureUrl,
			'barcode'		=> $coupon->barcode,
			'date'			=> date('Y-m-d H:i:s')
		));
		return $this->_database->insert_id();
	}

	public function set_weekly_conpon_used($uid, $barcode = NULL)
	{
		// get current coupon
		$coupon = $this->get_weekly_coupon($uid, $barcode);
		if (empty($coupon)) {
			return FALSE;
		}
		// get line profile
		$profile = $this->session->liff->profile;
		// save
		$this->_database->insert('coupon_used', array(
			'uid'			=> $uid,
			'display_name'	=> $profile->displayName,
			'picture_url'	=> $profile->pictureUrl,
			'barcode'		=> $coupon->barcode,
			'date'			=> date('Y-m-d H:i:s')
		));
		return $this->_database->insert_id();
	}

	public function is_weekly_conpon_viewed($uid, $barcode = NULL)
	{
		// get current coupon
		$coupon = $this->get_weekly_coupon($uid, $barcode);
		if (empty($coupon)) {
			return FALSE;
		}
		// check
		$this->_database->select('COUNT(*) count');
		$this->_database->from('coupon_viewed');
		$this->_database->where('barcode', $coupon->barcode);
		$this->_database->where('uid', $uid);
		$query = $this->db->get();
		$row = $query->row();
		return $row->count;
	}

	public function is_weekly_conpon_exceeded($uid, $barcode = NULL)
	{
		// get current coupon
		$coupon = $this->get_weekly_coupon($uid, $barcode);
		if (empty($coupon)) {
			return FALSE;
		}
		// no limit
		if (empty($coupon->max_used)) {
			return FALSE;
		}
		// check
		$this->_database->select('COUNT(*) count');
		$this->_database->from('coupon_used');
		$this->_database->where('barcode', $coupon->barcode);
		$query = $this->db->get();
		$row = $query->row();
		return $row->count >= $coupon->max_used;
	}

	public function is_weekly_conpon_used($uid, $barcode = NULL)
	{
		// get current coupon
		$coupon = $this->get_weekly_coupon($uid, $barcode);
		if (empty($coupon)) {
			return FALSE;
		}
		// check
		$this->_database->from('coupon_used');
		$this->_database->where('barcode', $coupon->barcode);
		$this->_database->where('uid', $uid);
		$query = $this->db->get();
		return $query->row();
	}

	/******************/
	/* Welcome Coupon */
	/******************/

	public function get_welcome_coupon($uid = NULL, $barcode = NULL, $today = NULL)
	{
		// with barcode
		if (!empty($barcode)) {
			return $this->get_by(array(
				'group' => 'WELCOME',
				'barcode' => $barcode
			));
		}
		// without barcode
		if (empty($today)) {
			$today = date('Y-m-d H:i:s');
		}
		return $this->get_by(array(
			'group' => 'WELCOME',
			'start <=' => $today,
			'end >=' => $today
		));
	}

	public function set_welcome_conpon_viewed($uid, $barcode = NULL)
	{
		// get current coupon
		$coupon = $this->get_welcome_coupon($uid, $barcode);
		if (empty($coupon)) {
			return FALSE;
		}
		// pre-check
		$this->_database->from('coupon_viewed');
		$this->_database->where('uid', $uid);
		$this->_database->where('barcode', $coupon->barcode);
		$query = $this->db->get();
		$row = $query->row();
		if($row){
			return $row->id;
		}
		$expiry	= '+2 day';
		// get line profile
		$profile = $this->session->liff->profile;
		// save
		$this->_database->insert('coupon_viewed', array(
			'uid'			=> $uid,
			'display_name'	=> $profile->displayName,
			'picture_url'	=> $profile->pictureUrl,
			'barcode'		=> $coupon->barcode,
			'date'			=> date('Y-m-d H:i:s'),
			'expired_date'	=> date('Y-m-d 23:59:59', strtotime($expiry))
		));
		return $this->_database->insert_id();
	}

	public function set_welcome_conpon_used($uid, $barcode = NULL)
	{
		// get current coupon
		$coupon = $this->get_welcome_coupon($uid, $barcode);
		if (empty($coupon)) {
			return FALSE;
		}
		// get line profile
		$profile = $this->session->liff->profile;
		// save
		$this->_database->insert('coupon_used', array(
			'uid'			=> $uid,
			'display_name'	=> $profile->displayName,
			'picture_url'	=> $profile->pictureUrl,
			'barcode'		=> $coupon->barcode,
			'date'			=> date('Y-m-d H:i:s')
		));
		return $this->_database->insert_id();
	}

	public function get_welcome_conpon_viewed($uid, $barcode = NULL)
	{
		// get current coupon
		$coupon = $this->get_welcome_coupon($uid, $barcode);
		if (empty($coupon)) {
			return FALSE;
		}
		$this->_database->from('coupon_viewed');
		$this->_database->where('barcode', $coupon->barcode);
		$this->_database->where('uid', $uid);
		$query = $this->db->get();
		return $query->row();
	}

	public function is_welcome_conpon_viewed($uid, $barcode = NULL)
	{
		return empty($this->get_welcome_conpon_viewed($uid));
	}

	public function is_welcome_conpon_exceeded($uid, $barcode = NULL)
	{
		// get current coupon
		$coupon = $this->get_welcome_coupon($uid, $barcode);
		if (empty($coupon)) {
			return FALSE;
		}
		// no limit
		if (empty($coupon->max_used)) {
			return FALSE;
		}
		// check
		$this->_database->select('COUNT(*) count');
		$this->_database->from('coupon_used');
		$this->_database->where('barcode', $coupon->barcode);
		$query = $this->db->get();
		$row = $query->row();
		return $row->count >= $coupon->max_used;
	}

	public function is_welcome_conpon_used($uid, $barcode = NULL)
	{
		// get current coupon
		$coupon = $this->get_welcome_coupon($uid, $barcode);
		if (empty($coupon)) {
			return FALSE;
		}
		// check
		$this->_database->from('coupon_used');
		$this->_database->where('barcode', $coupon->barcode);
		$this->_database->where('uid', $uid);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_default_condition_text($type = NULL)
	{
		//
		if (empty($type)) return NULL;
		//
		$conditions = array();
		// for CPN2
		$conditions['CPN2'] = "<ul>
			<li>ยอดซื้อขั้นต่ำตามที่กำหนด คำนวณจากมูลค่าหลังหักส่วนลดทุกชนิดแล้ว</li>
			<li>ยกเว้นสินค้าซื้อเหมา (การซื้อสินค้าที่มีบาร์โค้ดเดียวกันตั้งแต่ 7 ชิ้นขึ้นไป/ใบเสร็จ),สินค้ายกแพ็คยี่ห้อ เอ็ม 150 และ ยี่ห้อเบอร์ดี้, สินค้าแผนกเครื่องใช้ไฟฟ้า, กระเช้าของขวัญทุกชนิด, เครื่องดื่มผสมแอลกอฮอล์, บุหรี่, นมผงเด็กสูตรทารกและสูตรต่อเนื่อง, อาหารเสริมสำหรับเด็ก, น้ำมันประกอบอาหาร, น้ำตาลประกอบอาหาร, บริการชำระบิล, บัตรเติมเงิน, บัตรอินเทอร์เน็ต, บัตรโทรศัพท์ระหว่างประเทศ, บัตรของขวัญ, ร้านขายยา, ร้านหนังสือ, ร้านค้าเช่า, ฟู้ดคอร์ท, Tops FLAVOUR, dining area at Central Food Hall และร้านเซกาเฟรโด ซาเนตติ เอสเพรสโซ</li>
			<li>คูปองส่วนลดนี้สามารถใช้ร่วมกับคูปองส่วนลดอื่นได้ หากยอดซื้อของใบเสร็จนั้น มากกว่าหรือเท่ากับยอดซื้อตามเงื่อนไขของแต่ละคูปองรวมกัน</li>
			<li>คูปองนี้ใช้เป็นส่วนลดสำหรับสมาชิกเดอะวัน และใช้ได้เพียง 1 ครั้ง /ใบเสร็จ ที่เซ็นทรัล ฟู้ด ฮอลล์ และท็อปส์ ทุกสาขา</li>
			<li>คูปองนี้ไม่สามารถแลกเปลี่ยนหรือทอนเป็นเงินสดได้</li>
			<li>คูปองที่ชำรุด ลบเลือน ทำสำเนา ทำเครื่องหมายอื่นใด หรือถูกเปลี่ยนแปลงข้อมูล ไม่สามารถนำมาใช้ได้</li>
			<li>บริษัทเซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงื่อนไขโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
			<li>การอนุมัติการใช้คูปองนี้ขึ้นอยู่กับดุลยพินิจของบริษัทเซ็นทรัล ฟู้ด รีเทล จำกัด</li>
			</ul>";
		// for CPN9
		$conditions['CPN9'] = "<ul>
			<li>คูปองนี้ใช้เป็นส่วนลดเมื่อซื้อสินค้าที่เซ็นทรัล ฟู้ด ฮอลล์และท็อปส์ เฉพาะสาขาที่มีสินค้าจำหน่ายเท่านั้น</li>
			<li>ราคาสุทธิของสินค้าต้องมากกว่ามูลค่าส่วนลดที่ระบุบนคูปอง</li>
			<li>คูปองนี้ใช้เป็นส่วนลดสินค้าตามจำนวนที่ระบุบนคูปองสำหรับสมาชิกเดอะวัน</li>
			<li>คูปองนี้ใช้ได้เพียง 1 ใบ / ใบเสร็จเท่านั้น</li>
			<li>คูปองนี้ไม่สามารถแลกเปลี่ยนหรือทอนเป็นเงินสดได้</li>
			<li>คูปองที่ชำรุด ลบเลือน ทำสำเนา ทำเครื่องหมายอื่นใด หรือถูกเปลี่ยนแปลงข้อมูล ไม่สามารถนำมาใช้ได้</li>
			<li>บริษัทเซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงื่อนไขโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
			</ul>";
		// for GPRO
		$conditions['GPRO'] = "<ul>
			<li>คูปองแทนเงินสดนี้ใช้เป็นส่วนลดเมื่อซื้อสินค้าที่เซ็นทรัล ฟู้ด ฮอลล์, ท็อปส์ มาร์เก็ต, ท็อปส์ ซูเปอร์สโตร์และท็อปส์ เดลี่</li>
			<li>คูปองแทนเงินสดนี้ไม่สามารถใช้ที่ท็อปส์ออนไลน์ได้</li>
			<li>คูปองแทนเงินสดนี้สำหรับสมาชิกเดอะวัน ที่เป็นชื่อเดียวกับที่ระบุบนคูปองเท่านั้น</li>
			<li>คูปองแทนเงินสดนี้ใช้ได้กับสินค้าราคาปกติและสินค้าราคาโปรโมชั่น</li>
			<li>คูปองแทนเงินสดนี้ไม่สามารถใช้กับสินค้ากลุ่มหนังสือ (หนังสือพิมพ์, นิตยสาร), ซีดี, ร้านค้าเช่า, ฟู้ดคอร์ท, ร้านขายยา และเซกาเฟรโด ซาเนตติ เอสเพรสโซ</li>
			<li>คูปองนี้ไม่สามารถแลกเปลี่ยนหรือทอนเป็นเงินสดได้</li>
			<li>บริษัท เซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ไม่รับคูปองแทนเงินสดที่ชำรุดหรือไม่สมบูรณ์</li>
			<li>บริษัท เซ็นทรัล ฟู้ด รีเทล จำกัด ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงื่อนไขโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li>
			</ul>";
		//
		return isset($conditions[$type]) ? $conditions[$type] : NULL;
	}

}
