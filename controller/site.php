<?php

use \Slim\Slim;
use \Mycontrole\Page;

$app->get('/', function() {

	//User::verifyLogin();
    
	$page = new Page();

	$page->setTpl("index");

});

?>