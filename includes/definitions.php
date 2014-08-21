<?php

$devUrl = "webmistress-dev.com";
$stagingUrl = "webmistress-staging.com";
$currentUrl = $_SERVER['SERVER_NAME'];

if($currentUrl == $devUrl) { 
	define('ROOT_DIR', "http://webmistress-dev.com/Samumed");
 } else if($currentUrl == $stagingUrl) { 
	define('ROOT_DIR', "http://webmistress-staging.com/Samumed");
 } else { 
	 define('ROOT_DIR', "http://samumed.com");
 } 
 
 ?>