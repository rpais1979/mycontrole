<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\Correios;

// TIPOS DE CONTATO

$app->get('/admin/simuladordefrete', function() {

	User::verifyLogin();

	$correios = Correios::listAll();

	$page = new PageAdmin([], '/views/admin/correios/');

	$page->setTpl('simuladordefrete', array('simuladordefrete'=>$correios));

});

$app->get("/admin/correios/simulador", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/correios/');
	
	$page->setTpl("simuladordefrete");

});

$app->post("/admin/correios/simulador", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/correios/');

	$correios = new Correios();

	$correios->setData($_POST);

	$correios->save();

	header("Location: /admin/correios/correios");
	exit;	

});

$app->get("/admin/correios/:idcorreios/delete", function($idcorreios){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/correios/');

	$correios = new Correios();

	$correios->get((int)$idcorreios);

	$correios->delete();

	header("Location: /admin/correios/correios");
	exit;
});

$app->get("/admin/correios/:idcorreios", function($idcorreios){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/correios/');

	$correios = new Correios();

	$correios->get((int)$idcorreios);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("correios-editar", array("correios"=>$correios->getValues()
	));
});

$app->post("/admin/correios/:idcorreios", function($idcorreios){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/correios/');

	$correios = new Correios();

	$correios->get((int)$idcorreios);

	$correios->setData($_POST);

	$correios->save();

	header("Location: /admin/correios/correios");
	exit;	
	
});



?>