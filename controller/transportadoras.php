<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\Transportadora;

// TIPOS DE CONTATO

$app->get('/admin/transportadora', function() {

	User::verifyLogin();

	$transportadora = Transportadora::listAll();

	$page = new PageAdmin([], '/views/admin/transportadora/');

	$page->setTpl('transportadora', array('transportadora'=>$transportadora));

});

$app->get("/admin/transportadora/novo", function(){

	User::verifyLogin();
	
	$page = new PageAdmin([], '/views/admin/transportadora/');

	$page->setTpl("transportadora-novo");

});

$app->post("/admin/transportadora/novo", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/transportadora/');

	$transportadora = new Transportadora();

	$transportadora->setData($_POST);

	$transportadora->save();

	header("Location: /admin/transportadora");
	exit;	

});

$app->get("/admin/transportadora/:idtransportadora/delete", function($idtransportadora){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/transportadora/');

	$transportadora = new Transportadora();

	$transportadora->get((int)$idtransportadora);

	$transportadora->delete();

	header("Location: /admin/transportadora");
	exit;
});

$app->get("/admin/transportadora/:idtransportadora", function($idtransportadora){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/transportadora/');

	$transportadora = new Transportadora();

	$transportadora->get((int)$idtransportadora);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("transportadora-update", array("transportadora"=>$transportadora->getValues()
	));
});

$app->post("/admin/transportadora/:idtransportadora", function($idtransportadora){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/transportadora/');

	$transportadora = new Transportadora();

	$transportadora->get((int)$idtransportadora);

	$transportadora->setData($_POST);

	$transportadora->save();

	header("Location: /admin/transportadora");
	exit;	
	
});



?>