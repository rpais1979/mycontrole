<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\Clients;

// TIPOS DE CONTATO

$app->get('/admin/client', function() {

	User::verifyLogin();

	$client = Clients::listAll();

	$page = new PageAdmin();

	$page->setTpl('client', array('client'=>$client));

});

$app->get("/admin/client/create", function(){

	User::verifyLogin();
	
	$page = new Mycontrole\PageAdmin();

	$page->setTpl("client-create");

});

$app->post("/admin/client/create", function(){

	User::verifyLogin();

	$client = new Clients();

	$client->setData($_POST);

	$client->save();

	header("Location: /admin/client");
	exit;	

});

$app->get("/admin/client/:idclient/delete", function($idclient){

	User::verifyLogin();

	$client = new Clients();

	$client->get((int)$idclient);

	$client->delete();

	header("Location: /admin/client");
	exit;
});

$app->get("/admin/client/:idclient", function($idclient){

	User::verifyLogin();

	$client = new Clients();

	$client->get((int)$idclient);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("client-update", array("client"=>$client->getValues()
	));
});

$app->post("/admin/client/:idclient", function($idclient){

	User::verifyLogin();

	$client = new Clients();

	$client->get((int)$idclient);

	$client->setData($_POST);

	$client->save();

	header("Location: /admin/client");
	exit;	
	
});



?>