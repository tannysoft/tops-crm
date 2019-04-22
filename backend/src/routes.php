<?php
/*
define("runat", 'server'); //localhost , server
//error_reporting(0);
set_time_limit(0);
ini_set("memory_limit", "-1");
ini_set('max_execution_time', 0);
error_reporting (E_ALL ^ E_NOTICE);
*/
date_default_timezone_set("Asia/Bangkok");

use Slim\Http\Request;
use Slim\Http\Response;

// Routes
/*
$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});


$app->get('/genimage',function(Request $request, Response $response, array $args) {

	$background_path = dirname(__FILE__) . '/assets/background-th.png';

	$text = "275";
	$condition = "ใช้เป็นส่วนลดเมื่อซื้อสินค้าครบ " . number_format((int)1200) . " บาทขึ้นไป/ใบเสร็จ";
	$fillColor = 'white';
	$backgroundColor = '#333';

	$draw = new \ImagickDraw();

    $draw->setFillColor($fillColor);
	$draw->setStrokeWidth(1);
	$draw->setFont(dirname(__FILE__) . '/assets/HelveticaNeueBd.ttf');
	$draw->setFontSize(80);

	$draw->setTextAlignment(\Imagick::ALIGN_CENTER);
	$draw->annotation(470, 83, $text);
	
	$draw->setFont(dirname(__FILE__) . '/assets/krartblack.otf');
	$draw->setFontSize(18);
	$draw->setFillColor('#000');

    $draw->setTextAlignment(\Imagick::ALIGN_LEFT);
    $draw->annotation(42, 154, $condition);

    $imagick = new \Imagick($background_path);
    $imagick->setImageFormat("png");
	$imagick->drawImage($draw);

	echo $imagick->getImageBlob();

	//file_put_contents ("/var/www/tops-crm/trgfeb2019/assets/img/cpn2/test.png", $imagick);

	return $response
	->withStatus(200)
	->withHeader("Content-Type", "image/png")
	->write($content);
});
*/
/*
$app->get('/genbarcode',function(Request $request, Response $response, array $args) {

	include('/var/www/tops-crm/gen_barcode/vendor/picqer/php-barcode-generator/src/BarcodeGenerator.php');
	include('/var/www/tops-crm/gen_barcode/vendor/picqer/php-barcode-generator/src/BarcodeGeneratorPNG.php');

	$generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();

	//$url_id = $args['url_id'];
	$stmt  = $this->db->prepare("SELECT barcode, min_purchase, discount FROM cv_master WHERE cam_id=42");
	$stmt->execute();
	//['url_id' => $url_id]

	while ($val = $stmt->fetch()) {

		file_put_contents('/var/www/tops-crm/accummar2019/assets/barcode/' . $val['barcode'] . '.png', $generatorPNG->getBarcode($val['barcode'], $generatorPNG::TYPE_CODE_128, 3, 90));

		/* ----- TH ----- */
/*
		$background_path = dirname(__FILE__) . '/assets/background-th.png';

		$text = $val['discount'];
		$condition = "ใช้เป็นส่วนลดเมื่อซื้อสินค้าครบ " . number_format((int)$val['min_purchase']). " บาทขึ้นไป/ใบเสร็จ";
		$fillColor = 'white';
		$backgroundColor = '#333';

		$draw = new \ImagickDraw();

		$draw->setFillColor($fillColor);
		$draw->setStrokeWidth(1);
		$draw->setFont(dirname(__FILE__) . '/assets/HelveticaNeueBd.ttf');
		$draw->setFontSize(80);

		$draw->setTextAlignment(\Imagick::ALIGN_CENTER);
		$draw->annotation(470, 83, $text);
		
		$draw->setFont(dirname(__FILE__) . '/assets/krartblack.otf');
		$draw->setFontSize(18);
		$draw->setFillColor('#000');

		$draw->setTextAlignment(\Imagick::ALIGN_LEFT);
		$draw->annotation(42, 154, $condition);

		$imagick = new \Imagick($background_path);
		$imagick->setImageFormat("png");
		$imagick->drawImage($draw);

		file_put_contents ("/var/www/tops-crm/accummar2019/assets/img/cpn2/" . $val['barcode'] . "-th.png", $imagick);

		/* ----- EN ----- * /

		$background_path = dirname(__FILE__) . '/assets/background-en.png';

		$text = $val['discount'];
		$condition = "When purchase " . number_format((int)$val['min_purchase']). " baht or more/receipt";
		$fillColor = 'white';
		$backgroundColor = '#333';

		$draw = new \ImagickDraw();

		$draw->setFillColor($fillColor);
		$draw->setStrokeWidth(1);
		$draw->setFont(dirname(__FILE__) . '/assets/HelveticaNeueBd.ttf');
		$draw->setFontSize(80);

		$draw->setTextAlignment(\Imagick::ALIGN_CENTER);
		$draw->annotation(470, 83, $text);
		
		$draw->setFont(dirname(__FILE__) . '/assets/krartblack.otf');
		$draw->setFontSize(18);
		$draw->setFillColor('#000');

		$draw->setTextAlignment(\Imagick::ALIGN_LEFT);
		$draw->annotation(42, 154, $condition);

		$imagick = new \Imagick($background_path);
		$imagick->setImageFormat("png");
		$imagick->drawImage($draw);

		file_put_contents ("/var/www/tops-crm/accummar2019/assets/img/cpn2/" . $val['barcode'] . "-en.png", $imagick);

	}

	echo "DONE!";

});
*/
$app->get('/data/getCustomerProfile/{campaign_id}/{cus_id}',function(Request $request, Response $response, array $args) {

	$url = 'https://superkoom.tops.co.th/api/getCustomerProfile/'.$args['campaign_id'].'/' . $args['cus_id'];

	$options = array(
        CURLOPT_RETURNTRANSFER => true,     // return web page
        CURLOPT_HEADER         => false,    // don't return headers
        CURLOPT_FOLLOWLOCATION => true,     // follow redirects
        CURLOPT_ENCODING       => "",       // handle all encodings
        CURLOPT_USERAGENT      => "tops crm", // who am i
        CURLOPT_AUTOREFERER    => true,     // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
        CURLOPT_TIMEOUT        => 120,      // timeout on response
        CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
    );

    $ch      = curl_init( $url );
    curl_setopt_array( $ch, $options );
    $content = curl_exec( $ch );
    $err     = curl_errno( $ch );
    $errmsg  = curl_error( $ch );
    $header  = curl_getinfo( $ch );
    curl_close( $ch );

/*    $header['errno']   = $err;
    $header['errmsg']  = $errmsg;
    $header['content'] = $content;
    return $header;*/
/*
	if($args['cus_id'] == 9999999999) {

		$data = '{
			"status": true,
			"code": 200,
			"message": "success to get target customer profile",
			"data": {
				"firstNameEng": "Dummy",
				"firstNameThai": "ดัมมี่",
				"lastNameEng": "Demo",
				"lastNameThai": "เดโม่",
				"preferLanguage": "EN",
				"cardNo": 9999999999,
				"sblMemberId": "9-000000000",
				"pointBalance": 99999
			},
			"timestamp": 1549535106
		}';

	} else {
		$data = '{
			"status": false,
			"code": 400,
			"message": "Bad Request",
			"data": null,"
			timestamp": 1549536175
		}';
	}

	$data = preg_replace('/\s/', '', $data);
*/
	return $response
	->withStatus(200)
	->withHeader("Content-Type", "application/json;charset=utf-8")
	->write($content);

	//json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE)

});

$app->get('/data/{url_id}',function(Request $request, Response $response, array $args) {

	$mainUrl = 'https://' . $request->getUri()->getHost() . '/';
	$appUrl = 'https://' . $request->getUri()->getHost() . '/cny2019/';
	
	$url_id = $args['url_id'];
	$stmt  = $this->db->prepare("SELECT * FROM customer WHERE url_id=:url_id AND CAMPAIGN_ID=38");
	$stmt->execute(['url_id' => $url_id]);
	//$data = $stmt ->fetch();

	while ($val = $stmt->fetch()) {
		//$data['data'] = $val;
		$data['data']['id'] = $val['id'];
		$data['data']['lang'] = strtolower($val['LANGUAGE']);
		$data['data']['Condition_ID'] = $val['Condition_ID'];
		
		$data['data']['th']['firstname'] = $val['FIRST_TH_NAME'];
		$data['data']['th']['lastname'] = $val['LAST_TH_NAME'];
		$data['data']['en']['firstname'] = $val['FIRST_EN_NAME'];
		$data['data']['en']['lastname'] = $val['LAST_EN_NAME'];

		$data['data']['th']['cat_link_1'] = $mainUrl . 'rurl/' . $val['id'] . '/9';
		$data['data']['en']['cat_link_1'] = $mainUrl . 'rurl/' . $val['id'] . '/10';

		$data['data']['th']['cat_link_2'] = $mainUrl . 'rurl/' . $val['id'] . '/11';
		$data['data']['en']['cat_link_2'] = $mainUrl . 'rurl/' . $val['id'] . '/12';

		$data['data']['th']['cat_link_3'] = $mainUrl . 'rurl/' . $val['id'] . '/13';
		$data['data']['en']['cat_link_3'] = $mainUrl . 'rurl/' . $val['id'] . '/14';

		$data['data']['th']['front_image'] = $appUrl . 'assets/img/banner-1-th.png';
		$data['data']['en']['front_image'] = $appUrl . 'assets/img/banner-1-en.png';

		$data['data']['th']['back_image'] = $appUrl . 'assets/img/' . $val['Condition_ID'] . '-th.png';
		$data['data']['en']['back_image'] = $appUrl . 'assets/img/' . $val['Condition_ID'] . '-en.png';

		$data['data']['th']['cat_image_1'] = $appUrl . 'assets/img/category-1-th.png';
		$data['data']['en']['cat_image_1'] = $appUrl . 'assets/img/category-1-en.png';

		$data['data']['th']['cat_image_2'] = $appUrl . 'assets/img/category-2-th.png';
		$data['data']['en']['cat_image_2'] = $appUrl . 'assets/img/category-2-en.png';

		$data['data']['th']['cat_image_3'] = $appUrl . 'assets/img/category-3-th.png';
		$data['data']['en']['cat_image_3'] = $appUrl . 'assets/img/category-3-en.png';

		if($val['Condition_ID'] == 43582) {
			$data['data']['points'] = 25;
		} elseif($val['Condition_ID'] == 43583) {
			$data['data']['points'] = 15;
		} elseif($val['Condition_ID'] == 43584) {
			$data['data']['points'] = 10;
		} elseif($val['Condition_ID'] == 43585) {
			$data['data']['points'] = 10;
		}

		$data['data']['credits']['counts'] = $val['CC_Central'] + $val['CC_SCB'] + $val['CC_KTC'] + $val['CC_BAY'];

		if($val['CC_Central']==1) {
			$data['data']['th']['credits']['data']['central']['link'] = $mainUrl . 'rurl/' . $val['id'] .'/5';
			$data['data']['th']['credits']['data']['central']['image'] = $appUrl . 'assets/img/credits-central-th.jpg';
			$data['data']['en']['credits']['data']['central']['link'] = $mainUrl . 'rurl/' . $val['id'] .'/1';
			$data['data']['en']['credits']['data']['central']['image'] = $appUrl . 'assets/img/credits-central-en.jpg';
		}
		if($val['CC_SCB']==1) {
			$data['data']['th']['credits']['data']['scb']['link'] = $mainUrl . 'rurl/' . $val['id'] .'/6';
			$data['data']['th']['credits']['data']['scb']['image'] = $appUrl . 'assets/img/credits-scb-th.jpg';
			$data['data']['en']['credits']['data']['scb']['link'] = $mainUrl . 'rurl/' . $val['id'] .'/2';
			$data['data']['en']['credits']['data']['scb']['image'] = $appUrl . 'assets/img/credits-scb-en.jpg';
		}
		if($val['CC_KTC']==1) {
			$data['data']['th']['credits']['data']['ktc']['link'] = $mainUrl . 'rurl/' . $val['id'] .'/7';
			$data['data']['th']['credits']['data']['ktc']['image'] = $appUrl . 'assets/img/credits-ktc-th.jpg';
			$data['data']['en']['credits']['data']['ktc']['link'] = $mainUrl . 'rurl/' . $val['id'] .'/3';
			$data['data']['en']['credits']['data']['ktc']['image'] = $appUrl . 'assets/img/credits-ktc-en.jpg';
		}
		if($val['CC_BAY']==1) {
			$data['data']['th']['credits']['data']['bay']['link'] = $mainUrl . 'rurl/' . $val['id'] .'/8';
			$data['data']['th']['credits']['data']['bay']['image'] = $appUrl . 'assets/img/credits-bay-th.jpg';
			$data['data']['en']['credits']['data']['bay']['link'] = $mainUrl . 'rurl/' . $val['id'] .'/4';
			$data['data']['en']['credits']['data']['bay']['image'] = $appUrl . 'assets/img/credits-bay-en.jpg';
		}

		$stmt = $this->db->prepare("SELECT condition_id FROM customer_click_promotion WHERE customer_id = :customer_id");
		$stmt->execute(['customer_id' => $data['data']['id']]);
		$promotion_click = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$data['data']['promotion_click_condition_id'] = NULL;
		foreach ($promotion_click as $key => $value) {
			$data['data']['promotion_click_condition_id'][] = $value['condition_id'];
		}

		$stmt = $this->db->prepare("SELECT customer_id FROM customer_read WHERE customer_id=:customer_id");
		$stmt->execute(['customer_id' => $data['data']['id']]);
		$customer_read = $stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach ($customer_read as $key => $value) {
			$customer_read_id = $value['customer_id'];
		}
/*
		$stmt = $this->db->prepare("SELECT customer_id FROM customer_read WHERE customer_id=:customer_id");
		$stmt->execute(['customer_id' => $val['id']]);
		$cus = $stmt->fetch();*/

	}

	if(!isset($customer_read_id)){
/*
		$stmt = $this->db->prepare("INSERT INTO customer_read (customer_id) VALUES (:customer_id)");
		$stmt->execute(['customer_id' => $data['data']['id']]);
		$customer_has_read = $stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach ($customer_has_read as $key => $value) {
			$customer_has_read_id = $value['customer_id'];
		}
*/
		try{
			$stmt  = $this->db->prepare("INSERT INTO customer_read (customer_id) VALUES (:customer_id)");
			$stmt->execute([
							'customer_id' => $data['data']['id']
						]);
		} catch (Exception $e) {

		}

		//$customer_has_read = $stmt->fetchAll(PDO::FETCH_ASSOC);
		/*
		$stmt = $this->db->prepare("INSERT INTO customer_read (customer_id) VALUES (:cus_id)");
		$stmt->execute(['cus_id' => $val['id']]);
		$customer_read_record = $stmt->fetchAll(PDO::FETCH_ASSOC);*/
		/*try{
			$stmt  = $this->db->prepare("INSERT INTO customer_read (customer_id) VALUES (:cus_id)");
			$stmt->execute(['cus_id' => $val['id']]);
		} catch (Exception $e) {

		}*/
	}
/*
	if($data !== false){
		$stmt = $this->db->prepare("SELECT condition_id FROM customer_click_promotion WHERE customer_id = :customer_id");
		$stmt->execute(['customer_id' => $data['id']]);
		$promotion_click = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$data['promotion_click_condition_id'] = NULL;
		foreach ($promotion_click as $key => $value) {
			$data['promotion_click_condition_id'][] = $value['condition_id'];
		}
	}else{
		return $response
		    ->withStatus(404)
		    ->withHeader("Content-Type", "application/json;charset=utf-8")
		    ->write(json_encode(array('error'=>'not have data'), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));
	}
*/
	return $response
    ->withStatus(200)
    ->withHeader("Content-Type", "application/json;charset=utf-8")
    ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));

});

$app->get('/data/{campaign_id}/mass',function(Request $request, Response $response, array $args) {

	$lang = 'TH';

	$campaign_id = $args['campaign_id'];

	if($campaign_id==39) {
		$path_link = '/focusstore01/';
	}elseif($campaign_id==40) {
		$path_link = '/trgfeb2019/';
	}elseif($campaign_id==46) {
		$path_link = '/focusstore02/';
	}

	$mainUrl = 'https://' . $request->getUri()->getHost() . '/';
	$appUrl = 'https://' . $request->getUri()->getHost() . $path_link;

	if($campaign_id != 46){
		$cv_data = '2834090190209,2421290190209,2355130190209,2562270190209,2708820190209,7538920181213,7621230181213,7600790181213,7613630181213,7269000181213,7714310181213,7384710181213,7587400181213,9826043190210,9650409190210';
	}else{
		$cv_data = 'DISC10P,2706600190325,2281970190325,2380680190346,2349750190346,2501960190325,2663600190325,2373120190346,2808600190346,2811560190325,2539970190325,2292580190325';
	}


	$cv_set = explode(',', str_replace("\r", '', $cv_data));

	//$data['data']['cv_set'] = $cv_set;

	$today = date("Y-m-d");
	//$data['data']['date'] = $today;

	foreach ($cv_set as $cv_val) {

		$stmt = $this->db->prepare("SELECT barcode, type, min_purchase, discount, start, end FROM cv_master WHERE barcode=:barcode AND cam_id=:campaign_id AND DATE(start)<=:start AND DATE(end)>=:start");

		$stmt->execute([
			'barcode' => $cv_val,
			'campaign_id' => $campaign_id,
			'start' => $today
		]);

		$customer_read = $stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach ($customer_read as $key => $value) {
			$barcode['barcode'] = $value['barcode'];
			$barcode['type'] = $value['type'];
			$barcode['min_purchase'] = $value['min_purchase'];
			$barcode['discount'] = $value['discount'];
			$barcode['start'] = $value['start'];
			$barcode['end'] = $value['end'];

			$picture_lang = ($barcode['type']=='CPN9') ? $lang : '-' . strtolower($lang);
			if($barcode['type']=='GPRO') {
				$barcode['image'] = $appUrl . 'assets/img/gift-100' . $picture_lang . '.jpg';
			} else {
				if($campaign_id!=46){
				$barcode['image'] = $appUrl . 'assets/img/' . strtolower($barcode['type']) . '/' . $value['barcode'] . $picture_lang . '.png';
				}else{
					$barcode['image'] = $appUrl . 'assets/img/' . strtolower($barcode['type']) . '/' . $value['barcode'] . strtoupper(ltrim($picture_lang,'-')) . '.png';
				}
			}

			$datacode[$barcode['type']][] = $barcode;
		}
	}

	$data['data']['barcodes'] = $datacode;

	return $response
    ->withStatus(200)
    ->withHeader("Content-Type", "application/json;charset=utf-8")
    ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));

});

$app->get('/data/{campaign_id}/{url_id}',function(Request $request, Response $response, array $args) {

	$url_id = $args['url_id'];
	$campaign_id = $args['campaign_id'];

	if($campaign_id==39) {
		$path_link = '/focusstore01/';
	}elseif($campaign_id==40) {
		$path_link = '/trgfeb2019/';
	}elseif($campaign_id==42) {
		$path_link = '/accummar2019/';
	}elseif($campaign_id==46) {
		$path_link = '/focusstore02/';
	}

	$mainUrl = 'https://' . $request->getUri()->getHost() . '/';
	$appUrl = 'https://' . $request->getUri()->getHost() . $path_link;
	if($campaign_id==42) {
		$stmt  = $this->db->prepare("SELECT customer.*, customer_t1.t1c_card_no, u2cv.CV_SET FROM customer LEFT JOIN customer_t1 ON (customer.SBL_MEMBER_ID = customer_t1.SBL_MEMBER_ID) LEFT JOIN u2cv ON (customer.SBL_MEMBER_ID = u2cv.SBL_MEMBER_ID) WHERE url_id=:url_id AND customer.CAMPAIGN_ID=:campaign_id AND u2cv.campaign_id=:campaign_id");
	}elseif($campaign_id == 46){
		$stmt  = $this->db->prepare("SELECT customer.*, u2cv.CV_SET FROM customer LEFT JOIN u2cv ON (customer.SBL_MEMBER_ID = u2cv.SBL_MEMBER_ID) WHERE url_id=:url_id AND u2cv.CAMPAIGN_ID=:campaign_id");		
	}else {
		$stmt  = $this->db->prepare("SELECT customer.*, u2cv.CV_SET FROM customer LEFT JOIN u2cv ON (customer.SBL_MEMBER_ID = u2cv.SBL_MEMBER_ID) WHERE url_id=:url_id AND customer.CAMPAIGN_ID=:campaign_id");
	}

	// AND CAMPAIGN_ID=39
	$stmt->execute([
		'url_id' => $url_id,
		'campaign_id' => $campaign_id
	]);
	//$data = $stmt ->fetch();

	while ($val = $stmt->fetch()) {

		if($val['CAMPAIGN_ID']==42) {

			$url = 'https://superkoom.tops.co.th/api/getBalance/' . $val['SBL_MEMBER_ID'] . '/43880';

			$options = array(
				CURLOPT_RETURNTRANSFER => true,     // return web page
				CURLOPT_HEADER         => false,    // don't return headers
				CURLOPT_FOLLOWLOCATION => true,     // follow redirects
				CURLOPT_ENCODING       => "",       // handle all encodings
				CURLOPT_USERAGENT      => "tops crm", // who am i
				CURLOPT_AUTOREFERER    => true,     // set referer on redirect
				CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
				CURLOPT_TIMEOUT        => 120,      // timeout on response
				CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
			);

			$ch      = curl_init( $url );
			curl_setopt_array( $ch, $options );
			$content = curl_exec( $ch );
			$err     = curl_errno( $ch );
			$errmsg  = curl_error( $ch );
			$header  = curl_getinfo( $ch );
			curl_close( $ch );

			$json = json_decode($content);

		}

		$lang = $val['LANGUAGE'];
		//$data['data'] = $val;
		$data['data']['id'] = $val['id'];
		if($val['CAMPAIGN_ID']==42) {
			$data['data']['t1c_card_no'] = $val['t1c_card_no'];
		}
		$data['data']['campaign_id'] = $val['CAMPAIGN_ID'];
		$data['data']['Condition_ID'] = $val['Condition_ID2'];
		$data['data']['lang'] = strtolower($val['LANGUAGE']);

		$month = array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");

		if($val['CAMPAIGN_ID']==42) {
			if($json->code==200) {
				$data['data']['balance'] = number_format($json->data->balance);
				$data['data']['lastUpdateTime']['th'] = date("d ", $json->data->lastUpdateTime) . $month[(int)date("m", $json->data->lastUpdateTime)] . ' ' . (date("Y", $json->data->lastUpdateTime) + 543);// . date(" - H:i น.", $json->data->lastUpdateTime);
				$data['data']['lastUpdateTime']['en'] = date("d ", $json->data->lastUpdateTime) . date("M", $json->data->lastUpdateTime) . ' ' . (date("Y", $json->data->lastUpdateTime));// . date(" - H:i", $json->data->lastUpdateTime);
				$data['data']['minPurchase'] = number_format((int)$val['MIN_PURCHASE']);
				$data['data']['purchasePercent'] = ((100 / (int)$val['MIN_PURCHASE']) * $json->data->balance);
				$data['data']['appendPurchaseInteger'] = ((int)$val['MIN_PURCHASE'] - $json->data->balance);
				$data['data']['appendPurchase'] = number_format($data['data']['appendPurchaseInteger']);

				/*$data['data']['purchasePercent'] = 100;
				$data['data']['appendPurchaseInteger'] = 0;
				$data['data']['appendPurchase'] = 0;*/
			}
		}

		$data['data']['th']['firstname'] = $val['FIRST_TH_NAME'];
		$data['data']['th']['lastname'] = $val['LAST_TH_NAME'];
		$data['data']['en']['firstname'] = $val['FIRST_EN_NAME'];
		$data['data']['en']['lastname'] = $val['LAST_EN_NAME'];

		$data['data']['th']['promo_image'] = $appUrl . 'assets/img/' . strtolower($val['Condition_ID2']) . '-th.jpg';
		$data['data']['en']['promo_image'] = $appUrl . 'assets/img/' . strtolower($val['Condition_ID2']) . '-en.jpg';

		//$data['data']['gift_coupon']['th'] = $appUrl . 'assets/img/gift-100-th.jpg';
		//$data['data']['gift_coupon']['en'] = $appUrl . 'assets/img/gift-100-en.jpg';

		//$data['data']['credits']['central']['th']['image'] = $appUrl . 'assets/img/central-th.jpg';
		//$data['data']['credits']['central']['en']['image'] = $appUrl . 'assets/img/central-en.jpg';
		if($campaign_id==40) {

			$data['data']['credits']['the1']['th']['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/16';
			$data['data']['credits']['the1']['en']['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/15';

			$data['data']['credits']['the1']['th']['image'] = $appUrl . 'assets/img/tops-the1-th.jpg';
			$data['data']['credits']['the1']['en']['image'] = $appUrl . 'assets/img/tops-the1-en.jpg';

		}

		if($campaign_id==42) {

			$data['data']['credits']['the1']['th']['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/17';
			$data['data']['credits']['the1']['en']['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/18';

			$data['data']['credits']['the1']['th']['image'] = $appUrl . 'assets/img/central-th.jpg';
			$data['data']['credits']['the1']['en']['image'] = $appUrl . 'assets/img/central-en.jpg';

			$data['data']['credits']['uob']['th']['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/19';
			$data['data']['credits']['uob']['en']['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/20';

			$data['data']['credits']['uob']['th']['image'] = $appUrl . 'assets/img/uob-th.jpg';
			$data['data']['credits']['uob']['en']['image'] = $appUrl . 'assets/img/uob-en.jpg';

			$data['data']['credits']['ktc']['th']['link'] = $mainUrl . 'rurl/' . $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/21';
			$data['data']['credits']['ktc']['en']['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/21';

			$data['data']['credits']['ktc']['th']['image'] = $appUrl . 'assets/img/ktc-th.jpg';
			$data['data']['credits']['ktc']['en']['image'] = $appUrl . 'assets/img/ktc-en.jpg';

			$data['data']['credits']['krungsri']['th']['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/23';
			$data['data']['credits']['krungsri']['en']['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/24';

			$data['data']['credits']['krungsri']['th']['image'] = $appUrl . 'assets/img/krungsri-th.jpg';
			$data['data']['credits']['krungsri']['en']['image'] = $appUrl . 'assets/img/krungsri-en.jpg';
		} else {
			$data['data']['credits']['ktc-summer']['th']['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/47';
			$data['data']['credits']['ktc-summer']['en']['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/48';

			$data['data']['credits']['ktc-summer']['th']['image'] = $appUrl . 'assets/img/1.jpg';
			$data['data']['credits']['ktc-summer']['en']['image'] = $appUrl . 'assets/img/1.jpg';

			$data['data']['credits']['t1']['th']['link'] = $mainUrl . 'rurl/' . $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/17';
			$data['data']['credits']['t1']['en']['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/18';

			$data['data']['credits']['t1']['th']['image'] = $appUrl . 'assets/img/2TH.jpg';
			$data['data']['credits']['t1']['en']['image'] = $appUrl . 'assets/img/2EN.jpg';

			$data['data']['credits']['uob']['th']['link'] = $mainUrl . 'rurl/' . $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/19';
			$data['data']['credits']['uob']['en']['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/20';

			$data['data']['credits']['uob']['th']['image'] = $appUrl . 'assets/img/3TH.jpg';
			$data['data']['credits']['uob']['en']['image'] = $appUrl . 'assets/img/3EN.jpg';

			$data['data']['credits']['f1']['th']['link'] = $mainUrl . 'rurl/' . $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/51';
			$data['data']['credits']['f1']['en']['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/52';

			$data['data']['credits']['f1']['th']['image'] = $appUrl . 'assets/img/4.jpg';
			$data['data']['credits']['f1']['en']['image'] = $appUrl . 'assets/img/4.jpg';


			$data['data']['credits']['krungsri']['th']['link'] = $mainUrl . 'rurl/' . $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/23';
			$data['data']['credits']['krungsri']['en']['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/24';

			$data['data']['credits']['krungsri']['th']['image'] = $appUrl . 'assets/img/5.jpg';
			$data['data']['credits']['krungsri']['en']['image'] = $appUrl . 'assets/img/5.jpg';





			// $data['data']['credits']['scb']['th']['link'] = $mainUrl . 'rurl/' . $val['id'] . '/6';
			// $data['data']['credits']['scb']['en']['link'] = $mainUrl . 'rurl/' . $val['id'] . '/2';

			// $data['data']['credits']['scb']['th']['image'] = $appUrl . 'assets/img/scb-th.jpg';
			// $data['data']['credits']['scb']['en']['image'] = $appUrl . 'assets/img/scb-en.jpg';
		}

		$cv_set = explode(',', str_replace("\n", '', str_replace("\r", '', $val['CV_SET'])));

		$today = date("Y-m-d H:i:s");
		$gproTotalDiscount = 0;

		foreach ($cv_set as $cv_val) {

			// if($campaign_id==42) { //VEE
			// 	$stmt = $this->db->prepare("SELECT barcode, type, min_purchase, discount, start, end FROM cv_master WHERE barcode=:barcode AND cam_id=:campaign_id");
			// 	$stmt->execute([
			// 		'barcode' => $cv_val,
			// 		'campaign_id' => $campaign_id
			// 	]);
			// } else {
				$stmt = $this->db->prepare("SELECT barcode, type, min_purchase, discount, start, end FROM cv_master WHERE barcode=:barcode AND cam_id=:campaign_id AND DATE(start)<=:start AND DATE(end)>=:start");
				$stmt->execute([
					'barcode' => $cv_val,
					'campaign_id' => $campaign_id,
					'start' => $today
				]);
			//}
			/*$stmt = $this->db->prepare("SELECT barcode, type, min_purchase, discount, start, end FROM cv_master WHERE barcode=:barcode AND cam_id=:campaign_id AND DATE(start)<=:start AND DATE(end)>=:start");
			$stmt->execute([
				'barcode' => $cv_val,
				'campaign_id' => $campaign_id,
				'start' => $today
			]);*/

			$customer_read = $stmt->fetchAll(PDO::FETCH_ASSOC);

			// if($campaign_id == 46){ //VEE
			// 	$data = $customer_read;
			// }

			foreach ($customer_read as $key => $value) {

				$stmt  = $this->db->prepare("SELECT id FROM 39_coupon_used WHERE customer_id=:cus_id AND campaign_id=:campaign_id AND barcode=:barcode");
				$stmt->execute([
								'cus_id' => $data['data']['id'],
								'campaign_id' => $campaign_id,
								'barcode' => $value['barcode']
							]);
				$used = $stmt->fetch();
				
				$barcode['barcode'] = $value['barcode'];
				//$barcode['barcode_image'] = $appUrl . 'assets/img/' . $value['barcode'] . '.png';
				$barcode['type'] = $value['type'];
				$barcode['min_purchase'] = $value['min_purchase'];
				$barcode['discount'] = $value['discount'];
				$barcode['start'] = $value['start'];
				$barcode['end'] = $value['end'];

				$picture_lang = ($barcode['type']=='CPN9') ? $lang : '-' . $data['data']['lang'];
				if($barcode['type']=='GPRO') {
					$gproTotalDiscount = $gproTotalDiscount + (int)$value['discount'];
					if($campaign_id!='42') {
						$barcode['image'] = $appUrl . 'assets/img/gift-100' . $picture_lang . '.jpg';
					} else {
						if($json->code==200) {
							$barcode['image'] = $appUrl . 'assets/img/gpro/GPRO-' . $value['discount'] . $picture_lang . '.png';
							if($data['data']['appendPurchase']<=0) {
								if($used==false) {
									$barcode['image_html'] = '<div class="item"><a class="bar-display" data-customer="' . $data['data']['id'] . '" data-barcode="' . $value['barcode'] . '" data-type="' . $value['type'] . '" href="#"><img src="' . $appUrl . '/assets/img/gpro/GPRO-' . $value['discount'] . $picture_lang . '.png"></a></div>';
								} else {
									$barcode['image_html'] = '<div class="item"><div class="bar-display coupon-used"><img src="' . $appUrl . '/assets/img/gpro/GPRO-' . $value['discount'] . $picture_lang . '.png"><div class="stamp"><img src="https://crm.tops.co.th/accummar2019/assets/img/icon-used.svg" alt="stamp"></div></div></div>';
								}
							} else {
								if($used==false) {
									$barcode['image_html'] = '<div class="item disabled"><img src="' . $appUrl . '/assets/img/gpro/GPRO-' . $value['discount'] . $picture_lang . '.png"></div>';
								} else {
									$barcode['image_html'] = '<div class="item"><a class="bar-display coupon-used" href="#"><img src="' . $appUrl . '/assets/img/gpro/GPRO-' . $value['discount'] . $picture_lang . '.png"></a></div>';
								}
							}
						}
					}
				} elseif($barcode['type']=='CPN9') {
					if($campaign_id!='42') {
						$barcode['image'] = $appUrl . 'assets/img/' . strtolower($barcode['type']) . '/' . $value['barcode'] . $picture_lang . '.png';
					} else {
						$barcode['image'] = $appUrl . 'assets/img/' . strtolower($barcode['type']) . '/CPN9-' . $value['discount'] . '-' . strtolower($picture_lang) . '.png';
					}
				} else {
					if($campaign_id == '46'){ // VEE
					$barcode['image'] = $appUrl . 'assets/img/' . strtolower($barcode['type']) . '/' . $value['barcode'] . strtoupper(ltrim($picture_lang,'-')) . '.png';

					}else{
					$barcode['image'] = $appUrl . 'assets/img/' . strtolower($barcode['type']) . '/' . $value['barcode'] . $picture_lang . '.png';
					}

				}

				if($used == FALSE) {
					$barcode['used'] = false;
				} else {
					$barcode['used'] = true;
				}

				$datacode[$barcode['type']][] = $barcode;
			}
		}
		if(isset($datacode)) {
			$data['data']['barcodes'] = $datacode;
			$data['data']['gproTotalDiscount'] = number_format($gproTotalDiscount);
		}

		$stmt = $this->db->prepare("SELECT customer_id FROM 39_customer_read WHERE customer_id=:customer_id");
		$stmt->execute(['customer_id' => $data['data']['id']]);
		$customer_read = $stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach ($customer_read as $key => $value) {
			$customer_read_id = $value['customer_id'];
		}

		if($campaign_id==42) {

			if($val['GROUP']=='Senior') {
				$contentImage['image'] = $appUrl . 'assets/img/content/content-1.jpg';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/25';

				$data['data']['contentGroup']['item'][] = $contentImage;

				$contentImage['image'] = $appUrl . 'assets/img/content/content-s-7.png';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/37';

				$data['data']['content']['item'][] = $contentImage;

				$contentImage['image'] = $appUrl . 'assets/img/content/content-s-8.png';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/38';

				$data['data']['content']['item'][] = $contentImage;

				$contentImage['image'] = $appUrl . 'assets/img/content/content-s-9.png';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/39';

				$data['data']['content']['item'][] = $contentImage;

				$contentImage['image'] = $appUrl . 'assets/img/content/content-s-10.png';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/40';

				$data['data']['content']['item'][] = $contentImage;

				$contentImage['image'] = $appUrl . 'assets/img/content/content-s-11.png';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/41';

				$data['data']['content']['item'][] = $contentImage;

				$contentImage['image'] = $appUrl . 'assets/img/content/content-s-12.png';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/42';

				$data['data']['content']['item'][] = $contentImage;
			} elseif($val['GROUP']=='Family') {
				$contentImage['image'] = $appUrl . 'assets/img/content/content-3.jpg';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/26';

				$data['data']['contentGroup']['item'][] = $contentImage;

				$contentImage['image'] = $appUrl . 'assets/img/content/content-s-1.png';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/31';

				$data['data']['content']['item'][] = $contentImage;

				$contentImage['image'] = $appUrl . 'assets/img/content/content-s-2.png';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/32';

				$data['data']['content']['item'][] = $contentImage;


				$contentImage['image'] = $appUrl . 'assets/img/content/content-s-3.png';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/33';

				$data['data']['content']['item'][] = $contentImage;

				$contentImage['image'] = $appUrl . 'assets/img/content/content-s-4.png';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/34';

				$data['data']['content']['item'][] = $contentImage;

				$contentImage['image'] = $appUrl . 'assets/img/content/content-s-5.png';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/35';

				$data['data']['content']['item'][] = $contentImage;

				$contentImage['image'] = $appUrl . 'assets/img/content/content-s-6.png';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/36';

				$data['data']['content']['item'][] = $contentImage;
			} elseif($val['GROUP']=='Adult (EN)' && $lang == 'EN'){

				$contentImage['image'] = $appUrl . 'assets/img/content/content-2-en.png';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/43';

				$data['data']['contentGroup']['item'][] = $contentImage;

				$contentImage['image'] = $appUrl . 'assets/img/content/content-s-13.png';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/44';

				$data['data']['content']['item'][] = $contentImage;

				$contentImage['image'] = $appUrl . 'assets/img/content/content-s-14.png';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/45';

				$data['data']['content']['item'][] = $contentImage;

				$contentImage['image'] = $appUrl . 'assets/img/content/content-s-15.png';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/46';

				$data['data']['content']['item'][] = $contentImage;

			}else {
				$contentImage['image'] = $appUrl . 'assets/img/content/content-2.jpg';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/27';

				$data['data']['contentGroup']['item'][] = $contentImage;

				$contentImage['image'] = $appUrl . 'assets/img/content/content-s-13.png';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/28';

				$data['data']['content']['item'][] = $contentImage;

				$contentImage['image'] = $appUrl . 'assets/img/content/content-s-14.png';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/29';

				$data['data']['content']['item'][] = $contentImage;

				$contentImage['image'] = $appUrl . 'assets/img/content/content-s-15.png';
				$contentImage['link'] = $mainUrl . 'rurl/' .  $val['CAMPAIGN_ID'] . '/' . $val['id'] . '/30';

				$data['data']['content']['item'][] = $contentImage;
			}

		}

/*
		unset($contentImage);

		$contentImage[] = $appUrl . 'assets/img/content/content-2.jpg';
		$contentImage[] = $appUrl . 'assets/img/content/content-s-3.png';
		$contentImage[] = $appUrl . 'assets/img/content/content-s-4.png';

		$data['data']['content'][]['item'] = $contentImage;
*/


		/*for ($x = 1; $x <= 5; $x++) {
			$data['data']['content'][0][] = $appUrl . 'assets/img/content/content-1.jpg';
			$data['data']['content'][0]['item'][] = $appUrl . 'assets/img/';
		}*/
	}

	if(!isset($customer_read_id)) {
		try{
			$stmt  = $this->db->prepare("INSERT INTO 39_customer_read (campaign_id,customer_id) VALUES (:campaign_id,:customer_id)");
			$stmt->execute([
							'campaign_id' => $data['data']['campaign_id'],
							'customer_id' => $data['data']['id']
						]);
		} catch (Exception $e) {

		}

	}

	return $response
    ->withStatus(200)
    ->withHeader("Content-Type", "application/json;charset=utf-8")
    ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));

});

$app->get('/data/{campaign_id}/sid/{sbl_id}',function(Request $request, Response $response, array $args) {

	$campaign_id = $args['campaign_id'];

	if($campaign_id==39) {
		$path_link = '/focusstore01/';
	}elseif($campaign_id==40) {
		$path_link = '/trgfeb2019/';
	}elseif($campaign_id==46) {
		$path_link = '/focusstore02/';
	}

	$mainUrl = 'https://' . $request->getUri()->getHost() . '/';
	$appUrl = 'https://' . $request->getUri()->getHost() . $path_link;
	
	$sbl_id = $args['sbl_id'];

	$stmt  = $this->db->prepare("SELECT url_id FROM customer WHERE SBL_MEMBER_ID=:sbl_id AND CAMPAIGN_ID=:campaign_id");
	$stmt->execute([
		'sbl_id' => $sbl_id,
		'campaign_id' => $campaign_id
	]);
	$cus = $stmt->fetch();

	if($cus !== FALSE) {
		$data['redirect'] = $appUrl . $cus['url_id'];
		return $response->withStatus(302)->withHeader('Location', $data['redirect']);
	} else {
		return $response->withStatus(302)->withHeader('Location', $appUrl . 'mass');
	}
	

});

$app->get('/coupon_click/{campaign_id}/{cus_id}/{barcode}',function(Request $request, Response $response, array $args){

	$campaign_id = $args['campaign_id'];
	$cus_id = $args['cus_id'];
	$barcode = $args['barcode'];

	$stmt  = $this->db->prepare("SELECT * FROM customer WHERE id=:cus_id AND CAMPAIGN_ID=:campaign_id");
	$stmt->execute([
		'cus_id' => $cus_id,
		'campaign_id' => $campaign_id
		]);
	$cus = $stmt->fetch();

	if($cus !== FALSE) {
		$sbl_member_id = $cus['SBL_MEMBER_ID'];
		$condition_id = $cus['Condition_ID2'];
	}

	$barcode_query  = $this->db->prepare("SELECT * FROM 39_coupon_used WHERE campaign_id=:campaign_id AND customer_id=:cus_id AND barcode=:barcode");
	$barcode_query->execute([
								'campaign_id' => $campaign_id,
								'cus_id' => $cus_id,
								'barcode' => $barcode
							]);
	//echo $barcode_query->rowCount();

	if($barcode_query->rowCount() != 0) {
		return $response
    		->withStatus(200)
    		->withHeader("Content-Type", "application/json;charset=utf-8")
    		->write(json_encode(array('status'=>'Already!'), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));
	} else {
		try {
			$stmt  = $this->db->prepare("INSERT INTO 39_coupon_used (campaign_id,customer_id,sbl_member_id,condition_id,barcode) VALUES (:campaign_id,:customer_id,:sbl_member_id,:condition_id,:barcode)");
			$stmt->execute([
				'campaign_id' => $campaign_id,
				'customer_id' => $cus_id,
				'sbl_member_id' => $sbl_member_id,
				'condition_id' => $condition_id,
				'barcode' => $barcode
			]);
		} catch (Exception $e) {

		}
		return $response
    		->withStatus(200)
    		->withHeader("Content-Type", "application/json;charset=utf-8")
    		->write(json_encode(array('status'=>'OK'), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));
	}
});


$app->get('/rurl/{campaign_id}/{cus_id}/{rurl_id}',function(Request $request, Response $response, array $args){
	
	$campaign_id = $args['campaign_id'];
	$cus_id = $args['cus_id'];
	$rurl_id = $args['rurl_id'];
	$stmt  = $this->db->prepare("SELECT rurl_full FROM rurl WHERE rurl_id=:rurl_id");
	$stmt->execute(['rurl_id' => $rurl_id]);
	$rurl = $stmt->fetch();

	$stmt  = $this->db->prepare("SELECT id FROM customer WHERE id=:cus_id AND CAMPAIGN_ID=:campaign_id");
	$stmt->execute([
		'cus_id' => $cus_id,
		'campaign_id' => $campaign_id
	]);
	$cus = $stmt->fetch();

	if($rurl === FALSE || $cus === FALSE){
		return $response
    		->withStatus(200)
    		->withHeader("Content-Type", "application/json;charset=utf-8")
    		->write(json_encode(array('error'=>'not have url or customer id'), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));
	}else{
		try{
			$stmt  = $this->db->prepare("INSERT INTO customer_click_url (campaign_id,customer_id,rurl_id) VALUES (:campaign_id,:cus_id,:rurl_id)");
			$stmt->execute([
							'campaign_id' => $campaign_id,
							'rurl_id' => $rurl_id,
							'cus_id' => $cus_id
						]);
		} catch (Exception $e) {

		}
		return $response->withStatus(302)->withHeader('Location', $rurl['rurl_full']);
	}
});

$app->get('/pclick/{cus_id}/{condition_id}',function(Request $request, Response $response, array $args){
	$cus_id = $args['cus_id'];
	$condition_id = $args['condition_id'];
	$condition_id_query  = $this->db->prepare("SELECT * FROM promotion WHERE condition_id=:condition_id");
	$condition_id_query->execute(['condition_id' => $condition_id]);
	//echo $condition_id_query->rowCount();


	$cus_id_query  = $this->db->prepare("SELECT * FROM customer WHERE id=:cus_id");
	$cus_id_query->execute(['cus_id' => $cus_id]);
	//echo $cus_id_query->rowCount();

	if($condition_id_query->rowCount() == 0 || $cus_id_query->rowCount() == 0){
		return $response
    		->withStatus(200)
    		->withHeader("Content-Type", "application/json;charset=utf-8")
    		->write(json_encode(array('status'=>'ERR'), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));
	}else{
		try{
			$stmt  = $this->db->prepare("INSERT INTO customer_click_promotion (condition_id,customer_id) VALUES (:condition_id,:customer_id)");
			$stmt->execute([
							'condition_id' => $condition_id,
							'customer_id' => $cus_id
						]);
		} catch (Exception $e) {

		}
		return $response
    		->withStatus(200)
    		->withHeader("Content-Type", "application/json;charset=utf-8")
    		->write(json_encode(array('status'=>'OK'), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));
	}
});

$app->get('/report/open_count',function(Request $request, Response $response, array $args) {

	$data['campaign_id'] = 25;
	$data['start_date'] = "2019-01-31 00:00:00";
	$data['end_date'] = "2019-02-06 23:59:59";

	$stmt  = $this->db->prepare("SELECT DATE_FORMAT(date, '%Y-%m-%d') as date, COUNT(*) as open_count FROM customer_read GROUP BY DATE(date)");
	$stmt->execute();
	//$open = $stmt->fetch();

	//if($open !== false) {
		//$stmt->fetchAll(PDO::FETCH_ASSOC);
		$data['data'] = NULL;
		while ($a = $stmt->fetch()) {
			//$data['data'][] = $a;

			foreach($a as $key => $value) {
				//var_dump($key);
				//var_dump($value);
				$convert_data[$key] = ($key == 'date') ? $value : (int)$value;
			}

			$data['data'][] = $convert_data;
		}
	/*} else {
		return $response
		    ->withStatus(404)
		    ->withHeader("Content-Type", "application/json;charset=utf-8")
		    ->write(json_encode(array('error'=>'not have data'), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));
	}*/

	return $response
			->withStatus(200)
			->withHeader("Content-Type", "application/json;charset=utf-8")
			->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));
});

$app->get('/report/{campaign_id}/open_count',function(Request $request, Response $response, array $args) {

	$data['campaign_id'] = $args['campaign_id'];
	$data['start_date'] = "2019-01-31 00:00:00";
	$data['end_date'] = "2019-02-06 23:59:59";

	$stmt  = $this->db->prepare("SELECT DATE_FORMAT(date, '%Y-%m-%d') as date, COUNT(*) as open_count FROM 39_customer_read WHERE CAMPAIGN_ID=:campaign_id GROUP BY DATE(date)");
	$stmt->execute([
		'campaign_id' => $data['campaign_id']
	]);
	//$open = $stmt->fetch();

	//if($open !== false) {
		//$stmt->fetchAll(PDO::FETCH_ASSOC);
		$data['data'] = NULL;
		while ($a = $stmt->fetch()) {
			//$data['data'][] = $a;

			foreach($a as $key => $value) {
				//var_dump($key);
				//var_dump($value);
				$convert_data[$key] = ($key == 'date') ? $value : (int)$value;
			}

			$data['data'][] = $convert_data;
		}
	/*} else {
		return $response
		    ->withStatus(404)
		    ->withHeader("Content-Type", "application/json;charset=utf-8")
		    ->write(json_encode(array('error'=>'not have data'), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));
	}*/

	return $response
			->withStatus(200)
			->withHeader("Content-Type", "application/json;charset=utf-8")
			->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));
});

$app->get('/report/coupon_use',function(Request $request, Response $response, array $args){

	$data['campaign_id'] = 25;
	$data['start_date'] = "2019-01-31 00:00:00";
	$data['end_date'] = "2019-02-06 23:59:59";

//	$stmt  = $this->db->prepare("SELECT DATE_FORMAT(customer_click_promotion.date, '%Y-%m-%d') as date, COUNT(*) as coupon_use ,count(customer_click_url.customer_id) as customer_use  FROM `customer_click_promotion`,`customer_click_url` WHERE DATE_FORMAT(customer_click_promotion.date, '%y-%m-%d') = DATE_FORMAT(customer_click_url.time, '%y-%m-%d') GROUP BY DATE_FORMAT(customer_click_promotion.date, '%y-%m-%d')");
	//$stmt  = $this->db->prepare("SELECT * FROM `customer_click_url`,`customer_click_promotion` GROUP BY DATE_FORMAT(customer_click_url.time, '%y-%m-%d')");
         
/*        $stmt = $this->db->prepare("SELECT 
                                           DATE_FORMAT(customer_click_promotion.date, '%Y-%m-%d') as date, 
                                           COUNT(*) customer_use , 
                                           (SELECT count(*) 
                                                           FROM customer_click_url 
                                                                                    WHERE DATE_FORMAT(customer_click_url.time,'%Y-%m-%d') = DATE_FORMAT(customer_click_promotion.date,'%Y-%m-%d')
                                            ) as counpon_use
                                                               FROM customer_click_promotion GROUP BY DATE_FORMAT(customer_click_promotion.date, '%Y-%m-%d')
                                   ");

*/

	$stmt  = $this->db->prepare("SELECT DATE_FORMAT(date, '%Y-%m-%d') as date, COUNT(*) as coupon_use, COUNT(*) as customer_use FROM customer_click_promotion GROUP BY DATE(date)");
	$stmt->execute();
	//$open = $stmt->fetch();

	//if($open !== false) {
	//$stmt->fetchAll(PDO::FETCH_ASSOC);
	$data['data'] = NULL;
	while ($a = $stmt->fetch()) {

		foreach($a as $key => $value) {
			//var_dump($key);
			//var_dump($value);
			$convert_data[$key] = ($key == 'date') ? $value : (int)$value;
		}

		$data['data'][] = $convert_data;
	}

/*
	$stmt = $this->db->prepare("SELECT DATE_FORMAT(customer_click_promotion.date, '%Y-%m-%d') as datet, 
                                                                                                          (
                                                                                                           (SELECT count(*) FROM customer_click_promotion WHERE DATE_FORMAT(customer_click_promotion.date, '%Y-%m-%d') = datet) +
                                                                                                           (SELECT count(*) FROM customer_click_url WHERE DATE_FORMAT(customer_click_url.time, '%Y-%m-%d') = datet)
                                                                                                           ) as coupon_use 
                                                                                                                            FROM customer_click_promotion GROUP BY DATE_FORMAT(customer_click_promotion.date, '%Y-%m-%d')
                                  "); 

	$stmt->execute();
	//$data = $stmt ->fetch();

	if($data !== false) {
		//$stmt->fetchAll(PDO::FETCH_ASSOC);
		$data['data'] = NULL;
		while ($a = $stmt ->fetch()) {

			$a['date'] = $a['datet'];
                        unset($a['datet']);

			$stmt_customer_click_promotion = $this->db->prepare("SELECT customer_id FROM customer_click_promotion WHERE DATE_FORMAT(date, '%Y-%m-%d') = :date");
                        $stmt_customer_click_promotion->execute(array('date'=>$a['date']));

			$sql = null;

			while($customer_click_promotion = $stmt_customer_click_promotion->fetch()){
				$sql[] = $customer_click_promotion['customer_id'];				
			}

			$stmt_customer_click_url = $this->db->prepare("SELECT customer_id FROM customer_click_url WHERE DATE_FORMAT(time, '%Y-%m-%d') = :date");
                        $stmt_customer_click_url->execute(array('date'=>$a['date']));
                       
			//var_dump($sql);
 
   			while($customer_click_url = $stmt_customer_click_url->fetch()){
				$sql[] = $customer_click_url['customer_id'];
			}
			
		
                        $customer_id = array_unique($sql,SORT_REGULAR);
			$a['customer_use'] = count($customer_id);
			$data['data'][] = $a;
		}
	} else {
		return $response
		    ->withStatus(404)
		    ->withHeader("Content-Type", "application/json;charset=utf-8")
		    ->write(json_encode(array('error'=>'not have data'), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));
	}
*/
	return $response
    ->withStatus(200)
    ->withHeader("Content-Type", "application/json;charset=utf-8")
    ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));

});

$app->get('/report/{campaign_id}/coupon_use',function(Request $request, Response $response, array $args){

	$data['campaign_id'] = $args['campaign_id'];
	$data['start_date'] = "2019-01-31 00:00:00";
	$data['end_date'] = "2019-02-06 23:59:59";
/*
	$stmt  = $this->db->prepare("SELECT DATE_FORMAT(date, '%Y-%m-%d') as date, COUNT(*) as coupon_use FROM 39_coupon_used GROUP BY DATE(date)");
	$stmt->execute();

	$data['data'] = NULL;
	while ($a = $stmt->fetch()) {

		foreach($a as $key => $value) {
			$convert_data[$key] = ($key == 'date') ? $value : (int)$value;
		}

		$data['data'][] = $convert_data;
	}
*/
	$stmt  = $this->db->prepare("SELECT DATE_FORMAT(date, '%Y-%m-%d') as date, COUNT(*) as coupon_use, COUNT(DISTINCT customer_id) as customer_use FROM 39_coupon_used WHERE CAMPAIGN_ID=:campaign_id GROUP BY DATE(date)");
	$stmt->execute([
		'campaign_id' => $data['campaign_id']
	]);

	$data['data'] = NULL;
	while ($a = $stmt->fetch()) {

		foreach($a as $key => $value) {
			//$data['data'][] = $value;
			$convert_data[$key] = ($key == 'date') ? $value : (int)$value;
		}

		$data['data'][] = $convert_data;
	}

	return $response
    ->withStatus(200)
    ->withHeader("Content-Type", "application/json;charset=utf-8")
    ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));

});

$app->get('/report/getTX',function(Request $request, Response $response, array $args) {
	$cond_id = (isset($_GET['cond_id'])) ? (int)$_GET['cond_id'] : null;
	$start = (isset($_GET['start'])) ? (int)$_GET['start'] : 0;
	$limit = (isset($_GET['limit'])) ? (int)$_GET['limit'] : 100;
	$openDate = (isset($_GET['openDate'])) ? $_GET['openDate'] : null;



	// always initialize a variable before use!
	$conditions = [];
	$parameters = [];

	// conditional statements
	if (!empty($cond_id))
	{
		$conditions[] = 'customer.Condition_ID = ?';
		$parameters[] = $cond_id;
	}

	if (!empty($openDate))
	{
		// here we are using equality
		$conditions[] = 'DATE_FORMAT(date, \'%Y-%m-%d\') = ?';
		$parameters[] = $openDate;
	}

	//$parameters[] = $start;
	//$parameters[] = $limit;

	// a smart code to add all conditions, if any
	if ($conditions)
	{
		$where = " WHERE ".implode(" AND ", $conditions);
	} else {
		$where = null;
	}

	$stmt = $this->db->prepare("SELECT COUNT(*) as total FROM customer RIGHT JOIN customer_read ON (customer.id = customer_read.customer_id) " . $where);
	$stmt->execute($parameters);
	//$rows = $stmt->rowCount();

	while ($valtotal = $stmt->fetch()) {
		$rows = (int)$valtotal['total'];
	}

	$stmt = $this->db->prepare("SELECT customer.*, customer_read.date as open_date FROM customer RIGHT JOIN customer_read ON (customer.id = customer_read.customer_id) " . $where . " LIMIT " . $start . ", " . $limit);
	//$stmt = $this->db->prepare("SELECT customer.*, the_one_card.t1c_Card_no, customer_read.date as open_date FROM customer LEFT JOIN the_one_card ON (customer.SBL_MEMBER_ID = the_one_card.SBL_MEMBER_ID) RIGHT JOIN customer_read ON (customer.id = customer_read.customer_id) " . $where . " LIMIT " . $start . ", " . $limit);
	//$stmt->bindParam(':start', (int)$start);
	//$stmt->bindParam(':start', $start);
	$stmt->execute($parameters);
	//$rows = $stmt->rowCount();

	$data['status'] = true;
	$data['message'] = "Success to get data";

	$date = new DateTime();
	$data['timestamp'] = $date->getTimestamp();

	$data['resp']['total'] = $rows;
	$data['resp']['start'] = $start;
	$data['resp']['limit'] = $limit;
	$data['resp']['openDate'] = $openDate;
	$data['resp']['cond_id'] = $cond_id;

	while ($val = $stmt->fetch()) {
		unset($val_data);
		$val_data['sbl_member_id'] = $val['SBL_MEMBER_ID'];
		//$val_data['t1c_Card_no'] = $val['t1c_Card_no'];
		$val_data['cond_id'] = (int)$val['Condition_ID'];
		$val_data['opened_date'] = $val['open_date'];

		$data['resp']['data'][] = $val_data;
	}

	return $response
    ->withStatus(200)
    ->withHeader("Content-Type", "application/json;charset=utf-8")
    ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));

});

$app->get('/report/39/getTX',function(Request $request, Response $response, array $args) {
	$cond_id = (isset($_GET['cond_id'])) ? (int)$_GET['cond_id'] : null;
	$start = (isset($_GET['start'])) ? (int)$_GET['start'] : 0;
	$limit = (isset($_GET['limit'])) ? (int)$_GET['limit'] : 100;
	$openDate = (isset($_GET['openDate'])) ? $_GET['openDate'] : null;



	// always initialize a variable before use!
	$conditions = [];
	$parameters = [];

	// conditional statements
	if (!empty($cond_id))
	{
		$conditions[] = 'customer.Condition_ID2 = ?';
		$parameters[] = $cond_id;
	}

	if (!empty($openDate))
	{
		// here we are using equality
		$conditions[] = 'DATE_FORMAT(date, \'%Y-%m-%d\') = ?';
		$parameters[] = $openDate;
	}

	//$parameters[] = $start;
	//$parameters[] = $limit;

	// a smart code to add all conditions, if any
	if ($conditions)
	{
		$where = " WHERE ".implode(" AND ", $conditions);
	} else {
		$where = null;
	}

	$stmt = $this->db->prepare("SELECT COUNT(*) as total FROM customer RIGHT JOIN 39_customer_read ON (customer.id = 39_customer_read.customer_id) " . $where);
	$stmt->execute($parameters);

	while ($valtotal = $stmt->fetch()) {
		$rows = (int)$valtotal['total'];
	}

	$stmt = $this->db->prepare("SELECT customer.*, 39_customer_read.date as open_date FROM customer RIGHT JOIN 39_customer_read ON (customer.id = 39_customer_read.customer_id) " . $where . " LIMIT " . $start . ", " . $limit);
	$stmt->execute($parameters);

	$data['status'] = true;
	$data['message'] = "Success to get data";

	$date = new DateTime();
	$data['timestamp'] = $date->getTimestamp();

	$data['resp']['total'] = $rows;
	$data['resp']['start'] = $start;
	$data['resp']['limit'] = $limit;
	$data['resp']['openDate'] = $openDate;
	$data['resp']['cond_id'] = $cond_id;

	while ($val = $stmt->fetch()) {
		unset($val_data);
		$val_data['sbl_member_id'] = $val['SBL_MEMBER_ID'];
		$val_data['cond_id'] = $val['Condition_ID2'];
		$val_data['opened_date'] = $val['open_date'];

		$data['resp']['data'][] = $val_data;
	}

	return $response
    ->withStatus(200)
    ->withHeader("Content-Type", "application/json;charset=utf-8")
    ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));

});

$app->get('/the1/{toc_id}',function(Request $request, Response $response, array $args){
	$referer_url = $args['toc_id'];
	/*$referer_url = $request->getHeaders()['HTTP_REFERER'];
	$referer_url = str_replace('http://my.the1.co.th/', '', $referer_url);
	$referer_url = explode('_', $referer_url[0]);
	$referer_url = $referer_url[0];*/

	$stmt  = $this->db->prepare("SELECT Personalized_Link1 FROM the_one_card WHERE t1c_Card_no=:t1c_Card_no");
	$stmt->execute(['t1c_Card_no' => $referer_url]);
	$theone = $stmt->fetch();

	if($theone === FALSE){
		return $response->withStatus(302)->withHeader('Location', 'https://crm.tops.co.th/cny2019/th/mass');
	}else{
		return $response->withStatus(302)->withHeader('Location', $theone['Personalized_Link1']);
	}
});


//Campaign Mom
$app->get('/makmar2019/cds-infant', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, '/makmar2019/cds-infant.phtml', $args);
});
$app->get('/makmar2019/cds-toddler', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, '/makmar2019/cds-toddler.phtml', $args);
});
$app->get('/makmar2019/cds-pre-school', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, '/makmar2019/cds-pre-school.phtml', $args);
});
$app->get('/makmar2019/cds-junior', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, '/makmar2019/cds-junior.phtml', $args);
});
$app->get('/makmar2019/rbs-infant', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, '/makmar2019/rbs-infant.phtml', $args);
});
$app->get('/makmar2019/rbs-toddler', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, '/makmar2019/rbs-toddler.phtml', $args);
});
$app->get('/makmar2019/rbs-pre-school', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, '/makmar2019/rbs-pre-school.phtml', $args);
});
$app->get('/makmar2019/rbs-junior', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, '/makmar2019/rbs-junior.phtml', $args);
});


//Campaign home
$app->get('/homeandliving2019/construction-rbs', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, '/homeandliving2019/construction-rbs.phtml', $args);
});
$app->get('/homeandliving2019/decorative-rbs', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, '/homeandliving2019/decorative-rbs.phtml', $args);
});
$app->get('/homeandliving2019/furnishing-rbs', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, '/homeandliving2019/furnishing-rbs.phtml', $args);
});
$app->get('/homeandliving2019/dinning-rbs', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, '/homeandliving2019/dinning-rbs.phtml', $args);
});
$app->get('/homeandliving2019/gardending-rbs', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, '/homeandliving2019/gardending-rbs.phtml', $args);
});
//
$app->get('/homeandliving2019/construction-cds', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, '/homeandliving2019/construction-cds.phtml', $args);
});
$app->get('/homeandliving2019/decorative-cds', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, '/homeandliving2019/decorative-cds.phtml', $args);
});
$app->get('/homeandliving2019/furnishing-cds', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, '//homeandliving2019/furnishing-cds.phtml', $args);
});
$app->get('/homeandliving2019/dinning-cds', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, '/homeandliving2019/dinning-cds.phtml', $args);
});
$app->get('/homeandliving2019/gardending-cds', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, '/homeandliving2019/gardending-cds.phtml', $args);
});


//Campaign women
$app->get('/wealthwomen2019/cds', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, '/wealthwomen2019/cds.phtml', $args);
});
$app->get('/wealthwomen2019/rbs', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, '/wealthwomen2019/rbs.phtml', $args);
});





















