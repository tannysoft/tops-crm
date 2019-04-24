<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->group(['prefix' => 'api/v2'], function () use ($router) {
    $router->get('/campaigns/{campaignId}/customers/{id}', 'CustomersController@getCustomer');
    $router->get('/generate/qrcode', 'CustomersController@generateQrcode');
    //$router->get('/campaigns/{campaignId}/customers/{id}/barcode/{barcode}/update', 'CouponUsedsController@updateBarcode');
});
/*
$router->get('/api/v2/customers/{id}', function ($id) {
    return 'User '.$id;
});*/

/**
 * Routes for resource customers
 */
//$router->get('customers', 'CustomersController@all');
//$router->get('customers/{id}', 'CustomersController@get');
//$router->post('customers', 'CustomersController@add');
//$router->put('customers/{id}', 'CustomersController@put');
//$router->delete('customers/{id}', 'CustomersController@remove');

/**
 * Routes for resource 39-coupon-used
 */
/*
$app->get('39-coupon-used', '39CouponUsedsController@all');
$app->get('39-coupon-used/{id}', '39CouponUsedsController@get');
$app->post('39-coupon-used', '39CouponUsedsController@add');
$app->put('39-coupon-used/{id}', '39CouponUsedsController@put');
$app->delete('39-coupon-used/{id}', '39CouponUsedsController@remove');
*/