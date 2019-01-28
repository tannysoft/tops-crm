<?php

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
*/

$app->get('/data/{url_id}',function(Request $request, Response $response, array $args){
	$url_id = $args['url_id'];
	$stmt  = $this->db->prepare("SELECT * FROM customer WHERE url_id=:url_id");
	$stmt->execute(['url_id' => $url_id]);
	$data = $stmt ->fetch();

	if($data !== false){
		$stmt = $this->db->prepare("SELECT rurl_id FROM customer_click_url WHERE customer_id = :cus_id");
		$stmt->execute(['cus_id' => $data['id']]);
		$url_click = $stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach ($url_click as $key => $value) {
			$data['url'][] = $value['rurl_id'];
		}
	}else{
		return $response
		    ->withStatus(404)
		    ->withHeader("Content-Type", "application/json;charset=utf-8")
		    ->write(json_encode(array('error'=>'not have data'), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));
	}

	return $response
    ->withStatus(200)
    ->withHeader("Content-Type", "application/json;charset=utf-8")
    ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));
    
});

$app->get('/rurl/{cus_id}/{rurl_id}',function(Request $request, Response $response, array $args){
	$cus_id = $args['cus_id'];
	$rurl_id = $args['rurl_id'];
	$stmt  = $this->db->prepare("SELECT rurl_full FROM rurl WHERE rurl_id=:rurl_id");
	$stmt->execute(['rurl_id' => $rurl_id]);
	$rurl = $stmt->fetch();

	$stmt  = $this->db->prepare("SELECT id FROM customer WHERE id=:cus_id");
	$stmt->execute(['cus_id' => $cus_id]);
	$cus = $stmt->fetch();

	if($rurl === FALSE || $cus === FALSE){
		return $response
    		->withStatus(200)
    		->withHeader("Content-Type", "application/json;charset=utf-8")
    		->write(json_encode(array('error'=>'not have url or customer id'), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT |  JSON_UNESCAPED_UNICODE));
	}else{
		try{
			$stmt  = $this->db->prepare("INSERT INTO customer_click_url (customer_id,rurl_id) VALUES (:cus_id,:rurl_id)");
			$stmt->execute([
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
