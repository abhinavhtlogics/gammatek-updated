<?php

// Get our helper functions
require_once("functions.php");

// Set variables for our request
$api_key = "8fe74b1fd1ebd2561a775cc5beeb5cb8";
$shared_secret = "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";
$params = $_GET; // Retrieve all request parameters

$parsedUrl = parse_url('https://' . $shop_url );
$host = explode('.', $parsedUrl['host']);
$subdomain = $host[0];

$shop = $subdomain;
$array = array(
	'webhook' => array(
		'topic' => 'orders/create', 
		'address' => 'https://gammatek.devworktdmc.com/order_webhook.php',
		'format' => 'json'
	)
);


$webhook = shopify_call($access_token, $shop, "/admin/api/2020-07/webhooks.json", $array, 'POST');
$webhook = json_decode($webhook['response'], JSON_PRETTY_PRINT);


print_r($webhook);

?>